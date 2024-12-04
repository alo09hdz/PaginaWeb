@extends('layout.main_template')
@section('content')
<br>
<h2 class="text-center">Lista de Clientes</h2>
<br>
<div class="d-flex justify-content-center mb-3">
<a type="button" class="btn btn-outline-primary me-2" a href="{{route('clients.create')}}">Crear Cliente</a>
<a type="button" class="btn btn-outline-primary me-2" a href="{{route('addresses.index')}}">Index Direcciones</a>
<a type="button" class="btn btn-outline-primary me-2" a href="{{route('addresses.create')}}">Crear Direcciones</a>
</div>
<br>
<table class="table table-striped">
        <thead>
        <tr>
            <th>id Cliente</th>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->last_name}}</td>
            <td>{{$client->second_last_name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->phone}}</td>
            <td>
                <a class="btn btn-primary" href="{{route('clients.show',$client)}}">
                    <i class="fa-solid fa-user-plus"></i>
                </a>

                <a type="button" class="btn btn-warning" href="{{route('clients.edit',$client)}}">
                    <i class="fa-solid fa-file-signature"></i>
                </a>
                <a type="button" class="btn btn-danger" href="{{route('clients.delete',$client)}}">
                    <i class="fa-solid fa-x"></i>
                </a>
            </td>
        </tr>
        </tr>
        @endforeach
    </tbody>
</table>

{{$clients->links()}}
@endsection
