<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de fechas</title>
    <style>
        body{background-color: #5276af;}
        #container{background: #fff; text-align: center; padding: 100px; margin: 100px auto;}
    </style>
</head>
<body>
  <div id="container">
    <h2>Manejo de fechas</h2>
    <?php
	/*
	* d - día del mes (1-31)
	* m - mes del año (1-12)
	* Y - año (4 dígitos)
	* l - día de la semana
	*
	* h - hora de formato 1-12
	* i - minutos 0-59
	* s - segundos 0-59
	* a - am-pm
        */
        $mes = array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");

        echo "Fecha: " . date("l") . " " . date("d") . " " . $mes[date("m")-1] . " de " . date("Y");
        echo "Son las " . date("h:i:sa");

    ?>
  </div>
</body>
</html>