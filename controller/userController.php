<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../service/userService.php';

session_start();

$db = (new config())->connect();
$userService = new userService($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle Registration
    if (isset($_POST['register'])) {
        // Check if passwords match
        if ($_POST['password'] !== $_POST['cpassword']) {
            header("Location: ../register.php?error=passwords_mismatch");
            exit;
        }

        $data = [
            'username' => trim($_POST['username']),
            'useremail' => trim($_POST['useremail']),
            'password' => $_POST['password'],
            'cpassword' => $_POST['cpassword']
        ];
        
        $result = $userService->register($data);
        if ($result === true) {
            header("Location: ../login.php?success=registered");
            exit;
        } elseif ($result === 'email_exists') {
            header("Location: ../register.php?error=email_exists");
            exit;
        } else {
            header("Location: ../register.php?error=registration_failed");
            exit;
        }
    }

    // Handle Login
    if (isset($_POST['login'])) {
        $data = [
            'login_identifier' => trim($_POST['login_identifier']), // Can be username or email
            'password' => $_POST['password']
        ];
        
        $user = $userService->login($data);
        if ($user) {
            // Set session variables
            $_SESSION['user_id'] = $user['userid'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['useremail'] = $user['useremail'];
            $_SESSION['LAST_ACTIVITY'] = time();
            
            // Handle "Remember Me" - set cookie for 1 day
            if (isset($_POST['remember_me'])) {
                setcookie('remember_user', $user['userid'], time() + 86400, '/'); // 86400 = 1 day
            }
            
            // Redirect to home page
            header("Location: ../index.php");
            exit;
        } else {
            header("Location: ../login.php?error=invalid");
            exit;
        }
    }

    // Handle User Deletion
    if (isset($_POST['delete'])) {
        $userService->deleteUser($_SESSION['user_id']);
        
        // Delete cookie if exists
        if (isset($_COOKIE['remember_user'])) {
            setcookie('remember_user', '', time() - 3600, '/');
        }
        
        session_destroy();
        header("Location: ../login.php?deleted=true");
        exit;
    }

    // Handle Avatar Upload
    if (isset($_POST['upload_avatar'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        if (isset($_FILES['avatar'])) {
            $result = $userService->uploadAvatar($_SESSION['user_id'], $_FILES['avatar']);
            
            if ($result['success']) {
                header("Location: ../user/user_account.php?success=avatar_uploaded");
                exit;
            } else {
                header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
                exit;
            }
        } else {
            header("Location: ../user/user_account.php?error=no_file");
            exit;
        }
    }

    // Handle Bio Update
    if (isset($_POST['update_bio'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $bio = trim($_POST['bio']);
        $result = $userService->updateBio($_SESSION['user_id'], $bio);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=bio_updated");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Favorites Update
    if (isset($_POST['update_favorites'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $result = $userService->updateFavorites($_SESSION['user_id'], $_POST);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=favorites_updated");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Single Favorite Update
    if (isset($_POST['update_single_favorite'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $type = $_POST['favorite_type']; // 'director', 'actor', or 'actress'
        $value = trim($_POST['favorite_value']);
        
        $data = [
            'favorite_director' => '',
            'favorite_actor' => '',
            'favorite_actress' => ''
        ];
        
        $data["favorite_$type"] = $value;
        
        $result = $userService->updateSingleFavorite($_SESSION['user_id'], $type, $value);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=favorites_updated");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Delete Favorite
    if (isset($_POST['delete_favorite'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $type = $_POST['favorite_type'];
        $result = $userService->updateSingleFavorite($_SESSION['user_id'], $type, '');
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=favorite_deleted");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Top 5 Movies Update
    if (isset($_POST['update_top5'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $movies = [];
        for ($i = 1; $i <= 5; $i++) {
            if (!empty($_POST["movie{$i}_title"])) {
                $movies[] = [
                    'title' => trim($_POST["movie{$i}_title"]),
                    'poster' => trim($_POST["movie{$i}_poster"])
                ];
            }
        }

        $result = $userService->updateTop5Movies($_SESSION['user_id'], $movies);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=top5_updated");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Single Movie Save (Add or Edit)
    if (isset($_POST['save_single_movie'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $index = intval($_POST['movie_index']);
        $title = trim($_POST['movie_title']);
        $existingPoster = isset($_POST['existing_poster']) ? trim($_POST['existing_poster']) : '';
        
        // Handle poster upload
        $posterFile = isset($_FILES['movie_poster']) ? $_FILES['movie_poster'] : null;
        
        $result = $userService->saveSingleMovieWithUpload($_SESSION['user_id'], $index, $title, $posterFile, $existingPoster);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=movie_saved");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }

    // Handle Delete Movie
    if (isset($_POST['delete_movie'])) {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login.php");
            exit;
        }

        $index = intval($_POST['movie_index']);
        $result = $userService->deleteMovie($_SESSION['user_id'], $index);
        
        if ($result['success']) {
            header("Location: ../user/user_account.php?success=movie_deleted");
            exit;
        } else {
            header("Location: ../user/user_account.php?error=" . urlencode($result['message']));
            exit;
        }
    }
}
