var checkClass = function (e) {
  var clicked = e.target;

  if (clicked.classList.contains('current')) {
    lightboxDescription.close();
  }
};

var lightboxDescription = GLightbox({
  selector: 'glightbox',
  descPosition: 'bottom',
  moreLength: 0,

  onOpen: function () {
    document.body.addEventListener('click', checkClass);
  },
  onClose: function () {
    document.body.removeEventListener('click', checkClass);
  }
});