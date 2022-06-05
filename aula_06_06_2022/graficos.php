<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos</title>
    
</head>
<body>
    <?php
        $vendas = [1,5,6,7];
        var_dump($vendas);    
    ?>
   
    <div id="curve_chart" style="width: 900px; height: 500px"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mês', 'Vendas'],
          ['Jan',  <?= $vendas[0]; ?>],
          ['Fev',  <?= $vendas[1]; ?>],
          ['Mar',  <?= $vendas[2]; ?>],
          ['Abr',  <?= $vendas[3]; ?>]
        ]);

        var options = {
          title: 'Vendas do Produto por Mês',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</body>
</html>



