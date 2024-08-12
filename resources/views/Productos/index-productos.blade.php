<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/tablas.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
    <title>Productos</title>
</head>
<body>
    <center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>
		<h1><font face="Zurich XCn BT">Listado de Productos</font></h1>
<div class="container">
    <table>
			<thead>
				<tr>
					<th>ID</th><th>Nombre del Producto</th><th>Precio</th><th>Stock del Prodcuto</th><th>Categoria</th><th>Proveedor</th><th>Editar</th><th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($Productos as $Productos_far)
					<tr>
						<th>{{$Productos_far->id}}</th>
						<th>{{$Productos_far->nom_producto}}</th>
						<th>{{$Productos_far->precio_prod}}</th>
						<th>{{$Productos_far->stock_producto}}</th>
						<th>{{$Productos_far->Categoria_prod}}</th>
						<th>{{$Productos_far->id_Proveedor}}</th>

						<td>
							<a href="{{route('edicion_Producto', $Productos_far->id)}}"><img src="{{asset('img/simbolo-de-edicion.webp')}}" width="40" height="30" alt="Edicion Registros" title="Editar Registros"></a>  
						</td>
						<td>
							<a href="{{route('eliminacion_Producto', $Productos_far->id)}}"><img src="{{asset('img/basura.png')}}" width="40" height="30" alt="Eliminacion de Registros" title="Eliminar Registro"></a>
						</td>
						
						</th>
					</tr>
					@empty
					<tr>
					    <th><h2>Registros No Encontrado</h2></th>						
					 </tr>
					@endforelse
				</tr>
			</tbody>
    	</table>
		<p><a class="boton" href="{{route('Producto_adic')}}"><img src="{{asset('img/productos.png')}}" alt="Adicionar Producto" title="Adicionar Producto" ></a></p>
		<style>
		body {
		background-image: url('https://i.pinimg.com/736x/0f/d4/4f/0fd44f6d3da2c4b04b7d904ca699553c.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		}
</style>
</div>
    </center>
    
</body>
</html>