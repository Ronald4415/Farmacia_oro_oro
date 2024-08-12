<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
	
	<title>Añadir Cliente</title>
</head>
<body>
	<center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>

	<H2>Formulario Adicion de Clientes</H2>
		<section class="formulario_reg">
		<form action="{{route('adicion_cliente')}}" method="post" enctype="multipart/form-data">
			@csrf

			<input class="controles" type="text" name="nomcli" required="" minlength="3" maxlength="30" placeholder="Digite el Nombre">
			<input class="controles" type="text" name="dircli" required="" minlength="3" maxlength="30" placeholder="Digite la Direccion">
			<input class="controles" type="text" name="numcli" required="" minlength="3" maxlength="30" placeholder="Digite el Nro telefonico">
			<input class="controles" type="file" name="nomb_archi" required="">
			<input class="boton" type="submit" name="enviar" value="Enviar">
			</form>	

			<p><a href="{{route('Clientes_farma')}}"><img src="{{asset('img/menu2.png')}}" alt="Pagina principal de clientes" title="Pagina principal de clientes"></a></p>
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