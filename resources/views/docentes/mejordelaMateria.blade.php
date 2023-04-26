@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <title>Docentes</title>
    <!-- Agrega los enlaces de los archivos de Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Docentes 

       </h1>
       <div class="row mt-4">
      <div class="col-md-6">
        
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
             
            
      </div>
      <div class="col-md-6">
        
             <h2>Rango de respuestas</h2>
             <h6>Totalmente de acuerdo: 5</h6>
             <h6>De acuerdo: 4</h6>
             <h6>Ni de acuerdo ni desacuerdo: 3</h6>
             <h6>En desacuerdo: 2</h6>
             <h6>Totalmente en desacuerdo: 1</h6>

      </div>
    </div>
       @for($i = 0; $i < count($doc); $i++)
            <hr>
            <h4>{{$doc[$i]}}</h4> 
           
            @endfor <a href="{{route('materias.show')}}" class="btn btn-success">Volver</a>
        <table class="table">
            <thead>
                <tr>
                
                    <th>Nombre</th>
                    <th>Pregunta 1</th>
                    <th>Pregunta 2</th>
                    <th>Pregunta 3</th>
                    <th>Pregunta 4</th>
                    <th>Pregunta 5</th>
                    <th>Pregunta 6</th>
                    <th>Pregunta 7</th>
                    <th>Pregunta 8</th>
                    <th>Pregunta 9</th>
                    <th>Pregunta 10</th>
                </tr>
            </thead>
            <tbody>
            @for($i = 0; $i < count($doc); $i++)
            <tr>
                    
                    <td>{{$doc[$i]}}</td>
                     
                    <td>{{$dat[$i][0]}}</td>
                    <td>{{$dat[$i][1]}}</td>
                    <td>{{$dat[$i][2]}}</td>
                    <td>{{$dat[$i][3]}}</td>
                    <td>{{$dat[$i][4]}}</td>
                    <td>{{$dat[$i][5]}}</td>
                    <td>{{$dat[$i][6]}}</td>
                    <td>{{$dat[$i][7]}}</td>
                    <td>{{$dat[$i][8]}}</td>
                    <td>{{$dat[$i][8]}}</td>
                </tr>
                @endfor
               
               
            </tbody>
        </table>
        <!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DatawareHouse</title>

		<style type="text/css">
#container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script><!-- permite ver los datos y las graficas -->
<script src="../../code/highcharts-more.js"></script> <!-- permite ver en circulo la grafica con la opcion circulo -->
<script src="../../code/modules/exporting.js"></script>  <!-- muestra el menu para descargare imprimir el grafico -->
<script src="../../code/modules/export-data.js"></script> <!-- añade la opcion en el menu la opcion para descargar en excel y permite desplegar los datos de la tabla y ocultarlos -->
<script src="../../code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>




		<script type="text/javascript">
const chart = Highcharts.chart('container', {
    title: {
        text: 'Resultado en grafica',
        align: 'left'
    },
    subtitle: {
        text: 'en una escala del 1 al 5',
        align: 'left'
    },
    xAxis: {
        
        categories: [
            <?php
        
        for($i = 0; $i < count($doc); $i++)
            {
        ?>
     
        " {{  $doc[$i]  }} ",

        <?php
        
            }
        ?>
        ] 
           
                    
                  
        
       
    },
    series: [{
        type: 'column',
        name: 'Puntaje',
        colorByPoint: true,
        data:[
        <?php
        
       for($i = 0; $i < count($r); $i++)
             {
        ?>
     
        {{  $r[$i]  }} ,

        <?php
        
            }
        ?>
        ],
        showInLegend: false
    }]
});

document.getElementById('plain').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Datos de los docentes'
        }
    });
});



		</script>
	</body>
</html>

        <h3>el docente con mejor promedio es:</h3>
    </div>

  
</body>

@endsection