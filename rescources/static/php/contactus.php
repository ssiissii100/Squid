<?php
    if(isset($_POST["submitK"])){
    mail("sibylle.gehring@hotmail.com", "kontaktformular",' Name: '.$_POST["name"]. ' username: '.$_POST["username"].' Nachricht: '.$_POST["nachricht"]);
    ?>
    <script type="text/javascript" language="Javascript"> 
        alert("Erfolgreich gesendet")
    </script> 
    <?php 
    }
?>
