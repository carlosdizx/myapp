@extends('layouts.template')
@section('title','Crear curso')
@section('content')
    <form action="{{ url('/cursos') }}" method="post" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
        <br />
        <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required>
        <br />
        <input type="text" class="form-control" name="duracion" placeholder="Duración" required>
        <br />
        <input type="text" class="form-control" name="tutor" placeholder="Tutor" required>
        <br />
        <input type="file" class="form-control" name="portada" accept="image/*" required>
        <br />
        <input type="submit" class="btn btn-success" value="Registrar">
    </form>
@endsection
