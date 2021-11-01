jQuery(document).ready(function( $ ) {
    $(".menuToggle").on("click", function() {
        this.classList.toggle("ham-active");
        document.getElementById('menu').classList.toggle("ham-active");
    });
    $(".menu-item-has-children").on("click", function() {
        var menu = this.querySelector('.sub-menu');
        var actives = document.querySelectorAll('.sub-active');
        actives.forEach(el => {
            if(el !== menu) {
                el.classList.remove("sub-active");
            }   
        });
        menu.classList.toggle("sub-active");
    });
    $( "a[href='#'" ).on("click", function(e) {
        e.preventDefault();
    });
});
const hamburger = document.querySelector('.hamburger');
const navMenu = document.querySelector('.navbar ul');
const navLinks = document.querySelectorAll('.navbar a');

allEventListners();

function allEventListners() {
  hamburger.addEventListener('click', togglerClick);
}

function togglerClick() {
  hamburger.classList.toggle('toggler-open');
  navMenu.classList.toggle('open');
}

function navLinkClick() {
  if(navMenu.classList.contains('open')) {
    navToggler.click();
  }
}