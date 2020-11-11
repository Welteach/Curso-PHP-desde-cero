<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: #5492D1; font-family: Arial;}
        #container{background: #fff; padding: 10px; width: 420px; margin: 150px auto;}
        .error{color: red;}
    </style>
</head>
<body>
  <div id="container">
    <h2>Multiplicaciones</h2>
    <form action="" method="post">
        <input type="text" name="primer_numero">
        <input type="text" name="segundo_numero">

        <input type="submit" value="Calcular">
    </form>
    <?php
        include('operaciones.php');
        valida_campos();
    ?>
  </div>
</body>
</html>