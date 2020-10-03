var $form = document.querySelector('.form');
var $error = document.querySelector('.error');
var $inputFields = document.querySelectorAll('.input-field');
var $email = document.getElementById('email');
var $password = document.getElementById('password');

function addError(message) {
    $error.innerHTML = message;
    $error.style.display = 'block';
}

function removeError() {
    $error.innerHTML = '';
    $error.style.display = 'hidden';
}

function validate(event) {
    // event.preventDefault () unutk tidak menjalankan fungsi apabila disubmit, yaitu mengirim data ke 'action'
    event.preventDefault();
    $error.style.display = 'none';

    if ($email.value !== 'dts2020' || $password.value !== '1234') {
        addError('Email atau Password salah!');
    } else {
        removeError();
        alert('Anda Berhasil Login');
    }
}

$form.addEventListener('submit', validate);