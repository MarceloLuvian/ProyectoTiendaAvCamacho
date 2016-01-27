@extends('app')

<div class="container">

      
        
<div id="respuesta">
  
</div>

 <button type="button" class="btn btn-primary pull-right" data-toggle="modal"  data-target=".bs-example-modal-lg">Nuevo Pedido</button>
<!-- Large modal -->

<body onload="ocultar();mostrarpedidos()"> </body>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="myModal">
  <div class="modal-dialog modal-lg">

    <div class="modal-content">
     
      <div class="container">
        <br>
    
  <div class="form" id="formulario" action="js/pedidos/guardar.php" type="post"> 
    <div>
      
<div >
 <input id="uno" class="btn btn-primary" type="button" name="boletin" value="Es un producto nuevo" checked  onClick="ocultar()"> 
<input id="dos" class="btn btn-warning" type="button" name="boletin" value="Es un producto existente" onClick="mostrar()"> 
</div>
<br>
    
     
      <div class="col-md-9 ">
         
 

    <div class="form-group  col-md-3" >
      {!! Form::label('fechapedido', 'Fecha de pedido:') !!}
      {!! Form::date('fechapedido', \Carbon\Carbon::now()); !!}
    </div>

    <div class="form-group col-md-3  " >
      {!! Form::label('fechaliquidacion', 'Fecha de liquidacion:') !!}
      {!! Form::date('fechaliquidacion', \Carbon\Carbon::now()); !!}
    </div>
    <div class="form-group col-md-8 col-sm-8 " >
      {!! Form::label('NombreCliente', 'Nombre del cliente') !!}
      {!! Form::text('NombreCliente',null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group col-md-8 col-sm-8 " id="clav">
      {!! Form::label('CLAVE', 'CLAVE') !!}
      {!! Form::text('CLAVE',null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group col-md-8 col-sm-8 " id="descri">
      {!! Form::label('descripcion', 'Descripcion del producto') !!}
      {!! Form::text('descripcion',null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group col-md-8 col-sm-8 " id="canti">
      {!! Form::label('cantidad', 'Cantidad del producto') !!}
      {!! Form::text('cantidad',null, ['class' => 'form-control']) !!}
    </div>
     <div class="form-group col-md-8 col-sm-8 " id="costo">
      {!! Form::label('costoventa', 'Costo Venta') !!}
      {!! Form::text('costoventa',null, ['class' => 'form-control']) !!}
    </div>
    <div class=" col-sm-8  col-md-8 col-lg-9">
       
            <div  id="Respuesta2"> 

        </div>
      </div>
   
          <div class="form-group col-md-8 col-sm-8" >
       
        <input id="buscador" type="text" class="form-control" onkeyup="buscar(this.value); " placeholder="Escriba para buscar un producto">

          </div>
          
  
      </div>
     


   <div id="ocultar"> 
         <div class="container " id="negativa"> </div>
        <div class=" col-sm-8  col-md-8 col-lg-9">
          <h1>Productos disponibles</h1> 
            <div class="jumbotron" id="producto"> 

        </div>
      </div>
      
      <div class=" col-sm-8 col-md-8 col-lg-9  ">
         <h1>Productos agregados</h1>
            <div class="jumbotron" id="carritoproducto"> 
       
        </div>
      </div>

   </div>  

       <div id="guarda" class="form-group col-sm-8">
         <button  type="submit"  class="btn btn-primary" onclick="guardar()">Guardar</button>
            </div>
        <div id="guarda2" class="form-group col-sm-8">
         <button  type="submit"  class="btn btn-primary" onclick="guardarnormal()">Guardar</button>
            </div>
        
        <div class="form-group col-sm-8">
           <a class="btn btn-danger"  onclick="can()">Cancelar</a>
        </div> 
   
   

    
 </div>
  </div>
          </div>
  </div>
</div>
</div>
         <br>
         <br>    
         <br>
        <div class="container col-sm-12">
      <div class="jumbotron" id="listapedidos">    
      </div>
      </div>       

       </div>



     <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Detalles </h4>
      </div>
      <div class="modal-body">
        <div class="well" id="muestradetalle">
          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>