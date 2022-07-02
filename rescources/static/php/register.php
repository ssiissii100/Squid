<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
</head>
<body>
    <?php
        $vorname = $_POST["vorname"];
        $nachname = $_POST["nachname"];
        $email = $_POST["email"];
        $passwort = hash('sha512', $_POST["password"]);
        
        //Stellt die Verbindung zur DB her
        $con = new MySQLi("localhost", "root", "", "squid_users");
        if($con->connect_error){
            echo "Fehler bei der Verbindung: " . mysqli_connect_error();
            exit();
        }

        if(!$con->set_charset("utf8")){
            echo"Fehler beim Laden von UTF8".$con->error;
        }else{
            echo"<h1><center> Registrierung erfolgreich</center></h1>";
        }
        //Fügt die Formulardaten der DB hinzu
        $sql="INSERT INTO users(vorname, nachname, email, passwort)VALUES('$vorname', '$nachname', '$email', '$passwort')";
        $ergebnis = mysqli_query($con, $sql) or die("Fehler bei Datenbankabfrage.");
        mysqli_close($con);
    ?>
    <form action = "formular_db.html">
        <input type="submit" value="zurück">
    <form>
</body>
</html>