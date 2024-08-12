<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/tablas.css')}}">
	<link rel="stylesheet" href="{{asset('css/Encabezado.css')}}">
    <title>Proveedores</title>
</head>
<body>
    <center>
	<header>
    <p><a href= 'http://localhost/Farmacia_oro_oro/public/'><img src="{{asset('img/logo-peque.png')}}  " style='height:100px; width:150px;' alt="Pagina principal" title="Pagina principal"></a></p>
  </header>
		<h1><font face="Zurich XCn BT">Listado de Proveedores</font></h1>
<div class="container">
    <table>
			<thead>
				<tr>
					<th>ID</th><th>Nombre proveedor</th><th>Direccion proveedor</th><th>Numero proveedor</th><th>Pagina web</th><th>Editar y/o Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@forelse($prove as $Proveedor_F)
					<tr>
						<th>{{$Proveedor_F->id}}</th>
						<th>{{$Proveedor_F->nom_proveedor}}</th>
						<th>{{$Proveedor_F->direc_proveedor}}</th>
						<th>{{$Proveedor_F->num_proveedor}}</th>
                        <th>{{$Proveedor_F->pag_web}}</th>
						<th>
							<a href="{{route('edicion_proveedor', $Proveedor_F->id)}}"><img src="{{asset('img/simbolo-de-edicion.webp')}}" width="40" height="30" alt="Edicion Registros" title="Editar Registros"></a>
							<a href="{{route('eliminacion_Proveedor', $Proveedor_F->id)}}"><img src="{{asset('img/basura.png')}}" width="40" height="30" alt="Eliminacion de Registros" title="Eliminar Registro"></a>  
						
						
						
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
		<p><a class="boton" href="{{route('Proveedor_adic')}}"><img src="{{asset('img/camion.png')}}" alt="Añadir proveedor" title="Añadir Proveedor"></a></p>
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