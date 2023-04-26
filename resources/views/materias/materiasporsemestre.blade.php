<!DOCTYPE html>

@extends('layouts.app')

@section('content')
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Vista con 6 botones ordenados con Bootstrap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 1]) }}" class="btn btn-primary btn-lg btn-block">semestre 1</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 2]) }}" class="btn btn-secondary btn-lg btn-block">semestre 2</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 3]) }}" class="btn btn-success btn-lg btn-block">semestre 3</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 4]) }}" class="btn btn-danger btn-lg btn-block">semestre 4</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 5]) }}" class="btn btn-warning btn-lg btn-block">semestre 5</a>
      </div>
      <div class="col-md-4 mb-3">
        <a href="{{ route('verDocSem.show', ['n' => 6]) }}" class="btn btn-info btn-lg btn-block">semestre 6</a>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection