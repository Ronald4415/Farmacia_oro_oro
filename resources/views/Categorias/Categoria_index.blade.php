<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/tablas.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
    <title>Categorias</title>
</head>
<body>
    <center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px; ' alt="Pagina principal" title="Pagina princiapal"></a></p>
  </header>
		<h1><font face="Zurich XCn BT">Listado de Categorias</font></h1>


<div class="container">
    <table>
			<thead>
				<tr>
					<th>ID</th><th>Nombre de la Categoria</th><th>Editar y/o Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($Cate as $Cate_prod)
					<tr>
						<th>{{$Cate_prod->id}}</th>
						<th>{{$Cate_prod->Desc_categoria}}</th>
						<th>

	
							<a href="{{route('edicion_Categoria', $Cate_prod->id)}}"><img src="{{asset('img/simbolo-de-edicion.webp')}}" width="40" height="30" alt="Edicion Registros" title="Editar Registros"></a>  
						
							<a href="{{route('eliminacion_Categoria', $Cate_prod->id)}}"><img src="{{asset('img/basura.png')}}" width="40" height="30" alt="Eliminacion de Registros" title="Eliminar Registro"></a>
				
						
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
		<p><a class="boton" href="{{route('Categoria_adic')}}"><img src="{{asset('img/Categoria.png')}}" alt="Añadir Categoria" title="Añadir Categoria"></a></p>

		<body>
		<nav class="navi">

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