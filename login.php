<?php
    $error= "";
    
if(isset ($_GET['mensaje']) && ($_GET['mensaje']=='mensaje_error')){
    $error ="Su Usuario y/o contraseña son incorrectas";   
}
 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login_Inicial</title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="form_home">
        <form action="autenticar.php" method="post" onSumit="return validacion_index()"
            id="f_inicio" name="f_inicio"
            
            <label for="email" class="email">Usuario</label>
            <input type="text" name="p_username" id="p_username"/>
            
            <label for="passw" class="passw">Contraseña</label>
            <input type="text" name="p_password" id="p_password"/>
            
            <br class="clearfloat"/>
            
            <input type="submit" value="Entrar" class="b_inicio"/>
        </form> 
            <p class="rojo"><?php echo $error?></p>
        </div>
    </body>
</html>
