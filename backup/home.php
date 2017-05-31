<?php
?>
<html>
<head>
    <title></title>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
</head>
<body>
<nav>
    <div class="center-align nav-wrapper brown">
        <a href="#" class="brand-logo">Agenda</a>
    </div>
</nav>
<div class="vspacer"> </div>
<div class="timesection">
    <div class="row">
        <canvas id="canvas" width="350" height="350" style="background-color: black;"></canvas>
        <h3 class="center-align">23-5-2017</h3>
        <image class="circle picture" src="images/unknown.jpg"></image>
        <image class="circle picture" src="images/unknown.jpg"></image>
    </div>
</div>
<div class="agendasection">
    <div class="row">
        <div class="daypart">
            <image src="images/pic/ochtend.png" style="height:100%; width:auto;"></image>
        </div>
    </div>
    <div class="row">
        <div class="daypart">
            <image src="images/pic/middag.png" style="height:100%; width:auto;"></image>

        </div>
    </div>
    <div class="row">
        <div class="daypart">
            <image src="images/pic/avond.png" style="height:100%; width:auto;"></image>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var radius = canvas.height / 2;
    ctx.translate(radius, radius);
    radius = radius * 0.90
    drawClock();

    function drawClock() {
        ctx.arc(0, 0, radius, 0 , 2*Math.PI);
        ctx.fillStyle = "white";
        ctx.fill();
    }
</script>
</body>
</html>

