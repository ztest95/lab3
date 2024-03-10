window.addEventListener('scroll', function() {
    var parallaxheader = document.querySelector('#hero-txt span');
    var scrollPosition = window.pageYOffset;
    parallaxheader.style.transform = 'translateY(' + scrollPosition * .8 + 'px)'; 

    var navItems = document.querySelectorAll('.nav-item-top a');
    var navCircle = document.querySelectorAll('.nav-circle');
    var navJapan = document.querySelectorAll('.nav-item p');
    var navEng = document.querySelectorAll('.nav-eng')
    var nav = document.querySelector('nav');
    if (scrollPosition > 400) {
        navItems.forEach(function(item) {
            item.style.opacity = '0';
        })
        navCircle.forEach(function(item) {
            item.style.backgroundColor = '#ddbda2';
        })
        navJapan.forEach(function(item) {
            item.style.opacity = '1';
        })
    } else {
        navItems.forEach(function(item) {
            item.style.opacity = '1';
        })
        navCircle.forEach(function(item) {
            item.style.backgroundColor = '#1e1e1e';
        })
        navJapan.forEach(function(item) {
            item.style.opacity = '0';
        })
    }

    if (scrollPosition > 1000) {
        navEng.forEach(function(item) {
            item.style.display = 'none';
        })
    }

});

var cursor = document.querySelector('.cursor');

window.addEventListener('mousemove', function(e) {

    cursor.style.left = e.pageX - (cursor.offsetWidth/ 2) + 'px';
    cursor.style.top = e.pageY - (cursor.offsetHeight / 2) +'px';

    cursor.animate({
        left: cursor.style.left,
        top: cursor.style.top
    }, {duration: 500, fill: 'forwards'});
});

var cursorin = document.querySelector('body');
cursorin.addEventListener('mouseenter', function() {
    cursor.style.opacity = '1';
});

cursorin.addEventListener('mouseleave', function() {
    cursor.style.opacity = '0';
});
