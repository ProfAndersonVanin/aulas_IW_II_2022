<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo com PlotLy.JS</title>
    <script src="https://cdn.plot.ly/plotly-2.12.1.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>
</head>
<body>
    <h1>Teste com Maps</h1>
    <div id="myDiv" style="width:600px;height:250px;"></div>
    <script>
        d3.csv(
	"https://raw.githubusercontent.com/plotly/datasets/master/2015_06_30_precipitation.csv",
	function(err, rows) {
		function unpack(rows, key) {
			return rows.map(function(row) {
				return row[key];
			});
		}

		var data = [
			{
				type: "scattermapbox",
				text: unpack(rows, "Globvalue"),
				lon: unpack(rows, "Lon"),
				lat: unpack(rows, "Lat"),
				marker: { color: "fuchsia", size: 4 },
                
			}
		];

		var layout = {            
			dragmode: "zoom",
			mapbox: { style: "open-street-map", center: { lat: 38, lon: -90 }, zoom: 3 },
			margin: { r: 0, t: 0, b: 0, l: 0 }
		};

		Plotly.newPlot("myDiv", data, layout);
	}
);
    </script>
</body>
</html>