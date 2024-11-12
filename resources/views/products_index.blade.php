@extends('layout.main_template')
@section('content')
<h2>Index Productos</h2>
<br>
<button>
    <a href="{{route('products.create')}}">Crear Producto</a>
</button>
<br>
<table>
    <thead>
        <th>Nombre del Producto</th>
        <th>Marca ID</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{$product->nameProducts}}</td>
            <td>{{$product->brand_id}}</td>
            <td>{{$product->stock}}</td>
            <td>{{$product->unit_price}}</td>
            <td>{{$product->imagen}}</td>
            <td>
                <button><a href="{{route('products.show',$product)}}">Mostrar</a></button>
                <button><a href="">Editar</a></button>
                <button><a href="">Eliminar</a></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection