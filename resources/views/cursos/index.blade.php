@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
    @foreach($cursos as $cursos)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h2 class="card-title">{{$cursos->nombre}}</h2>
                            <h5 class="card-text">{{$cursos->tutor}}</h5>
                            <p class="card-text">{{$cursos->duracion}}</p>
                            <p class="card-text">{{$cursos->descripcion}}</p>
                            <a href="../cursos/{{$cursos->nombre}}" class="btn btn-info btn-block">Ir al curso</a>
                        </div>
                    </div>
                </div>
    @endforeach
    </div>
@endsection
