<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar formulario simple</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style>
        body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
        }
        #login .container #login-row #login-column #login-box {
        margin-top: 50px;
        max-width: 600px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
        }
        #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
        }
        #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
        }
        .error {
            background-color: #FF9185;
            font-size 12px;
            padding: 10px;
        }
        .correcto{
            background-color: #A0DEA7;
            font-size 12px;
            padding: 10px;    
        }
    </style>
</head>
<body>
<div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php" method="post">
                            <?php
                               $nombre = "";
                               $password = "";
                               $email = "";
                               $pais = "";
                               $nivel = "";
                               $lenguajes = array();
                               
                               if(isset($_POST['username'])){
                                    $nombre = $_POST['username'];
                                    $password = $_POST['password'];
                                    $email = $_POST['email'];
                                    if(isset($_POST['pais'])){
                                        $pais = $_POST['pais'];
                                    }else{
                                        $pais = '';
                                    }
                                    if(isset($_POST['nivel'])){
                                        $nivel = $_POST['nivel'];
                                    }else{
                                        $nivel = '';
                                    }
                                    if(isset($_POST['lenguajes'])){
                                        $lenguajes = $_POST['lenguajes'];
                                    }else{
                                        $lenguajes = '';
                                    }

                                    $campos = array();

                                    if($nombre == ""){
                                        array_push($campos, "El campo nombre no puede estar vacío");
                                    }
                                    if($password == "" || strlen($password) < 6){
                                        array_push($campos, "El campo password no puede estar vacío, ni tener menos de 6 caracteres.");
                                    }
                                    if($email == "" || strpos($email, "@") === false){
                                        array_push($campos, "Ingresa un correo electrónico válido.");
                                    }
                                    if($pais == ""){
                                        array_push($campos, "Selecciona un país de origen.");
                                    }
                                    if($nivel == ""){
                                        array_push($campos, "Selecciona un nivel de desarrollo.");
                                    }
                                    if($lenguajes == "" || count($lenguajes) < 2){
                                        array_push($campos, "Selecciona la menos dos lenguajes de programación.");
                                    }

                                    if(count($campos) > 0){
                                        echo "<div class='error'>";
                                        for($i=0; $i<count($campos); $i++){
                                            echo "<li>".$campos[$i]."</li>";
                                        }
                                    }else{
                                        echo "<div class='correcto'>
                                                Datos correctos";
                                    }
                                    echo "</div>";

                               }

                            ?>
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $nombre; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
			                <div class="form-group">
                                <label for="password" class="text-info">E-mail:</label><br>
                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">País de origen:</label><br>
                                <select class="form-control" name="pais">
                                    <option selected disabled>Selecciona un país</option>
                                    <option value="mx" <?php if($pais == "mx") echo "selected"; ?> >México</option>
                                    <option value="eu" <?php if($pais == "eu") echo "selected"; ?> >Estados Unidos</option>
                                    <option value="es" <?php if($pais == "es") echo "selected"; ?> >España</option>
                                    <option value="co" <?php if($pais == "co") echo "selected"; ?> >Colombia</option>
                                    <option value="ar" <?php if($pais == "ar") echo "selected"; ?> >Argentina</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Nivel de desarrollo</label><br>
                                <input type="radio" name="nivel" class="form-control" value="básico" <?php if($nivel == "básico") echo "checked"; ?>> Básico
                                <input type="radio" name="nivel" class="form-control" value="intermedio" <?php if($nivel == "intermedio") echo "checked"; ?>> Intermedio
                                <input type="radio" name="nivel" class="form-control" value="avanzado" <?php if($nivel == "avanzado") echo "checked"; ?>> Avanzado
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Lenguajes de programación</label><br>
                                <input type="checkbox" name="lenguajes[]" class="form-control" value="php" <?php if(in_array("php", $lenguajes)) echo "checked"; ?>> PHP <br>
                                <input type="checkbox" name="lenguajes[]" class="form-control" value="js" <?php if(in_array("js", $lenguajes)) echo "checked"; ?>> JavaScript <br>
                                <input type="checkbox" name="lenguajes[]" class="form-control" value="java" <?php if(in_array("java", $lenguajes)) echo "checked"; ?>> Java <br>
                                <input type="checkbox" name="lenguajes[]" class="form-control" value="swift" <?php if(in_array("swift", $lenguajes)) echo "checked"; ?>> Swift <br>
                                <input type="checkbox" name="lenguajes[]" class="form-control" value="py" <?php if(in_array("py", $lenguajes)) echo "checked"; ?>> Python <br>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>