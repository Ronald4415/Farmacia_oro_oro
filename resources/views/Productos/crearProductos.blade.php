<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
	
	<title>Añadir Productos</title>
</head>
<body>
	<center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>

	<H2>Formulario Adicion de Productos</H2>
		<section class="formulario_reg">
		<form action="{{route('adicion_Producto')}}" method="post" enctype="multipart/form-data">
			@csrf

			<input class="controles" type="text" name="nompro" required="" minlength="4" maxlength="15" placeholder="Digite el Nombre del Producto">
			<input class="controles" type="text" name="prepro" required="" minlength="2" maxlength="15" placeholder="Digite el precio">
			<input class="controles" type="text" name="stopro" required="" minlength="0" maxlength="15" placeholder="Stock del Producto">
            <input class="controles" type="text" name="catepro" required="" minlength="0" maxlength="15" placeholder="Categoria del producto">
			<input class="controles" type="text" name="provee_pro" required="" minlength="0" maxlength="15" placeholder="Proveedor del productos">
			<input class="boton" type="submit" name="enviar" value="Enviar">
			</form>	

			<p><a href="{{route('Productos_prin')}}"><img src="{{asset('img/menu2.png')}}" alt="Pagina principal de Productos" title="Pagina principal de Productos"></a></p>
			<p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/casa.png')}}" alt="Pagina principal" title="Pagina principal"></a></p>
		</section>
		<style>
		body {
		background-image: url('https://i.pinimg.com/736x/0f/d4/4f/0fd44f6d3da2c4b04b7d904ca699553c.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
</style>
	</center>
	
</body>
</html>