

const availableKeywords = [
    { keyword: 'John Wick: Chapter 4', url: 'movie_rev/johnwick4.html' },
    { keyword: 'Fight Club', url: 'movie_rev/fightclub.html' },
    { keyword: 'The Wolf Of Wall Street', url: 'movie_rev/thewolfofwallstreet.html' },
    { keyword: 'Shang-Chi and the legend of the ten rings', url: 'movie_rev/shangchi.html' },
    { keyword: 'Bullet Train', url: 'movie_rev/bullettrain.html' },
    { keyword: 'Ant man', url: 'movie_rev/antman1.html' },
    { keyword: 'DUNE: Part 2', url: 'movie_rev/dunepart2.html' },
    { keyword: 'Barbie', url: 'movie_rev/barbie.html' },
    { keyword: 'oppenhimer', url: 'movie_rev/oppenhimer.html' },
    { keyword: 'DUNE: Part 2', url: 'movie_rev/dunepart2.html' }
  ];

  const resultBox = document.querySelector(".result-box");
  const inputBox = document.getElementById("input-box");

  inputBox.addEventListener("input", function () {
    let input = inputBox.value.toLowerCase();
    let result = [];

    if (input.length) {
      result = availableKeywords.filter((item) => {
        return item.keyword.toLowerCase().includes(input);
      });
    }

    display(result);
  });

  function display(result) {
    const content = result.map((item) => {
      return"<li class='listboxli' onclick=\"window.location.href='" + item.url + "';\">" + item.keyword + "</li><hr>";
    });

    resultBox.innerHTML = "<ul class='listboxul'>" + content.join('') + "</ul>";
  }

  function toggleSearch() {
    var searchBar = document.querySelector('.searchbar');
    searchBar.style.display = (searchBar.style.display === 'none' || searchBar.style.display === '') ? 'block' : 'none';
}