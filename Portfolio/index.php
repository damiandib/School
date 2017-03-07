<?php
/**
 * Created by PhpStorm.
 * User: Damian
 * Date: 6-3-2017
 * Time: 09:27
 */
?>
<html>
<head>
    <title>Portfolio van D. Dibbets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div class="nav-wrapper teal lighter-1">
        <a href="index.php" class="brand-logo center">Portfolio</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="cv.php">CV</a></li>
            <li><a href="#">Test2</a></li>
            <li><a href="#">Test3</a></li>
        </ul>
    </div>
</nav>
<div class="parallax-container">
    <div class="parallax"><img src="images/novacollege1.jpg"></div>
</div>
<div class="section teal lighter-1 white-text">
    <div class="row container">
        <h2 class="header">Introductie</h2>
    </div>
    <div class="row container">
        <p class="col s8">
            
        </p>
        <img class="circle" src="images/empty.png">
    </div>
</div>
<div class=" parallax-container">
    <div class="parallax"><img src="images/beverwijk1.jpg"></div>
</div>
<footer class="page-footer teal lighter-1">
    <div class="container">
        <div class="row">
            <div class="col s6">
                <h5 class="white-text">Test text</h5>
                <p class="white-text">even more text</p>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
    });
</script>
</body>
</html>