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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    </head>
    <body class="background-image">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <nav class="nav-extended z-depth-0"> 
                        <div class="nav-wrapper">
                            <a href="#" class="brand-logo"><img class="brand-logo" src="images/logo.png"></a>
                            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a class="red-text" href="https://7thinfantrybrigade.org/index.php">Forums</a></li>
                                <li><a class="red-text" href="https://7thinfantrybrigade.org/orbat.php">ORBAT</a></li>
                                <li><a class="red-text" href="https://7thinfantrybrigade.org/portal.php">News</a></li>
                            </ul>
                            <ul class="side-nav" id="mobile-demo">
                                <li><a href="https://7thinfantrybrigade.org/orbat.php">ORBAT</a></li>
                                <li><a href="https://7thinfantrybrigade.org/index.php">Forums</a></li>
                                <li><a href="https://7thinfantrybrigade.org/portal.php">News</a></li>
                            </ul>
                        </div>
                        <div class="nav-content">
                            <ul class="tabs tabs-transparent">
                                <li class="tab"><a class="red-text" href="#Homepage">Home</a></li>
                                <li class="tab"><a class="red-text" href="#Media">Media</a></li>
                                <li class="tab"><a class="red-text" href="#Join">Join</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div id="Homepage" class="page-div"><iframe frameborder="0" src="home.php"></iframe></div>
                    <div id="Media" class="page-div"><iframe frameborder="0" src="media.php"></iframe></div>
                    <div id="Join" class="page-div"><iframe frameborder="0" src="join.php"></iframe></div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script>
        $(document).ready(function () {
            $('.materialboxed').materialbox();
        });
    </script>
    </body>
</html>
