/* Registro de usuarios */
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Evita que la página se recargue al enviar el formulario

    /* Obtención de elementos input definidos en html de registro */
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const edad = document.getElementById('edad').value;
    const genero = document.getElementById('genero').value;
    const pais = document.getElementById('pais').value;
    const grado = document.getElementById('grado').value;

    /* Validacion de campos utilizando Regex*/
    const usernamePattern = /^[a-zA-Z0-9]{3,20}$/;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    const edadPattern = /^\d+$/;

    // Validationes de campos
    if (!usernamePattern.test(username)) {
        Swal.fire({
            title: 'Error',
            text: 'El nombre de usuario debe tener entre 3 y 20 caracteres y no contener caracteres especiales.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }

    if (!emailPattern.test(email)) {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, ingrese un correo electrónico válido.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }

    if (!passwordPattern.test(password)) {
        Swal.fire({
            title: 'Error',
            text: 'La contraseña debe tener al menos 8 caracteres, incluir al menos una letra y un número.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }

    if (!edadPattern.test(edad) || edad < 0 || edad > 120) {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, ingrese una edad válida entre 0 y 120.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }

    if (!genero) {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, seleccione un género.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }

    if (!pais) {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, Escriba su país.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
        return;
    }


    if (username && email && password && edad && genero && pais && grado) {
        const user = {
            username: username,
            email: email,
            password: password,
            edad: edad,
            genero: genero,
            pais: pais,
            grado: grado
        };

        /* Guarda los datos ingresados al formulario en Local Storage */
        localStorage.setItem('user', JSON.stringify(user));
        Swal.fire({
            title: 'Registrado con éxito',
            text: 'Los datos se han almacenado correctamente.',
            icon: 'success',
            confirmButtonText: 'Cool'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '/Animalandia-web/';
            }
        });
    } else {
        Swal.fire({
            title: 'Error',
            text: 'Por favor, complete todos los campos.',
            icon: 'error',
            confirmButtonText: 'Entendido'
        });
    }
});