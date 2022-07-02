<?php 
    session_start();
    global $login;

    $hash = "ad3c25da8fdf8c03836df78225df357eb2a43a578ad8bb61733deb5005e6a758849ee29a12a5f5f66d6d2675d144b80d2fdc74d436b8fd64f3eec79b5285a966";
    
    if(isset($_POST['submit']) && $_POST['username'] != "" && $_POST['password'] != ''){

        if(array_key_exists("password", $_POST) && array_key_exists("username",$_POST)){
            $usernameCkeck = "Admin";
            $passwordCheck = hash('sha512', $_POST["password"]);
            if ($usernameCkeck == $_POST["username"] && $passwordCheck == $hash){
                $login = true; 
            } else { echo'<script  type="text/javascript" language="javascript"> alert("Anmeldung fehlgeschlagen!")</script>';

                $login = false;
            }
        }        
    } 

    if($login == true){
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: squid_results.html");
        header("Connection: close");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php

        $email = $_POST["email"];
        $password = $_POST["passwort"];

        //Stellt die verbindung zur DB her
        $con = mysqli_connect("localhost", "root","", "webformular");  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        
        //Übergiebt überprüft ob das Passwort und die Email mit den DB Einträgen übereinstimmt
        $sql = "SELECT * FROM users WHERE email = '$email' AND passwort = '$password'";
        $result = mysqli_query($con, $sql);
    
        $count=mysqli_num_rows($result);
        
        if($count > 0){
            echo"<h1><center> Login erfolgreich</center></h1>";
            mysqli_close($con);
        }else{
            echo"<h1><center> Login fehlgeschlagen</center></h1>";

        }
    ?>
    
    <form action = "squid_result.html">
        <input type="submit" value="zurück">
    <form>
    
</body>
</html>