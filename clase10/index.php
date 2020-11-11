<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{width: 500px; margin: 150px auto;}
        #footer{background-color: #222; padding: 10px; color: #fff;}
        #menu{background-color: #eee; padding: 10px;}
        main{text-align: center;}
    </style>
</head>
<body>
    <div id="container">
        <header><?php include("menu.php"); ?></header>
        <main>
            <h3>Contenido Principal</h3>
        </main>
        <footer id="footer"><?php include("footer.php"); ?></footer>
    </div>
</body>
</html>