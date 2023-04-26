@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <!-- Barra de búsqueda -->
   
    <div class="row">
        
      <div class="col-md-5 offset-md-3">
      <h5>buscar docente</h5>
        <form class="form-inline">
          <input class="form-control mr-sm-2 w-100" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </div>
    </div>
    <!-- Tabla de 12 columnas -->
    <div class="row mt-4">
      <div class="col-md-12">
        <table class="table table-striped">
        
          <thead>
             <h2>preguntas</h2>
             <h6>1. El docente respeta la opinion de los estudiantes</h6>
             <h6>2. El docente llega puntual a impartir su materia</h6>
             <h6>3. El docente es dinamico y trata de captar la atencion de los estudiantes</h6>
             <h6>4. El docente promueve el facil aprendizaje del contenido de la materia</h6>
             <h6>5. El docente demuestra dominio de la materia</h6>
             <h6>6. El docente tiene una buena relacion con los estudiantes en el aula de clases</h6>
             <h6>7. El docente expone de forma clara y estructurada </h6>
             <h6>8. Relaciona los conceptos teoricos con ejemplos, ejercicios y problemas</h6>
             <h6>9. El metodo de evaluacion es justo</h6>
             <h6>10. El docente responde las dudas de los estudiantes</h6>
             
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>9</th>
              <th>10</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
           
            <!-- Agregar más filas según sea necesario -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endsection