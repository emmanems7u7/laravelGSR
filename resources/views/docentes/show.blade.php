@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <title>Tabla con Bootstrap</title>
    <!-- Agrega los enlaces de los archivos de Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Docentes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Adicional</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docentes as $docente)
                <tr>
                    <td>{{$docente->ID}}</td>
                    <td>{{$docente->nombre}}</td>
                    <td><a href="{{ route('docentesMat.show', ['id' => $docente->ID]) }}" class="btn btn-primary">ver materias</a>
                    <a href="{{ route('Redocentes.show', ['id' => $docente->ID]) }}" class="btn btn-primary">ver resultado de encuesta</a></td>
                </tr>
               @endforeach
                <!-- Agrega más filas de la tabla según sea necesario -->
            </tbody>
        </table>
    </div>

  
</body>

@endsection