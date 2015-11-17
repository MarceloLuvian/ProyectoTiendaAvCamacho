@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">productos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('productos.create') !!}">Nuevo Producto</a>
        </div>

        <div class="row">
            @if($productos->isEmpty())
                <div class="well text-center">No hay productos disponibles en la base de datos.</div>
            @else
                <table class="table">
                    <thead>
                    <th>Tipo de producto</th>
			<th>Clave</th>
			<th>Fecha de ingreso</th>
			<th>Cantidad</th>
			<th>Descripcion</th>
			<th>Costo de compra</th>
			<th>Costo de venta</th>
			<th>Imagen</th>
                    <th width="50px">Acciones</th>
                    </thead>
                    <tbody>
                     
                    @foreach($productos as $productos)
                        <tr>
                            <td>{!! $productos->tipoproducto !!}</td>
					<td>{!! $productos->CLAVE !!}</td>
					<td>{!! $productos->Fechaingreso !!}</td>
					<td>{!! $productos->cantidad !!}</td>
					<td>{!! $productos->descripcion !!}</td>
					<td>{!! $productos->costocompra !!}</td>
					<td>{!! $productos->costoventa !!}</td>
					<td>{!! $productos->imagen !!}</td>
                            <td>
                                <a href="{!! route('productos.edit', [$productos->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="{!! route('productos.delete', [$productos->id]) !!}" onclick="return confirm('¿Esta seguro de eliminar este producto?')"><i class="glyphicon glyphicon-remove"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection