(function () {
  // Create some variables and other items we'll need
  var modal = document.createElement('div');
  var modalInner = document.createElement('div');
  var closeBtn = document.createElement('button');
  var children = document.querySelectorAll('.services-listing > li > div');

  // Add modal window to the DOM
  modal.setAttribute('id', 'services-modal');
  modal.appendChild(modalInner);
  closeBtn.setAttribute('id', 'close-modal');
  closeBtn.innerHTML = 'X';
  document.getElementById('page').appendChild(modal);

  // Grab the content of the item that is clicked and pass it to function to build the modal window
  function getItemContent() {
    var content = this.innerHTML;
    setModalContent(content);
  }

  // Clear existing content of modal window (if any), build the new content, and display it
  function setModalContent(content) {
    modalInner.innerHTML = '';
    modalInner.innerHTML = content;
    modalInner.appendChild(closeBtn);
    document.body.classList.add('modal-active');
    // Need to do these separately because of IE's BS
    modal.classList.add('open');
    modal.classList.add('active');
  }

  // Close the window
  closeBtn.addEventListener('click', function () {
    document.body.classList.remove('modal-active');
    modal.classList.remove('open');

    setTimeout(function () {
      modal.classList.remove('active');
    }, 375);
  });

  // Add a click handler for each item
  for (var i = 0; i < children.length; i++) {
    children[i].addEventListener('click', getItemContent);
  }
})();