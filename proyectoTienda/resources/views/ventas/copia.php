<div   class="container col-md-6"  >
 <table   class="table table-hover table-striped  table table-bordered " class="display" id="mytabla">
 <thead>
      
      <th class="col-md-1" >Clave</th>
      <th class="col-md-2">Descripcion</th>
     <th  class="col-md-1">Costo Venta</th>
       <th class="col-md-1">Acciones</th>
  </thead>

@foreach($productos as $producto)
    <tr>
     <td>  {!! $producto->CLAVE !!}</td>
     <td>  {!! $producto->descripcion !!}</td>
     <td>  {!! $producto->costoventa !!}</td>
     <td>  <button class="btn"  onClick="AgregarLineaDeTexto('{!! route('ventas.show', [$producto->id]) !!}')" >   <i class="glyphicon glyphicon-plus"></i> </button> </td>
    </tr>
  
@endforeach

 </table>
 
{!! $productos->render() !!}

   <div class="col-md-4">
  <a class="btn btn-success btn-lg" >Vender</a>
</div>
</div>