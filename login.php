<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/tienda/css/login.css">
</head>

<body class="min-vh-100 d-flex align-items-center justify-content-center p-3">

    <main class="login-card p-4 shadow-sm">
        <h1 class="h4 fw-bold mb-1">iniciar sesion</h1>
        <p class="small text-muted-bg mb-4">ingrese sus datos</p>

        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label small fw-semibold mb-1">nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="pepito123" required>
            </div>

            <div class="mb-4">
                <label for="clave" class="form-label small fw-semibold mb-1">contraseña</label>
                <div class="input-group">
                    <input type="password" id="clave" name="clave" class="form-control" placeholder="micontraseña123" required>
                    <button type="button" id="mostrarClave" class="btn btn-toggle-pass" aria-label="Mostrar u ocultar contraseña">
                        <i class="bi bi-eye" id="ojoIcon"></i>
                    </button>
                </div>
            </div>

            <button type="submit" class="btn btn-login w-100 py-2 fw-semibold">iniciar sesion</button>
        </form>

        <div class="mt-4 pt-2 border-top border-secondary-subtle">
            <p class="small mb-2">
                sin usuario? <a href="Registrarse.php" class="link-bg">registrese aqui.</a>
            </p>
            <p class="small mt-3 mb-0">
                <a href="recuperar.php" class="link-bg">olvido su contraseña?</a>
            </p>
        </div>
    </main>

<script>
        const verBtn = document.getElementById('mostrarClave');
        const passInput = document.getElementById('clave');
        const ojoIcono = document.getElementById('ojoIcon');

        verBtn.addEventListener('click', function () {
            const isHidden = passInput.type === 'password';
            passInput.type = isHidden ? 'text' : 'password';
            ojoIcono.className = isHidden ? 'bi bi-eye-slash' : 'bi bi-eye';
        });
    </script>

</body>

</html>