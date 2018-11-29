<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>

		<style type="text/css">

		</style>
	</head>
	<body>
    <?php
$db = new PDO("mysql:host=localhost;dbname=bd_tea","root","");

    $stmt = $db->prepare("SELECT COUNT(usuario)  AS 'num1' FROM usuario WHERE id_tipo_usuario=1;");
    $stmt->execute();
    $recuperar = $stmt->fetch();
    $cant1=$recuperar['num1'];

    $stmt2 = $db->prepare("SELECT COUNT(usuario)  AS 'num2' FROM usuario WHERE id_tipo_usuario=2;");
    $stmt2->execute();
    $recuperar2 = $stmt2->fetch();
    $cant2=$recuperar2['num2'];

    $stmt3 = $db->prepare("SELECT COUNT(usuario)  AS 'num3' FROM usuario WHERE id_tipo_usuario=3;");
    $stmt3->execute();
    $recuperar3 = $stmt3->fetch();
    $cant3=$recuperar3['num3'];
#$message = $cant;
#echo "<script type='text/javascript'>alert('$message');</script>";
?>


<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    <script src="../../../assets/js/highcharts.js"></script>
    <script src="../../../assets/js/exporting.js"></script>
    <script src="../../../assets/js/export-data.js"></script>


<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: ''
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Usuarios',
        colorByPoint: true,
        data: [{
            name: 'ADMINISTRADORES',
            y: <?php echo $cant1 ?>,
            sliced: true,
            selected: true
        }, {
            name: 'TUTORES',
            y: <?php echo $cant2 ?>
        }, {
            name: 'FAMILIARES',
            y: <?php echo $cant3 ?>
        }]
    }]
});
        </script>
    </body>
</html>