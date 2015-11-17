<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Ejemplo nuevos controles</title>

    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css') !!}
    {!! Html::style('bower_components/bootstrap-material-design/dist/css/ripples.min.css') !!}

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'/>



		<nav class="navbar navbar-default" >
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
					
						<li><a href="" >Registros</a></li>
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
				<div class="panel-heading">Registros</div>
				<div class="panel-body">
					

						<form align="center">

							<div class="panel panel-primary">
								<a data-toggle="modal" data-target="#myModal" tabindex="0" class="btn btn-lg" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?"> Nuevo registro</a>
						

								<a tabindex="0" class="btn btn-lg" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Eliminar registro</a>
						
							</div>


						</form>
				</div>
			</div>
		</div>
	</div>
</div>



	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nuevo registro</h4>
      </div>
      <div class="modal-body">
        
       
					<form class="form-horizontal" role="form" method="POST" action="registro/Create/">
						
					

						<div class="form-group">
  						<span class="input-group-addon" id="basic-addon1">Nombre</span>
  						<input type="text" name="nombre" class="form-control" placeholder="Juanito Perez Martinez" aria-describedby="basic-addon1">
						</div>

						<div class="form-group">
  						<span class="input-group-addon" id="basic-addon1">Correo</span>
  						<input type="email" name="email" class="form-control" placeholder="correo@email.com" aria-describedby="basic-addon1">
						</div>


	  				</form>

				

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" >Guardar registro</button>
      </div>
    </div>
  </div>
</div>


<!--END Modal -->




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