
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Tienda Av. Camacho</title>
	{!! HTML::script('bower_components/jquery/dist/jquery.min.js')!!}
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrapnav.css') !!}
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap-theme.css') !!}



</head>

<body >
	
<div class="container">
	<nav class="navbar navbar-custom navbar-fixed-top "  role="navigation" >
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<a class="navbar-brand" href="{!! route('productos.index') !!}">Productos</a>
				<a class="navbar-brand" href="{!! route('ventas.index') !!}">Venta</a>
					<a class="navbar-brand" href="{!! route('pedidos.index') !!}">Pedidos</a>
					           
          </ul>
      

			</div>			
		</div>

	</nav>
</div>

	@yield('content')

		
        {!! HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
     	 {!! HTML::script('js/pedidos/funcionespedido.js')!!}
     	 	 {!! HTML::script('js/funcionesventas.js')!!}
      {!! HTML::script('js/dataTables.js')!!}
     
      
      
 

</body>
</html>
