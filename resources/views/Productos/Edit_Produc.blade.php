<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
	
	<title>Edicion Productos</title>
</head>
<body>
	<center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>

<br><H2>Formulario Edicion de Productos</H2></br>
		<section class="formulario_reg">
		<form action="{{route('actualizar_Producto', $Productos->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('put')

			<input class="controles" type="text" required="" minlength="4" maxlength="15" name="nompro" value="{{$Productos->nom_producto}}">
			<input class="controles" type="text" required="" minlength="4" maxlength="15" name="prepro" value="{{$Productos->precio_prod}}">
			<input class="controles" type="text" required="" minlength="0" maxlength="15" name="stopro" value="{{$Productos->stock_producto}}">
			<input class="controles" type="text" required="" minlength="0" maxlength="15" name="catepro" value="{{$Productos->Categoria_prod}}">
            <input class="controles" type="text" required="" minlength="0" maxlength="15" name="provee_pro" value="{{$Productos->id_Proveedor}}">
			<input class="boton" type="submit" name="enviar" value="Enviar">
			<input type="hidden" name="dato" value="{{$Productos->id}}">

		</form>	
		<p><a href="{{route('Productos_prin')}}"><img src="{{asset('img/menu2.png')}}" alt="Pagina principal de Clientes" title="Pagina principal de Clientes"></a></p>
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