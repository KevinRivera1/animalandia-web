<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../styles.css/registro.css">
</head>

<body>
    <main>
        <div class="container">
            <h2>Formulario de Registro</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="username">Usuario:</label>
                    <input type="text" id="username" name="username" placeholder="Ingrese un usuario...">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese su correo...">
                </div>
                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" placeholder="Ingrese su edad">
                </div>
                <div class="form-group">
                    <label for="genero">Género:</label>
                    <select id="genero" name="genero">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" placeholder="Ingrese su país...">
                </div>
                <div class="form-group">
                    <label for="ciudad">Grado Escolar:</label>
                    <select id="grado" name="grado">
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Preparatoria">Preparatoria</option>
                        <option value="Universidad">Universidad</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="********">
                </div>
                <div class="form-group full-width">
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>
    </main>

    <script src="../js/registro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>