
@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <title>Tabla con Bootstrap</title>
    <!-- Agrega los enlaces de los archivos de Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>materia 
            @foreach($m as $d)
            {{$d->sigla}}
        @endforeach <a href="{{route('docentes.show')}}" class="btn btn-success">Volver</a></h1>
       
        <table class="table">
            <thead>
                <tr>
                   
                    <th>Sigla</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($DocMat as $docente)
                <tr>
                    
                    <td>{{$docente->nombre}}</td>
                    
                </tr>
               @endforeach
                <!-- Agrega más filas de la tabla según sea necesario -->
            </tbody>
        </table>
    </div>

  
</body>

@endsection