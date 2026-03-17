# Cineblog 2.0 🎬🍿

A dynamic, fully functional movie, TV series, and anime blogging platform built with PHP. Cineblog 2.0 allows users to browse, discover, and manage their favorite entertainment content in one centralized hub.

## 🚀 Overview
Cineblog 2.0 provides a structured, user-friendly interface for cataloging media. Whether you're tracking the latest Hollywood blockbusters, binge-watching popular TV series, or catching up on the latest episodes of One Piece, this platform offers dedicated sections and seamless navigation for all your entertainment needs. 

## ✨ Features
- **Dedicated Media Categories:** Separate pages for Movies (`movies.php`), TV Series (`tseries.php`), and Anime (`anime.php`).
- **User Authentication:** Secure user registration, login, and logout functionality.
- **Organized Architecture:** Follows a clean separation of concerns using MVC-inspired folders (`model`, `controller`, `service`, `database`).
- **Responsive Design:** Custom CSS styling for an optimal viewing experience across devices.
- **Database Integration:** Dynamic content fetching and data management.

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS (Custom styling), JavaScript
- **Backend:** PHP
- **Database:** MySQL (Structured via the `/database` and `/config` directories)

## 📂 Project Structure
```text
Cineblog-2.0/
├── config/         # Database and application configuration files
├── controller/     # Logic for handling user requests and routing
├── model/          # Data structures and database interaction logic
├── service/        # Core business logic and external service integrations
├── database/       # Database scripts or connection handlers
├── includes/       # Reusable UI components (headers, footers, navbars)
├── user/           # User dashboard and profile management
├── index.php       # Main homepage
├── anime.php       # Anime catalog page
├── movies.php      # Movies catalog page
├── tseries.php     # TV series catalog page
├── login.php       # User login page
└── register.php    # User registration page
