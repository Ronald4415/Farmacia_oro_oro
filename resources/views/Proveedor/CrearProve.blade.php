<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
	
	<title>Document</title>
</head>
<body>
	<center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>
		<br><H2>Formulario Adicion de Proveedores</H2></br>
		<section class="formulario_reg">
		<form action="{{route('adicion_proveedor')}}" method="post" enctype="multipart/form-data">
			@csrf

			<input class="controles" type="text" name="nomprove" required="" minlength="4" maxlength="20" placeholder="Digite el Nombre del Proveedor">
			<input class="controles" type="text" name="dirprove" required="" minlength="4" maxlength="20" placeholder="Digite la Direccion del Proveedor">
			<input class="controles" type="text" name="numprove" required="" minlength="4" maxlength="20" placeholder="Digite el Nro telefonico">
            <input class="controles" type="text" name="webprove" required="" minlength="4" maxlength="20" placeholder="Digite direccion url de la pagina">
			<input class="boton" type="submit" name="enviar" value="Enviar">

		</form>	
		<p><a href="{{route('Proveedores_medic')}}"><img src="{{asset('img/menu2.png')}}"alt="Pagina principal de proveedores" title="Pagina principal de proveedores"></a></p>
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