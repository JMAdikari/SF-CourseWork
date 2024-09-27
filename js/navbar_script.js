// Navbar Functionality

let navbar = document.querySelector('.navbar')

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
    searchForm.classList.remove('active');
}
 


// Search Functionality

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
 


// Corousel/Swiper Functionality

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



// Sidebar Filter Functionality

// Update the displayed price when range slider is moved
document.getElementById('price-range').addEventListener('input', function() {
    const priceValue = document.getElementById('price-value');
    priceValue.textContent = '$' + this.value;

    // Apply filter on input change
    filterMenuItems(this.value);
});

// Function to filter menu items based on price
function filterMenuItems(maxPrice) {
    const menuItems = document.querySelectorAll('.menu-item');

    // Track visibility of categories
    const categorySections = document.querySelectorAll('.menu-category');

    menuItems.forEach(item => {
        const price = parseFloat(item.querySelector('p').textContent.replace('$', ''));

        if (price > maxPrice) {
            item.classList.add('hidden'); // Use CSS class for hiding
        } else {
            item.classList.remove('hidden'); // Remove class to show
        }
    });

    // Check each category to determine visibility
    categorySections.forEach(category => {
        const visibleItems = category.querySelectorAll('.menu-item:not(.hidden)');
        if (visibleItems.length === 0) {
            category.classList.add('hidden'); // Hide category if no items visible
        } else {
            category.classList.remove('hidden'); // Show category if items are visible
        }
    });
}



