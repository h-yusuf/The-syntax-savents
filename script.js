let prevScrollpos = 0;
var content = document.getElementById("dropdown-content");
var content_profile = document.getElementById("dropdown-content-profile");

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

// fungsi menampilkan dropdown kategori
function dropdownKategori() {
    content_profile.style.display = "none";
    content.style.display = "block";

    document.addEventListener('click', function(event) {
        const target = event.target;
        if (!content.contains(target)) {
            content.style.display = "none";
        }
      });
}

// fungsi menampilkan dropdown kategori
function dropdownProfile() {
    content.style.display = "none";
    content_profile.style.display = "block";

    document.addEventListener('click', function(event) {
        const target = event.target;
        if (!content.contains(target)) {
            content_profile.style.display = "none";
        }
      });
}

// validate register
function validateFormDaftar() {
    // Get input values
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Email validation using RegEx
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert("Alamat Email tidak valid !");
        return false;
    }

    // Password confirmation check
    if (password !== confirmPassword) {
        alert("Password dan Confirm Password tidak sama!");
        return false;
    }

    // Validation success, form can be submitted
    return true;
}

// validate login
function validateFormMasuk() {
    window.location.href = "index_login.html";
    return false;
}
// search
function search() {
    window.location.href = "sidebar.html";
    return false;
}