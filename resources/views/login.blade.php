<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Personalización de estilos */
        body {
            background-image: url('/img/Farmacia.jpeg'); /* Ruta de la imagen de fondo */
            background-size: cover; /* Cubrir todo el fondo */
            background-repeat: no-repeat; /* Evitar repetición */
            background-attachment: fixed; /* Fijar la imagen en su lugar */
            background-color: #f8f9fa; /* Color de fondo en caso de que la imagen no se cargue */
            font-family: "Cairo-SemiBold";
            font-weight: bold; /* Fuente en negrita */
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Sombra */
        }

        .card-header {
            background-color: #14a58e; /* Fondo azul */
            padding-top: 30px; /* Agrega espacio en la parte superior */
            color: #ffffff;
        }

        /* Botón de iniciar sesión */
        .btn-iniciar-sesion {
            background-color: #20b2aa; /* Botón verde azulado */
            border-color: #20b2aa; /* Borde verde azulado */
            color: #ffffff; /* Texto blanco */
        }

        /* Estilos al pasar el cursor por el botón */
        .btn-iniciar-sesion:hover {
            background-color: #14a58e; /* Botón verde azulado oscuro al pasar el cursor */
            border-color: #14a58e; /* Borde verde azulado oscuro al pasar el cursor */
            color: #ffffff; /* Texto blanco */
        }

        /* Estilos para el enlace de registro */
        .registro-link {
            color: #007bff; /* Texto azul para el enlace de registro */
        }

        /* Clase para ajustar la distancia entre el botón y el enlace de registro */
        .btn-link-container {
            margin-top: 20px; /* Puedes ajustar este valor según tus preferencias */
            text-align: center;
        }
         /* Estilos para el logo */
        .logo-container {
            text-align: center;
            margin-bottom: 15px;
        }

        .logo {
            width: 200px; /* Ancho del logo */
            height: auto; /* Altura automática para mantener la proporción */
        }
        h3{
            font-size: 35px; /* Tamaño de la fuente */
            font-weight: bold; /* Fuente en negrita */
        }
    </style>
</head>

<body>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 col-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Bienvenidos</h3>
                        <div class="logo-container">
                            <img class="logo" src="/img/logo.png" alt="Logo de la farmacia">
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inicia-sesion') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="email" class="form-control" id="emailInput" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberCheck" name="remember">
                                <label class="form-check-label" for="rememberCheck">Mantener sesión iniciada</label>
                            </div>
                            <div class="btn-link-container"> <!-- Contenedor del botón y enlace de registro -->
                                <button type="submit" class="btn btn-iniciar-sesion">Acceder</button>
                                <p>¿No tienes cuenta? <a href="{{ route('registro') }}" class="registro-link">Regístrate</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
