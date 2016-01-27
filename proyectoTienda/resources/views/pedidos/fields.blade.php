


	


<div class="form-group date col-sm-6 col-lg-4" id="Fechaingreso">
    {!! Form::label('fechapedido', 'Fecha de pedido:') !!}
    {!! Form::date('fechapedido', \Carbon\Carbon::now()); !!}
</div>

<div class="form-group date col-sm-6 col-lg-4" id="Fechaingreso">
    {!! Form::label('fechaliquidacion', 'Fecha de liquidacion:') !!}
    {!! Form::date('fechaliquidacion', \Carbon\Carbon::now()); !!}
</div>



<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('NombreCliente', 'Nombre del cliente') !!}
    {!! Form::text('NombreCliente',null, ['class' => 'form-control']) !!}
</div>

<input class="form-group col-sm-6 col-lg-4" type="text" name="bucar" onkeyup="buscar(this.value);">




<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a class="btn btn-danger" href="{!! route('pedidos.index') !!}" >Cancelar</a>
    <a class="btn btn-danger btn-lg "  href="javascript:;" OnClick="buscar()" >Cancelar Venta</a>
    
    
<br>
<br>


</div>


     <div class="container col-sm-12">
<div class="jumbotron" id="producto">
    
</div>

</div>