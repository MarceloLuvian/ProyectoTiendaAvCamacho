<!--- Tipoproducto Field --->





<!--- Fechaingreso Field --->
<div class="form-group date col-sm-6 col-lg-4" id="Fechaingreso">
    {!! Form::label('Fechaingreso', 'Fecha de ingreso:') !!}
    {!! Form::date('Fechaingreso', \Carbon\Carbon::now()); !!}
</div>

<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipoproducto', 'Tipo de producto:') !!}
    {!! Form::select('tipoproducto', array('Interno' =>'Interno', 'Externo' =>'Externo'), ['class' => 'form-control']);!!}
</div>

<!--- Clave Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CLAVE', 'Clave:') !!}
    {!! Form::text('CLAVE',null, ['class' => 'form-control']) !!}
</div>


<!--- Cantidad Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!--- Descripcion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!--- Costocompra Field --->
<div class="form-group col-sm-6 col-lg-4">

    {!! Form::label('costocompra', 'Costo de compra:') !!}

    {!! Form::text('costocompra', null, ['class' => 'form-control'])  !!}

</div>

<!--- Costoventa Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('costoventa', 'Costo de venta:') !!}

    {!! Form::text( 'costoventa', null, ['class' => 'form-control'])  !!}
</div>

<!--- Imagen Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary'],['route' => 'productos.guardar'],['files' => 'true']) !!}
    <a class="btn btn-danger" href="{!! route('productos.index') !!}" >Cancelar</a>

</div>


