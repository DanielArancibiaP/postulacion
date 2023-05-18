@php
 $dataPoints = array();

foreach($infos as $row){
    array_push($dataPoints, array("x"=> $row->codigoIndicador, "y"=> $row->valorIndicador));
}
///se que esta feo el grafico pero no suelo trabajar mucho con ellos ademas no supe bien que info mostrar ni como agruparla me disculpo por eso
@endphp
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", 
	title: {
		text: "Graficos de valores segun segun el id"
	},
	axisY: {
		title: "Valores indicador"
	},
  axisX: {
		title: "ID indicador"
	},
	data: [{
		type: "column",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                         