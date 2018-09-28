<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Begin implementation of Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- End implementation of Bootstrap -->
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>// Roy van Lieshout //</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
</head>
<body>
<!-- Begin Home button -->
<div class="homebutton">
    <a href="index.php">
        <img class="img-fluid" src="images/logo.png">
    </a>
</div>
<!-- Einde Home button -->
<div class="spacer"></div>
<!-- Begin content -->
<div class="container">
    <!-- Begin menu -->
    <!-- Eerste item -->
    <?php
    include "templates/menu-template.php";
    menu('C:\xampp\htdocs\RoyLieshout\data\index_data.php')
    ?>
    <!-- Einde menu -->
</div>
<!-- Einde content -->
</body>
</html>