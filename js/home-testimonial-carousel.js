// Carousel
var elem = document.querySelector('.testimonial-carousel');
var flkty = new Flickity(elem, {
  cellAlign: 'left',
  contain: true,
  pageDots: true,
  setGallerySize: true,
  groupCells: true,
  autoPlay: 8000,
  resize: true,
  selectedAttraction: 0.01,
  friction: 0.2,
  wrapAround: true,
  prevNextButtons: true
});