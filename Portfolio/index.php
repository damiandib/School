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
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div class="nav-wrapper teal lighter-1">
        <a href="index.php" class="brand-logo center">Damian Dibbets</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="opleidingen.php">Opleidingen</a></li>
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
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
            fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
            justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum
            semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend
            ac,
            enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus
            varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper
            ultricies nisi. Nam eget dui.</p>
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