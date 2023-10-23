<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Personalización de estilos */
        body {
            background-image: url('/img/Farmacia.jpeg'); /* Ruta de la imagen */
            background-size: cover; /* Cubrir todo el fondo */
            background-repeat: no-repeat; /* Evitar repetición */
            background-attachment: fixed; /* Fijar la imagen en su lugar */
            background-color: #f8f9fa; /* Color de fondo */
            font-family: "Cairo-SemiBold";
        }
        h3{
            font-size: 35px; /* Tamaño de la fuente */
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
        /* Botón de regresar */
        .btn-regresar {
            background-color: #ff6347; /* Botón rojo */
            border-color: #ff6347; /* Borde rojo */
            color: #ffffff; /* Texto blanco */
        }

        /* Botón de registrarse */
        .btn-registrarse {
            background-color: #20b2aa; /* Botón verde azulado */
            border-color: #20b2aa; /* Borde verde azulado */
            margin-right: 80px;
            color: #ffffff; /* Texto blanco */
            
        }

        /* Estilos al pasar el cursor por los botones */
        .btn-regresar:hover {
            background-color: #e53e3e; /* Botón rojo oscuro al pasar el cursor */
            border-color: #e53e3e; /* Borde rojo oscuro al pasar el cursor */
            color: #ffffff; /* Texto blanco */

        }

        .btn-registrarse:hover {
            background-color: #14a58e; /* Botón verde azulado oscuro al pasar el cursor */
            border-color: #14a58e; /* Borde verde azulado oscuro al pasar el cursor */
            color: #ffffff; /* Texto blanco */
        }

        /* Estilos para el logo */
        .logo-container {
            text-align: center;
            margin-bottom: 5px;
        }

        .logo {
            width: 200px; /* Ancho del logo */
            height: auto; /* Altura automática para mantener la proporción */
        }
        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1% 0 1% 1% !important;
            border-bottom: 4px dashed #fff;
            border-left: 4px dashed #fff;
            border-top: 4px dashed #fff;
            height: auto;
            border-radius: 3% 0 0 3%;
        }
        div>label {
            color: var(--mostaza);
            font-weight: bold;
        }

        div>span {
            color: #939393;
            font-family: "Cairo-SemiBold";
        }

        div>span>a {
            color: var(--primaryColor);
        }
        /* Clase para ajustar la distancia entre los botones */
        .btn-container {
            margin-top: 30px; /* Puedes ajustar este valor según tus preferencias */
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 col-10">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Registrarte</h3>
                        <div class="logo-container">
                            <img class="logo" src="/img/logo.png" alt="Logo de la farmacia">
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('validar-registro') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required
                                    autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="btn-container"> <!-- Contenedor de los botones -->
                                <button type="submit" class="btn btn-registrarse">Registrarse</button>
                                <a href="{{ route('login') }}" class="btn btn-regresar">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
