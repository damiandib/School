<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>7th Infantry Brigade</title>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body class="background-image">
<div class="container">
    <div class="row">
        <div class="col s12">
            <nav class="nav-extended z-depth-0">
                <div class="nav-wrapper">
                    <img class="brand-logo col l5 s9 push-s5" src="images/logo.png">
                    <a href="#" data-activates="mobile-nav" class="button-collapse"><i
                                class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down z-index-1">
                        <li><a class="text-red" href="https://7thinfantrybrigade.org/index.php">Forums</a></li>
                        <li><a class="text-red" href="https://7thinfantrybrigade.org/orbat.php">ORBAT</a></li>
                        <li><a class="text-red" href="https://7thinfantrybrigade.org/portal.php">News</a></li>
                    </ul>
                    <ul class="side-nav" id="mobile-nav">
                        <li><a href="https://7thinfantrybrigade.org/orbat.php">ORBAT</a></li>
                        <li><a href="https://7thinfantrybrigade.org/index.php">Forums</a></li>
                        <li><a href="https://7thinfantrybrigade.org/portal.php">News</a></li>
                    </ul>
                </div>
                <div class="nav-content">
                    <ul class="tabs tabs-transparent">
                        <li class="tab"><a class="text-red" href="#Homepage">Home</a></li>
                        <li class="tab"><a class="text-red" href="#Media">Media</a></li>
                        <li class="tab"><a class="text-red" href="#Join">Join</a></li>
                    </ul>
                </div>
            </nav>

            <div id="Homepage" class="page-div">
                <iframe class="style-1" frameborder="0" src="home.php"></iframe>
            </div>
            <div id="Media" class="page-div">
                <iframe class="style-1" frameborder="0" src="media.php"></iframe>
            </div>
            <div id="Join" class="page-div">
                <iframe class="style-1" frameborder="0" src="join.php"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.materialboxed').materialbox();
    });
    $(".button-collapse").sideNav();
</script>
</body>
</html>
