@extends('layouts.template')
@section('title','Pagina inicial')
@section('content')
    <div class="container p-4">
        <div clas="row">
            <div class="col-md-8 mx-auto">
                <form action="" enctype="multipart/form-data" method="post">
                    <input type="text" class="form-control" placeholder="Nombre">
                    <br />
                    <input type="text" class="form-control" placeholder="Nombre">
                    <br />
                    <input type="text" class="form-control" placeholder="Duracion">
                    <br />
                    <input type="text" class="form-control" placeholder="Descripcion">
                    <br />
                    <input type="text" class="form-control" placeholder="Tutor">
                    <br />
                    <input type="submit" class="btn btn-success" name="registrar" value="Registrar">
                </form>
            </div>
        </div>
    </div>
@endsection
