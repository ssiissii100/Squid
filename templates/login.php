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

<body>
<?php

    $username = $_POST["username"];
    $password = hash('sha512', $_POST["password"]);

    //Stellt die verbindung zur DB her
    $con = mysqli_connect("localhost", "root","", "squid_users");  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    //Übergiebt überprüft ob das password und die username mit den DB Einträgen übereinstimmt
    $sql = "SELECT * FROM user WHERE username = '$username' AND password_hash = '$password'";
    $result = mysqli_query($con, $sql);

    $count=mysqli_num_rows($result);

    if($count > 0){
        echo"<h1><center> Login erfolgreich</center></h1>";
        mysqli_close($con);
    }else{
        echo"<h1><center> Login fehlgeschlagen</center></h1>";

    }
?> 
</body>
</html>