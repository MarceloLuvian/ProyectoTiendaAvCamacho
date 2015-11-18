<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Tienda Av. Camacho</title>
	
	{!! Html::style('bower_components/bootstrap/dist/css/bootstrap.css') !!}
    
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap-theme.css') !!}
  
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{!! route('productos.index') !!}">Productos</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href=>Venta</a></li>
					<li><a href=>Reportes</a></li>
				</ul>				 
			</div>			
		</div>
		<input type="text" class="form-control" placeholder="Search">
	</nav>

	@yield('content')

		{!! html::script('bower_components/jquery/dist/jquery.min.js')!!}
        {!! html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
      
    
     <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

	<script type="text/javascript">
       $(document).on('ready',function(){
        $.material.init();
       });
	</script>
</body>
</html>
