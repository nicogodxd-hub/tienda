<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FONTASWERONE ICONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-info-subtle min-vh-100 d-flex align-items-center justify-content-center">

    <main class="container p-3">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5 col-xl-4">
                
                <!-- TARJETA LOGIN-->
                <div class="card bg-white border-0 shadow-lg rounded-4 p-4">
                    
                    <!-- ICONO Y TITULO -->
                    <div class="text-center mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-info bg-opacity-10 text-info rounded-circle p-3 mb-3">
                            <i class="fa-solid fa-user-lock fa-2x"></i>
                        </div>
                        <h1 class="h3 fw-bold text-dark mb-1">Iniciar sesión</h1>
                        <p class="text-secondary small mb-0">Bienvenido, por favor ingrese sus datos</p>
                    </div>

                    <!-- FORM -->
                    <form id="loginForm" onsubmit="handleLogin(event)" novalidate>
                        
                        <!-- INPUT USUARIO-->
                        <div class="mb-3">
                            <label for="username" class="form-label text-secondary fw-semibold small">Nombre de usuario</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-secondary border-end-0">
                                    <i class="fa-regular fa-user"></i>
                                </span>
                                <input 
                                    type="text" 
                                    class="form-control border-start-0 ps-0" 
                                    id="username" 
                                    placeholder="Ingrese su usuario" 
                                    required
                                >
                            </div>
                        </div>

                        <!-- INPUT CONTRASEÑA-->
                        <div class="mb-4">
                            <label for="password" class="form-label text-secondary fw-semibold small">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-secondary border-end-0">
                                    <i class="fa-solid fa-lock"></i>
                                </span>
                                <input 
                                    type="password" 
                                    class="form-control border-start-0 border-end-0 ps-0" 
                                    id="password" 
                                    placeholder="••••••••" 
                                    required
                                >
                                <button 
                                    class="btn btn-outline-secondary border-start-0" 
                                    type="button" 
                                    id="togglePassword" 
                                    onclick="alternarVisibilidadContraseña()"
                                    aria-label="Ver u ocultar contraseña"
                                >
                                    <i class="fa-regular fa-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                        </div>

                        <!-- BOTON INICIAR -->
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-info text-white fw-bold py-2 rounded-3 shadow-sm">
                                Iniciar <i class="fa-solid fa-arrow-right ms-1"></i>
                            </button>
                            <!-- BOTON REGISTRARSE-->
                            <button type="button" onclick="handleRegister()" class="btn btn-outline-info fw-semibold py-2 rounded-3">
                                <i class="fa-solid fa-user-plus me-1"></i> Registrarse
                            </button>
                        </div>
                    </form>

                    <!-- ENLASE CONTRASEÑA OLVIDADA -->
                    <div class="text-center pt-3 border-top mt-3">
                        <a href="#forgot-password" onclick="handleForgotPassword(event)" class="text-info text-decoration-none fw-semibold small">
                            ¿Olvidó su contraseña?
                        </a>
                    </div>

                    <!-- ALERTA (REEMPLAZA A ALERT) -->
                    <div id="notificationAlert" class="alert alert-dismissible fade show mt-3 mb-0 d-none" role="alert">
                        <span id="alertMessage"></span>
                    </div>

                </div>

            </div>
        </div>
    </main>

    <!-- BOOTSTRAP BUNDLE JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/bootstrap.bundle.min.js"></script>

    <script>
        /**
        ALTERNADOR DE VISIBILIDAD DE CONTRASEÑA
         */
        function alternarVisibilidadContraseña() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
                eyeIcon.classList.add('text-info');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.remove('text-info');
                eyeIcon.classList.add('fa-eye');
            }
        }

        /**
         * Maneja el clic en el botón Registrarse
         */
        function handleRegister() {
            showAlert('Redirigiendo al formulario de registro...', 'info');
        }

        /**
         * Maneja el envío del formulario
         */
        function handleLogin(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value;

            if (!username || !password) {
                showAlert('campos inclompletos, compruebe por favor.', 'danger');
                return;
            }

            showAlert(`¡Bienvenido, ${username}! Sesión iniciada con éxito.`, 'success');
        }

        /**
         * Maneja el clic en "¿Olvidó su contraseña?"
         */
        function handleForgotPassword(event) {
            event.preventDefault();
            showAlert('Se ha enviado un correo para restablecer la contraseña.', 'info');
        }

        /**
         * Muestra una alerta estilizada de Bootstrap en lugar de un alert()
         */
        function showAlert(message, type) {
            const alertBox = document.getElementById('notificationAlert');
            const alertMessage = document.getElementById('alertMessage');

            alertBox.className = `alert alert-${type} alert-dismissible fade show mt-3 mb-0`;
            alertMessage.textContent = message;
            alertBox.classList.remove('d-none');

            setTimeout(() => {
                alertBox.classList.add('d-none');
            }, 4000);
        }
    </script>
</body>
</html>