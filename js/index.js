/* Esta función es para el menú hamburguesa  para dispositivos mobiles*/
document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.getElementById('menu-btn');
    const navMenu = document.getElementById('nav-menu');

    menuBtn.addEventListener('click', function () {
        navMenu.classList.toggle('show');
    });
});

/* Año actual dinámico */
document.addEventListener('DOMContentLoaded', function () {
    const currentYearElement = document.getElementById('current-year');
    const currentYear = new Date().getFullYear();
    currentYearElement.textContent = currentYear;
});

/* Envia correo de contácto */
document.getElementById('contact-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Evita que se recargue la página

    const formData = new FormData(this);
    for (const [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }

    fetch('https://formsubmit.co/felipejualian@yopmail.com', {
            method: 'POST',
            body: formData
        })
        .then(response => {/*  */
            if (response.ok) {
                Swal.fire({
                    title: 'Éxito',
                    text: '¡Mensaje enviado con éxito!',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('contact-form').reset();
                    }
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: 'Hubo un error al enviar el mensaje.',
                    icon: 'error',
                    confirmButtonText: 'Entendido'
                });
            }
        })
        .catch(error => {
            document.getElementById('form-message').textContent = 'Error de red. Inténtalo de nuevo.';
        });
});

/* Obtner el usuario registrado en Local Storage */
const user = JSON.parse(localStorage.getItem('user'));

if (user && user.username) {
    document.getElementById('usuario_name').textContent = `¡Hola, ${user.username}! Bienvenido a Animalandia.`;
} else {
    document.getElementById('usuario_name').textContent = '¡Hola! Bienvenido a Animalandia. Da clic aquí para registrarte.';
}