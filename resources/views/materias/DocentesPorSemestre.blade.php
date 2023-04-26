@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Docentes por semestre</h1>
    <a href="{{route('materias.show')}}" class="btn btn-success">Volver</a>
    <div class="row">
    <?php
        
        $a=0;
        ?>
    
        @foreach($materias as $mat)

      <div class="col-md-4 mb-3">
        <h2>{{$mat->sigla}}</h2>
       
        @for($i = 0; $i < count($docentes[$a]); $i++)
      
        <p>{{$docentes[$a][$i]->nombre}}</p>
      @endfor
        <?php
        
        $a=$a+1;
        ?>
      </div>
    @endforeach
    </div>
  
      
            @endsection