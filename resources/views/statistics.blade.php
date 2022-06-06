<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">

    <title>Estadisticas</title>
  </head>
  <body>
    <h1  class="text-center">Redes Sociales</h1>
    <div class="text-center">
        <b class="text-center">Cantidad de escuentas realizadas: <?= $count?> </b></br>
        <b class="text-center">Red social mas vista: <?= $maxNetwork?> </b></br>
        <b class="text-center">Red menos vista: <?= $minNetwork?> </b></br>
    </div>
    
    <div class="row">
        <div class="col">
            <div id="container"></div>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            @foreach($socialNetwork as $key => $range)
                <div> Rango de <?=$key?></div>
           @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Promedio de Uso de las redes Sociales '
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.1f}</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.y:.1f}'
                    }
                }
            },
            series: [{
                name: 'Promedio',
                colorByPoint: true,
                data: <?= $data?>
            }]
        });
    </script>
  </body>
</html>