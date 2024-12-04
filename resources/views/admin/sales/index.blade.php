@extends('layout.main_template')

@section('content')
<br>
<h2 class="text-center">Lista de Ventas</h2>
<br>
<div class="d-flex justify-content-center mb-3">
<a type="button" class="btn btn-outline-primary me-2" href="{{ route('sales.create') }}">Registrar Venta</a>
</div>
<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID Venta</th>
            <th>Cliente</th>
            <th>Producto</th>
            <th>Fecha de Venta</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)
        <tr>
            <td>{{ $sale->sale_id }}</td>
            <td>{{ $sale->client->name}}</td>
            <td>{{ $sale->product->nameProducts}}</td>
            <td>{{ $sale->sale_date }}</td>
            <td>
                <a class="btn btn-primary" href="{{ route('sales.show', $sale) }}">
                    <i class="fa-solid fa-plus"></i>
                </a>
                <a class="btn btn-warning" href="{{ route('sales.edit', $sale) }}">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <a type="button" class="btn btn-danger" href="{{route('sales.delete',$sale)}}">
                    <i class="fa-solid fa-x"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
