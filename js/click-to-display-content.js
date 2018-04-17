(function () {
  const readMoreButton = document.querySelectorAll('.read-more-btn');

  for (var i = 0; i < readMoreButton.length; i++) {
    readMoreButton[i].addEventListener('click', function (e) {
      e.preventDefault();
      this.classList.toggle('open');
      this.nextElementSibling.classList.toggle('active');

      if (this.classList.contains('open')) {
        this.innerHTML = "&lt Read less";
      } else {
        this.innerHTML = "Read more &gt";
      }
    })
  }
})();