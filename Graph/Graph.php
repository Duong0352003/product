<?php include("NghProcess.php")?>
<?php include("GtProcess.php")?>
<?php include("NamProcess.php")?>
<!DOCTYPE HTML>
<html>
	<head>
		<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
	</head>
	<body>
	<button ><a href="http://localhost/Final/QT/Home.php">Go Back</button></a>
		<script>
		window.onload = function() {
			var chart1 = new CanvasJS.Chart("chartNganh", {
				theme: "light2",
				animationEnabled: true,
				title: {
					text: "Nganh"
				},
				data: [{
					type: "doughnut",
					indexLabel: "{symbol} - {y}",
					yValueFormatString: "#,##0.0\"%\"",
					showInLegend: true,
					legendText: "{label} : {y}",
					dataPoints: <?php echo json_encode($dataNganh, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart1.render();

			var chart2 = new CanvasJS.Chart("chartGt", {
				animationEnabled: true,
				title: {
					text: "Gender"
				},
				data: [{
					type: "pie",
					yValueFormatString: "#,##0.00\"%\"",
					indexLabel: "{label} ({y})",
					dataPoints: <?php echo json_encode($dataGt, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart2.render();

			var chart3 = new CanvasJS.Chart("chartYear", {
				animationEnabled: true,
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				title: {
					text: "Number of student"
				},
				axisY: {
					title: "Number of Student"
				},
				data: [{
					type: "column",
					dataPoints: <?php echo json_encode($dataYear, JSON_NUMERIC_CHECK); ?>
				}]
			});
			chart3.render();
		}
		</script>
		<div id="chartNganh" style="height: 370px; width: 100%;"></div>
		<div id="chartGt" style="height: 370px; width: 100%;"></div>
		<div id="chartYear" style="height: 370px; width: 100%;"></div>
	</body>
</html> 