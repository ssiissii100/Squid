<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../rescources/static/css/squid_animejs.css" rel="stylesheet">
  <link href="../rescources/static/css/squid_website.css" rel="stylesheet">
  <link href="../rescources/static/css/style.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript" src="../rescources/static/js/polarchart.js"></script>
  <title>Squid</title>
</head>
<body onload="diagram()">
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

<?php

    //Stellt die verbindung zur DB her
    $con = mysqli_connect("localhost", "root","", "squid_users");  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    //Übergiebt überprüft ob das password und die username mit den DB Einträgen übereinstimmt
    $sql = "SELECT `interpersonalvalue`,`logicalvalue`,`linguisticvalue`,`musicalvalue`,`intrapersonalvalue`,`visualvalue`,`naturalisticvisualvalue`,`kinestheticvalue`FROM `user` WHERE username = 'admin';";

    $result = mysqli_query($con, $sql);
    $sqldatarray = [];

    while($row = $result->fetch_assoc()) {
      array_push($sqldatarray, $row['interpersonalvalue']);
      array_push($sqldatarray, $row['logicalvalue']);
      array_push($sqldatarray, $row['linguisticvalue']);
      array_push($sqldatarray, $row['musicalvalue']);
      array_push($sqldatarray, $row['intrapersonalvalue']);
      array_push($sqldatarray, $row['visualvalue']);
      array_push($sqldatarray, $row['naturalisticvisualvalue']);
      array_push($sqldatarray, $row['kinestheticvalue']);
    }
?>
<script type="text/javascript">
  var sqldata = <?php echo json_encode($sqldatarray); ?>;
</script>

<div class="feature-section">
  <div class = "chartcontainer">
    <canvas id="polarchart"></canvas>
  </div>
</div>

<footer>
</footer>
</script>
</body>
</html>
