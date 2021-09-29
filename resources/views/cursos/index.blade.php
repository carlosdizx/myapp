@extends('layouts.template')
@section('title','Página inicial')
@section('content')
    <div class="row g-2">
    @foreach($cursos as $cursos)
                <div class="col-6">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title">{{$cursos->nombre}}</h4>
                            <h5 class="card-text">{{$cursos->tutor}}</h5>
                            <p class="card-text">{{$cursos->duracion}}</p>
                            <p class="card-text">{{$cursos->descripcion}}</p>
                            <a href="#" class="btn btn-primary btn-block">Go somewhere</a>
                        </div>
                    </div>
                </div>
    @endforeach
    </div>
@endsection
