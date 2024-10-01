let navbar = document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
document.querySelector('.navbar').classList.add('active');


  // Function to show the popup
  function showPopup() {
    document.getElementById('location-popup').classList.remove('hidden');
    document.querySelector('.popup-overlay').classList.remove('hidden');
  }

  // Function to close the popup
  function closePopup() {
    document.getElementById('location-popup').classList.add('hidden');
    document.querySelector('.popup-overlay').classList.add('hidden');
  }

  // Example: Show the popup automatically after a delay (for demonstration)
  window.onload = function() {
    setTimeout(showPopup, 2000);  // Show after 2 seconds
  };



let searchForm = document.querySelector('.search-form')

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
 
var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
});