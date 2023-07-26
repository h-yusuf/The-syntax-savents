function cekEmail(){
    var inpEmail = document.getElementById('email')
    var email = inpEmail.value;
    var arr_email = email.split("@")

    if (arr_email[1] != 'gmail.com' && email != ''){
        alert('Email yang di gumanakan wajib menggunakan email gmail');
        inpEmail.value = '';
    }
    console.log(email)
}
function cekPass(){
    var inPass = document.getElementById('password');
    var pass = inPass.value;

    if (pass.length < 8 && pass != ''){
        alert("password minimal 8 karakter")
    }
    console.log(pass)
}


  function masukdaftar() {
    window.location.href = "index.html";
  }