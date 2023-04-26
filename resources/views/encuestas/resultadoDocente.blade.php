@extends('layouts.app')

@section('content')

<div class="container mt-4">
<h1>Reporte de docentes</h1>
    <!-- Tabla de 12 columnas -->
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
     <!-- grafica -->
     
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		

		<style type="text/css">
#patterns-enabled {
    width: 17px;
    height: 17px;
    vertical-align: middle;
    margin-top: 0;
    cursor: pointer;
}

#patterns-enabled-label {
    cursor: pointer;
}

#container {
    height: 420px;
}

#chart-wrap {
    min-width: 350px;
    max-width: 700px;
    margin: 1em auto;
    font-family: sans-serif;
}

.highcharts-figure,
.highcharts-data-table table {
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
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>
<script src="../../code/modules/pattern-fill.js"></script>
<script src="../../code/themes/high-contrast-light.js"></script>

<div id="chart-wrap">
<h1>Docente 
            @foreach($doc as $d)
            {{$d->nombre}}
        @endforeach <a href="{{route('docentes.show')}}" class="btn btn-success">Volver</a></h1>
        <h5>el promedio de respuestas del docente es: {{$re}}</h5>
        <h6>la calificacion del docente del 1 al 5 es: {{$res}}</h6>
    <label id="patterns-enabled-label">
       
      <input type="checkbox" id="patterns-enabled"  >
      ver colores con diseño
    </label>

    <figure class="highcharts-figure">
        <div id="container"></div>
        
    </figure>
</div>



		<script type="text/javascript">
var clrs = Highcharts.getOptions().colors;
var pieColors = [clrs[2], clrs[0], clrs[3], clrs[1], clrs[5],clrs[6],clrs[7],clrs[8],clrs[9],clrs[10]];

// Get a default pattern, but using the pieColors above.
// The i-argument refers to which default pattern to use
function getPattern(i) {
    return {
        pattern: Highcharts.merge(Highcharts.patterns[i], {
            color: pieColors[i]
        })
    };
}

// Get 5 patterns
var patterns = [0, 1, 2, 3, 4,5,6,7,8,9].map(getPattern);
Highcharts.setOptions({
    lang: {
        
        exportButtonTitle: "Exportar",
        printButtonTitle: "Imprimir",
        rangeSelectorFrom: "Desde",
        rangeSelectorTo: "Hasta",
        rangeSelectorZoom: "Período",
        downloadPNG: 'Descargar imagen PNG',
        downloadJPEG: 'Descargar imagen JPEG',
        downloadPDF: 'Descargar documento PDF',
        downloadSVG: 'Descargar imagen SVG',
        Category: 'categoria'
    }
});
var chart = Highcharts.chart('container', {
    
    chart: {
        type: 'pie'
    },
    
    title:
    {
text: "Promedio de respuestas del docente seleccionado"

    },
    subtitle: {
        text: 'pasa el cursor para ver detalles',
        align: 'center'
    },

    colors: patterns,

    tooltip: {
        valueSuffix: '',
        borderColor: '#8ae',
        shape: 'rect',
        backgroundColor: 'rgba(255, 255, 255, 0.94)',
        followPointer: false,
        stickOnContact: true
    },

    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                connectorColor: '#777',
                format: '<b>{point.name}</b>: {point.dat} '
            },
            point: {
                events: {
                    click: function () {
                        //window.location.href = this.website;
                    }
                }
            },
            cursor: 'pointer',
            borderWidth: 3
        }
    },

    series: [{
        name: 'Rango',
        
        data: [{
            name: 'pregunta 1',
            dat: " {{ $r[0] }} ",
            y: {{$p[0]}},
           
          
           
        }, {
            name: 'pregunta 2',
            dat: " {{ $r[1] }} ",
            y: {{$p[1]}},
            
        }, {
            name: 'pregunta 3',
            dat: " {{ $r[2] }} ",
            y: {{$p[2]}},
          
        }, {
            name: 'pregunta 4',
            dat:'{{ $r[3] }}',
            y: {{$p[3]}},
        }, {
            name: 'pregunta 5',
            dat: " {{ $r[4] }} ",
            y: {{$p[4]}},
        }, {
            name: 'pregunta 6',
            dat: " {{ $r[5] }} ",
            y: {{$p[5]}},
        }, {
            name: 'pregunta 7',
            dat: " {{ $r[6] }} ",
            y: {{$p[6]}},
           
        }, {
            name: 'pregunta 8',
            dat: " {{ $r[7] }} ",
            y: {{$p[7]}},
        }, {
            name: 'pregunta 9',
            dat: " {{ $r[8] }} ",
            y: {{$p[8]}}, 
        }, {
            name: 'pregunta 10',
            dat: " {{ $r[9] }} ",
            y: {{$p[9]}},
            
        }]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                plotOptions: {
                    series: {
                        dataLabels: {
                            format: '<b>{point.name}</b>'
                        }
                    }
                }
            }
        }]
    }
});


// Toggle patterns enabled
document.getElementById('patterns-enabled').onclick = function () {
    
    chart.update({
        colors: this.checked ? patterns : pieColors
    });
};

		</script>

  </div>
  @endsection