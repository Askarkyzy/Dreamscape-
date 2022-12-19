const header = document.querySelector("header");




window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
});


let navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
}

