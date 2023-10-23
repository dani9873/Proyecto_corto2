{{-- plantillas para todos los html y ir a boostrap --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        body {
            font-family: "Poppins", sans-serif;
            line-height: 1.6;
            background-color: #FFFFFF;
            color: #000000;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
        }

        main {
            padding: 2rem;
        }

        p {
            margin-bottom: 1rem;
            line-height: 1.8;
            color: #6C757D;
        }

        footer {
            background-color: #333;
            color: #FFFFFF;
            text-align: center;
            padding: 2rem;
        }

        /* Estilos específicos para la página de inicio */
        .main-image {
            text-align: center;
            margin-bottom: 2rem;
        }

        .main-image img {
            width: 18.75rem;
            height: auto;
        }

        .featured-products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .featured-product {
            flex: 0 1 calc(33.33% - 1rem);
            margin-bottom: 1rem;
            padding: 2rem;
            border: 1px solid #5d9ec4;
            border-radius: 4px;
        }

        .featured-product img {
            width: 100%;
            height: auto;
        }

        .product-title {
            color: #5d9ec4;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .product-description {
            line-height: 1.6;
        }

        /*Se aplican estilos de reseteo a todos los elementos de la página para eliminar márgenes y rellenos predeterminados*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 100%;
            width: 100%;
            margin: auto;
        }

        .navbar {
            margin-top: 0;
            /* Añade esta línea para eliminar cualquier margen superior */
            width: 100%;
            box-shadow: 0 1px 4px rgb(146 161 176 / 15%);
        }

        .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            /* Elimina todo el padding */
            margin: 0;
            /* Elimina cualquier margen */
            height: 100%;
        }

        .logo {
            display: flex;
            width: 220%;
            padding: 0;
            /* Elimina todo el padding */
            margin: 0;
            /* Elimina cualquier margen */
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
        }

        .navbar .menu-items {
            display: flex;
        }

        .navbar .nav-container li {
            list-style: none;
        }

        .navbar .nav-container a {
            text-decoration: none;
            color: #0e2431;
            font-weight: 100%;
            font-size: 1.2rem;
            padding: 0.7rem;
        }

        .navbar .nav-container a:hover {
            font-weight: bolder;
        }

        .nav-container {
            display: block;
            position: relative;
            height: 65x;
        }

        .nav-container .checkbox {
            position: absolute;
            display: block;
            height: 32px;
            width: 32px;
            top: 20px;
            left: 20px;
            z-index: 5;
            opacity: 0;
            cursor: pointer;
        }

        .nav-container .hamburger-lines {
            display: block;
            height: 26px;
            width: 32px;
            position: absolute;
            top: 17px;
            left: 20px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .nav-container .hamburger-lines .line {
            display: block;
            height: 4px;
            width: 100%;
            border-radius: 10px;
            background: #ffffff;
        }

        .nav-container .hamburger-lines .line1 {
            transform-origin: 0% 0%;
            transition: transform 0.4s ease-in-out;
        }

        .nav-container .hamburger-lines .line2 {
            transition: transform 0.2s ease-in-out;
        }

        .nav-container .hamburger-lines .line3 {
            transform-origin: 0% 100%;
            transition: transform 0.4s ease-in-out;
        }

        .navbar .menu-items {
            padding-top: 60px;
            margin-top: 1.2%;
            background-color: white;
            box-shadow: inset 0 0 2000px rgba(255, 255, 255, .5);
            height: 100vh;
            width: 40%;
            transform: translate(-150%);
            display: flex;
            flex-direction: column;
            margin-left: -40px;
            padding-left: 50px;
            transition: transform 0.5s ease-in-out;
            text-align: center;
        }

        .navbar .menu-items li {
            margin-bottom: 1.2rem;

            font-size: 1.5rem;
            font-weight: 500;
        }

        .nav-container input[type="checkbox"]:checked~.menu-items {
            transform: translateX(0);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
            transform: rotate(45deg);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
            transform: scaleY(0);
        }

        .nav-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
            transform: rotate(-45deg);
        }

        .nav-container input[type="checkbox"]:checked~.logo {
            display: none;
        }

        .red {
            position: fixed;
            top: 200px;
            z-index: 1000;
            right: 0;
            display: block;
        }

        #facebook a {
            display: block;
            background: #3b5998;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            width: 55px;
            transition: all .4s ease;
            border-top-left-radius: 10px;
        }

        #facebook a:hover {
            background: #000;
            padding: 10px 50px;
            position: fixed;
            right: 0;
        }

        #youtube a {
            background: #bb0000;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            width: 55px;
            transition: all .4s ease;
        }

        #youtube a:hover {
            background: #000;
            padding: 10px 50px;
            position: fixed;
            right: 0;
        }

        #twitter a {
            background: #55acee;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            width: 55px;
            transition: all .4s ease;
        }

        #twitter a:hover {
            background: #000;
            padding: 10px 50px;
            position: fixed;
            right: 0;
        }

        #correo a {
            background: #d1d413;
            padding: 10px 20px;
            color: #000;
            text-decoration: none;
            width: 55px;
            transition: all .4s ease;
            border-bottom-left-radius: 10px;
        }

        #correo a:hover {
            background: #000;
            color: #fff;
            padding: 10px 50px;
        }

        /* Estilos generales */
        h1 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: bold;
        }

        .actions {
            margin-bottom: 20px;
        }

        /* Estilos para la tabla */
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #e0e0e0;
        }

        .table th {
            background-color: #f0f0f0;
            font-weight: bold;
        }

        /* Estilos para los botones */
        .btn {
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-success {
            background-color: #1da52d;
            color: white;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #349590;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            margin-top: 8px;
        }

        .btn:hover {
            background-color: #555;
            color: white;
        }
        .card-title{
            background-color:#0074A8;
            color: white; 
            text-decoration: none;
        }
        .card{
            background-color:#0074A8;
            color: white; 
        }

        /* Estilo para todas las filas (<tr>) de la tabla */
        table tr {
            background-color: #f2f2f2;
            /* Color de fondo para todas las filas */
        }

        /* Estilo para todas las celdas (<td>) de la tabla */
        table td {
            padding: 10px;
            /* Espaciado interno en todas las celdas */
            border: 1px solid #ddd;
            /* Borde en todas las celdas */
        }

        /* Estilo para las celdas de encabezado (<th>) si las tienes */
        table th {
            background-color: #333;
            /* Color de fondo para las celdas de encabezado */
            color: white;
            /* Color de texto para las celdas de encabezado */
            padding: 10px;
            /* Espaciado interno en las celdas de encabezado */
        }
    </style>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="menu-toggle" id="holi">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <div class="logo-container">
                    <img class="logo" src="{{ asset('img/LOGO1.png') }}" alt="BienestarPlus - Cuidando de tu salud">
                </div>
                <ul class="menu-items">
                    <li><a href="{{ route('privada') }}">Pagina principal</a></li>
                    <li><a href="{{ route('product.index') }}">Listado de productos</a></li>
                    <li><a href="{{ route('logout') }}">Cerrar session</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="main">
        <!-- un container  y directiva para marcar un area del layout
            donde se puede insertar contenido especifico  -->
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
     <footer>
        <p>Todos los derechos reservados &copy; BienestarPlus {{ date('Y') }}</p>
    </footer>
</body>

</html>
