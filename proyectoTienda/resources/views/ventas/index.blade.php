@extends('app')





<div id="respuesta" > 

</div>
<div id="paginacompleta" >

<div class="col-lg-6">
     {!! Form::open(['route' => 'ventas.index','method' => 'GET', 'class' => 'navbar-form navbar-left pull-left', 'role' => 'search' ]) !!}
        
     <div class="input-group">
       
        {!! Form::text('name', null, ['class' => 'form-control','placeholder' => 'producto a buscar']) !!}
       <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Ir!</button>
      </span>
      {!! Form::close() !!}
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
 @section('content')


<body onload="cargarCarrito();"> </body>

<hr>

<div   class="container  col-md-6 "  >
<div class="panel panel-info"> 
 <table   class="table table-hover table-striped  table table-bordered " class="display" id="mytabla">
 <thead>
      
      <th class="col-md-1" >Clave</th>
      <th class="col-md-2">Descripcion</th>
     <th  class="col-md-1">Costo Venta</th>
      <th  class="col-md-1">Acciones</th>


  </thead>

@foreach($productos as $producto)
    <tr>
     <td>  {!! $producto->CLAVE !!}</td>
     <td>  {!! $producto->descripcion !!}</td>
     <td>  {!! $producto->costoventa !!}</td>
    
     @if($producto->cantidad > 0)

     <td class="col-xs-1  col-sm-1  col-md-1  col-lg-1">  <button  value="{$producto->id}" class="btn btn-primary glyphicon glyphicon-plus" href="javascript:;" OnClick="cantidadUpdate('{!! $producto->id !!}');procesoCarrito('{!! $producto->id !!}');cargarContenido() " >    </button> </td>
    @else 
       <td class="col-md-1">  <button value="" class="btn btn-warning disabled glyphicon glyphicon-plus"  > </button> </td>
    @endif
    </tr>
  
@endforeach

 </table>

{!! $productos->render() !!}
</div>
<div class="col-xs-6  col-sm-4  col-md-4  col-lg-4">
  
  <div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" name="pago" class="form-control" aria-label="Amount (to the nearest dollar)">

  
</div>
<div class="list-group">
  <a id="cambio" class="list-group-item ">CAMBIO</a>
  
</div>
</div>
  <div>
  <a class="btn btn-primary btn-lg "  href="javascript:;" OnClick="vender()"  >Realizar Venta </a>
  <a class="btn btn-danger btn-lg "  href="javascript:;" OnClick="cancelar()" >Cancelar Venta</a>
 
</div>

</div>


<div class="container">
<div class="row">
  <div class="col-md-6">
    <div class="well" id="texto" href="">
  </div>
  </div>
  </div>
</div>

 


 </div>




@endsection



