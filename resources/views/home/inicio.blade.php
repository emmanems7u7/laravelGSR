@extends('layouts.app')

@section('content')
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/hola.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">SEXTO - A</h2>
                        <h1 class="display-1 text-white m-0">DATA WAREHOUSE</h1>
                        <h2 class="text-white m-0">ENCUESTAS 2023</h2>
                        <h3  class="text-white m-0">Respuestas de encuestas: {{$e}}</h3>
                    </div>
                </div>
                  
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">¿POR QUE?</h4>
                <h1 class="display-4">HICIMOS LA ENCUESTA</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3"> </h1>
                    <h5 class="mb-3"> </h5>
                    <p>La Encuesta Docente, es la encuesta oficial que responden los estudiantes al finalizar cada semestre para cada uno de sus cursos con carácter sumativo.  Dicha encuesta evalúa cinco dimensiones relacionadas con el proceso de enseñanza aprendizaje y están basadas en los Principios Orientadores para una Docencia de Calidad</p>
                     
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/encuesta.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3"> </h1>
                    <p>Estas dimensiones son Aplicación del conocimiento, Organización de la enseñanza, Metodología de enseñanza aprendizaje, Evaluación y Retroalimentación. Adicionalmente, evalúa aspectos relativos al aprendizaje de los alumnos, dedicación y apreciación global del curso, y también recoge la opinión cualitativa de los estudiantes respecto de los aspectos positivos, y aquellos que requieren mejoría por parte del académico o del curso.


   
@endsection