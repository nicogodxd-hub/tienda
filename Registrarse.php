<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/tienda/css/login.css">
</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center p-3">

    <main class="login-card p-4 shadow-sm">
        <h1 class="h4 fw-bold mb-1">registrarse</h1>
        <p class="small text-muted-bg mb-4">complete sus datos para crear una cuenta</p>

<!-- FORMULARIO DE REGISTRO -->
        <form id="formRegistro" action="registro.php" method="POST">
            
            <!-- USUARIO -->
            <div class="mb-3">
                <label for="usuario" class="form-label small fw-semibold mb-1">nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="pepito123" required>
            </div>

            <!-- CORREO -->
            <div class="mb-3">
                <label for="correo" class="form-label small fw-semibold mb-1">correo electronico</label>
                <input type="email" id="correo" name="correo" class="form-control" placeholder="pepito@correo.com" required>
            </div>

            <!-- CONTRASEÑA -->
            <div class="mb-3">
                <label for="clave" class="form-label small fw-semibold mb-1">contraseña</label>
                <div class="input-group">
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="micontraseña123" required>
                    <button type="button" id="mostrarClave" class="btn btn-toggle-pass" aria-label="Mostrar u ocultar contraseña">
                        <i class="bi bi-eye" id="ojoIcon"></i>
                    </button>
                </div>
            </div>
            <!-- CONFIRMAR CONTRASEÑA -->
            <div class="mb-4">
                <label for="confirmarClave" class="form-label small fw-semibold mb-1">confirmar contraseña</label>
                <div class="input-group">
                    <input type="password" id="confirmarClave" name="confirmar_clave" class="form-control" placeholder="repita su contraseña" required>
                    <button type="button" id="mostrarConfirmarClave" class="btn btn-toggle-pass" aria-label="Mostrar u ocultar confirmación de contraseña">
                        <i class="bi bi-eye" id="ojoConfirmarIcon"></i>
                    </button>
                </div>
                <div id="errorClave" class="form-text text-danger d-none">las contraseñas no coinciden</div>
            </div>

            <!-- BOTON REGISTRARSE -->
            <button type="submit" class="btn btn-login w-100 py-2 fw-semibold">registrarse</button>
        </form>

        <div class="mt-4 pt-2 border-top border-secondary-subtle">
            <p class="small mb-0">
                ya tiene usuario? <a href="login.php" class="link-bg">inicie sesion aqui.</a>
            </p>
        </div>
    </main>

    <script>
        function configurarToggle(btnId, inputId, iconId) {
            const btn = document.getElementById(btnId);
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);

            btn.addEventListener('click', function () {
                const isHidden = input.type === 'password';
                input.type = isHidden ? 'text' : 'password';
                icon.className = isHidden ? 'bi bi-eye-slash' : 'bi bi-eye';
            });
        }

        configurarToggle('mostrarClave', 'clave', 'ojoIcon');
        configurarToggle('mostrarConfirmarClave', 'confirmarClave', 'ojoConfirmarIcon');

        const form = document.getElementById('formRegistro');
        const passInput = document.getElementById('clave');
        const confirmInput = document.getElementById('confirmarClave');
        const errorClave = document.getElementById('errorClave');

        function validarCoincidencia() {
            const coinciden = confirmInput.value === '' || passInput.value === confirmInput.value;
            errorClave.classList.toggle('d-none', coinciden);
            confirmInput.setCustomValidity(passInput.value === confirmInput.value ? '' : 'Las contraseñas no coinciden');
        }

        passInput.addEventListener('input', validarCoincidencia);
        confirmInput.addEventListener('input', validarCoincidencia);

        form.addEventListener('submit', function (event) {
            if (passInput.value !== confirmInput.value) {
                event.preventDefault();
                errorClave.classList.remove('d-none');
                confirmInput.focus();
            }
        });
    </script>

</body>

</html>