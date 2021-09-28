@extends('layouts.template')
@section('title','Pagina inicial')
@section('content')
    <div class="container p-4">
        <div clas="row">
            <div class="col-md-8 mx-auto">
                <form action="{{ url('/cursos') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    <br />
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripción">
                    <br />
                    <input type="text" class="form-control" name="duracion" placeholder="Duración">
                    <br />
                    <input type="text" class="form-control" name="tutor" placeholder="tutor">
                    <br />
                    <input type="submit" class="btn btn-success" value="Registrar">
                </form>
            </div>
        </div>
    </div>
@endsection
