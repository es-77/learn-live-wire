alert(123);
document.addEventListener('DOMContentLoaded', function () {

    const button = document.getElementById('myButton');

    button.addEventListener('click', function () {
        Swal.fire({
            title: 'Hello!',
            text: 'This is a SweetAlert2 alert!',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    });
});
