<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300&family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/cell-phone.css')}}">
    <link rel="stylesheet" href="pagina">
    <link rel="stylesheet" href="{{asset('css/Botones.css')}}">
    <link rel="stylesheet" href="{{asset('css/desketop.css')}}" media="(min-width: 900px)"> 
    <link rel="stylesheet" href="{{asset('css/tablet.css')}}" media="(min-width: 1100px)"> 
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav-cont">
                <span></span>
            </div>
        </nav>
        <p class="establised"></p>
        <header>
            <body style="background-color:#255A53;">
            </body>
            <h1> 
                <span>Farmacia oro oro</span> <br>
                Bienestar <br> Para toda tu familia.
            </h1>
            <div class="info-brand">
                <h2>Gran medicinal </h2>
                <p>Ofrecemos mas de 1000 medicamentos<br> para todo lo que necesites</p>
            </div>
            <button class="Mas-info">Mas <i class='bx bxs-right-arrow-alt' ></i></button>
        </header>
        <img class="fondo-ave" src="{{asset('img/Quimica-logo.png')}}" alt="...">
        <div class="bottom-info">
            <p></p>
            <div>
                <i class='bx bxl-twitter' ></i>
                <i class='bx bxl-facebook' ></i>
                <i class='bx bxl-instagram' ></i>
            </div>
        </div>
                    
                    <div class="dropdown">
                        <button>Clientes</button>
                        <div class="dropdown-options">
                        <a href="{{route('Clientes_adic')}}"><h3>Añadir Clientes</h3></a>
                        <a href="{{route('Clientes_farma')}}"><h3>Lista de Clientes</h3></a>
                    </div>

                    <div class="dropdown">
                        <button>Proveedores</button>
                        <div class="dropdown-options">
                        <a href="{{route('Proveedor_adic')}}"><h3>Añadir Proveedor</h3></a>
                        <a href="{{route('Proveedores_medic')}}"><h3>Lista de Proveedores</h3></a>
                    </div>



                    <div class="dropdown">
                        <button>Categorias</button>
                        <div class="dropdown-options">
                        <a href="{{route('Categoria_adic')}}"><h3>Añadir Categorias</h3></a>
                        <a href="{{route('Categorias_prod')}}"><h3>Lista de Categorias</h3></a>
                    </div>

                    <div class="dropdown">
                        <button>Productos</button>
                        <div class="dropdown-options">
                        <a href="{{route('Producto_adic')}}"><h3>Añadir Productos</h3></a>
                        <a href="{{route('Productos_prin')}}"><h3>Lista de Productos</h3></a>
                    </div>
    </div>
</body>
</html>