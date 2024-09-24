


  // Get the modal
  var modal = document.getElementById("popup-modal");

  // Get the modal content elements
  var modalImage = document.getElementById("modal-image");
  var modalDescription = document.getElementById("modal-description");
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // Function to open the modal
  function openModal(imageSrc, description) {
      modalImage.src = imageSrc;
      modalDescription.textContent = description;
      modal.style.display = "flex"; 
  }
  
  // Function to close the modal
  function closeModal() {
      modal.style.display = "none";
  }
  
  // Add click event to each food item
  var foodItems = document.getElementsByClassName("food-item");
  for (var i = 0; i < foodItems.length; i++) {
      foodItems[i].onclick = function() {
          var imgSrc = this.querySelector("img").src;
          var description = this.getAttribute("data-description");
          openModal(imgSrc, description);
      }
  }
  
  // Close modal when <span> (x) is clicked
  span.onclick = function() {
      closeModal();
  }
  
  // Close modal when clicking outside of the modal
  window.onclick = function(event) {
      if (event.target == modal) {
          closeModal();
      }
  }
  
  
  
  
  
  
  
  
  
  document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper('.home-slider', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 7500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        loop: true,
    });
  });
  
  
  
  const container = document.querySelector('.card-container');
  const cards = document.querySelectorAll('.card');
  const cardWidth = cards[0].offsetWidth + 20; // Include margin in width
  
  function nextSlide() {
      container.scrollBy({
          left: cardWidth,
          behavior: 'smooth'
      });
  }
  
  function prevSlide() {
      container.scrollBy({
          left: -cardWidth,
          behavior: 'smooth'
      });
  }
  
  
  
  