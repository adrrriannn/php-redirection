<?php
if ( isset( $_POST["submitButton"] ) ) {
    $codigo = $_POST['codigo'];
    if($codigo == '61') {
        header("Location:https://www.marca.com");
    }
    else{
        ?><span><?php echo "Código incorrecto";?></span> <?php
    }
} else {
    displayForm();
}
function displayForm() {
    ?>
    <!DOCTYPE html5>
    <html>
    <body>
    <form action="index.php" method="post">
        <label>Código :</label>
        <input id="codigo" name="codigo" placeholder='Código' type='text'>
        <input type="submit" name="submitButton" id="submitButton" value= "Enviar" />
    </form>
    </body>
    </html>
    <?php
}
?> 
