const toggleBtn = document.querySelector(".navbar-toggler");
const navbarNav = document.querySelector(".navbar-nav");
const navCloseBtn = document.querySelector(".btn-nav-close");

toggleBtn.addEventListener("click", () => {
    navbarNav.classList.toggle("active");
});


/* Add icon on .nav-item if dropdown exists */
const navItems = document.querySelectorAll(".nav-item");

navItems.forEach((item) => {
    const hasDropdowns = item.querySelector(".dropdown") !== null;
    if (hasDropdowns) {
        item.classList.add("icon");
    }
});

//$(document).ready(function () {
//    $('a').click(function () {
//        //removing the previous selected menu state
//        $('.hmenu').find('li.active').removeClass('active');
//        //adding the state for this parent menu
//        $(this).parents("li").addClass('active');

//    });
//});


// Fixed-header
