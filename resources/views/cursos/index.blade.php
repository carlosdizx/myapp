@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Duración</th>
                <th>Tutor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $cursos)
            <tr>
                <td>{{$cursos ->id}}</td>
                <td>{{$cursos ->nombre}}</td>
                <td>{{$cursos ->descripcion}}</td>
                <td>{{$cursos ->duracion}}</td>
                <td>{{$cursos ->tutor}}</td>
                <td>Editar | Eliminar</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
