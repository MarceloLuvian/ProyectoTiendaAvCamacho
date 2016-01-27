@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'pedidos.store']) !!}

        @include('pedidos.fields')

    {!! Form::close() !!}
</div>
@endsection