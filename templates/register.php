<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../rescources/static/css/squid_animejs.css" rel="stylesheet">
  <link href="../rescources/static/css/squid_website.css" rel="stylesheet">
  <link href="../rescources/static/css/style.css" rel="stylesheet">
  <title>Squid</title>
</head>
<body>
<header class="header nav-bar grid-container">
  <div class="nav-bar-content">
    <a href="squid_index.html" class="top-header primary"><h1>Squid - Intelligence Type Test</h1></a>
    <img src="../rescources/static/img/squid_logo.png" height="100" alt="Squid Logo"/>
    <nav class="nav-menu">
      <a class="nav-link" href="test">Test</a>
      <a class="nav-link" href="results">Resultat</a>
      <a class="nav-link" href="contactus">Kontakt</a>
      <a class="main-cta" href="login" style="opacity: 1; transition: transform 0.225s ease 0s;">Login</a>
    </nav>
  </div>
</header>

<div class="feature-section">
  <?php
    $username = $_POST["username"];
    $password = hash('sha512', $_POST["password"]);
    $passwordconfirm = $_POST["passwordconfirm"];
    
    //Stellt die Verbindung zur DB her
    $con = new MySQLi("localhost","root","","squid_users");
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
    $sql="INSERT INTO user(`username`, `password_hash`)VALUES('$username','$password')";
    $result = mysqli_query($con, $sql) or die("Fehler bei Datenbankabfrage.");
    mysqli_close($con);
  ?>
</div>
<footer>
</footer> 
</body>
</html>