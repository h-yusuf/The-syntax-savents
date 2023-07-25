let prevScrollpos = 0;

window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const konten = document.getElementById('konten');
    const navbarHeight = navbar.offsetHeight;
    const scrollTop = window.scrollY;

    if (scrollTop >= navbarHeight) {
        navbar.classList.add('fixed');
        konten.classList.add('mt-150');
    } else {
        if (prevScrollpos < scrollTop && (navbarHeight-scrollTop) > 30) {
            navbar.classList.add('disapear');
            setTimeout(() => {
                navbar.classList.remove('disapear');
            }, 500);
        }

        navbar.classList.remove('fixed');
        konten.classList.remove('mt-150');
    }

    prevScrollpos = scrollTop;
});