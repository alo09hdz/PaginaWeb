@extends('layout.main_template')
@section('content')
<br>
<h2 class="text-center">Lista de Marcas</h2>
<br>
<table class="table table-striped"><thead>
    <th>Nombre de la Marca</th>
    <th>Descripcion</th>
    <th>Acciones</th>
</thead>
<tbody>
    @foreach ($brands as $bra)
        <tr>
            <td>{{$bra->brand}}</td>
            <td>{{$bra->description}}</td>
            <td>
                <a type="button" class="btn btn-warning" href="{{route('brand.edit',$bra)}}">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a type="button" class="btn btn-danger" href="{{route('brand.delete',$bra)}}">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection