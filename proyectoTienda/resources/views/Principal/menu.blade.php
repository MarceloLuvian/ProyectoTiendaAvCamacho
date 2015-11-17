<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo nuevos controles</title>

    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>



		<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://localhost/proyectoTienda/public/principal">Principal</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					
				</ul>

				<ul class="nav navbar-nav navbar-right">
					
						<li><a href="http://localhost/proyectoTienda/public/registros">Registros</a></li>
						<li><a href="/Principal/menu">Ventas</a></li>
						<li><a href="#">Reportes</a></li>
					
				</ul>
			</div>
		</div>
	</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading"></div>
				<div class="panel-body">
					


				Bienbenidos a la pagina principal del programa


				</div>
			</div>
		</div>
	</div>
</div>

		{!! html::script('bower_components/jquery/dist/jquery.min.js')!!}
        {!! html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')!!}
        {!! html::script('bower_components/bootstrap-material-design/dist/js/ripples.min.js')!!}
        {!! html::script('bower_components/bootstrap-material-design/dist/js/material.min.js')!!}
    
	<script type="text/javascript">
       $(document).on('ready',function(){
        $.material.init();
       });
	</script>

</body>
</html>