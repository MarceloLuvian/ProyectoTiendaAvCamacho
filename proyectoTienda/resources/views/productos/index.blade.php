@extends('app')

@section('content')



    <div class="container">

        @include('flash::message')
        

        <div class="row">
            <h1 class="active" class="pull-left">Productos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('productos.create') !!}">Nuevo Producto</a>
  
  <div class="col-lg-6">
     {!! Form::open(['route' => 'productos.index','method' => 'GET', 'class' => 'navbar-form navbar-left pull-left', 'role' => 'search' ]) !!}
        
     <div class="input-group">
       
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'producto a buscar']) !!}
       <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Ir!</button>
      </span>
      {!! Form::close() !!}
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

        </div>
              </div>
              <br>



  <div class="container" >
    <div class="well">
  <div class="panel panel-primary">
<DIV  class="table-responsive">  
    <table class="table table-hover table-striped table-bordered  " class="display" id="mytabla"> 
            @if($productos->isEmpty())
                <div class="well text-center">No hay productos disponibles en la base de datos.</div>
            @else

      <thead>
      <th class="info">Tipo de producto</th>
      <th class="info">Clave</th>
      <th class="info">Fecha de ingreso</th>
      <th class="info">Cantidad</th>
      <th class="info">Descripcion</th>
      <th class="info">Costo compra</th>
      <th class="info">Costo venta</th>
      <th class="info">Imagen</th>
      <th class="info" width="50px">Acciones</th>
      </thead>

  @foreach($productos as $producto)
          <tr >
        
          <td >{!! $producto->tipoproducto !!}</td>
          <td>{!! $producto->CLAVE !!}</td>
          <td>{!! $producto->Fechaingreso !!}</td>
          <td>{!! $producto->cantidad !!}</td>
          <td>{!! $producto->descripcion !!}</td>
          <td>{!! $producto->costocompra !!}</td>
          <td>{!! $producto->costoventa !!}</td>
          <td> 
                     <div class="media-left">
                     <a href="#">
                       <img class="media-object" src="..." alt="...">
                     </a>
                     </div>
          </td>
           <td>
          <a href="{!! route('productos.edit', [$producto->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{!! route('productos.delete', [$producto->id]) !!}" onClick="return confirm('¿Esta seguro de eliminar este producto?')"><i class="glyphicon glyphicon-remove"></i></a>
         
                                
         </td>
          

  @endforeach

    </table>

            @endif


{!! $productos->render() !!}

</DIV>
</div>
</div>
</div>




