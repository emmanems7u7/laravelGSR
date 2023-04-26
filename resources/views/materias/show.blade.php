@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <title>Tabla con Bootstrap</title>
    <!-- Agrega los enlaces de los archivos de Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Materias</h1>
        <table class="table">
            <thead>
                <tr>
                  
                    <th>Sigla</th>
                    <th>Adicional</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mat as $ma)
                <tr>
                    <td>{{$ma->sigla}}</td>
                    
                    <td><a href="{{ route('DocentesDeMateria.show', ['id' => $ma->ID]) }}" class="btn btn-primary">ver docentes</a>
                    </td>
                    <td><a href="{{ route('mejorPromedio.show', ['id' => $ma->ID]) }}" class="btn btn-primary">ver el mejor promedio</a>
                    </td>
                </tr>
               @endforeach
                <!-- Agrega más filas de la tabla según sea necesario -->
            </tbody>
        </table>
    </div>

  
</body>

@endsection