<?php ?>
<html>
<head>
    <title></title>
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <link href="stylesheet.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
</head>
<body class="home-body">
<div class="row">
    <div class="col s12">
        <div class="slider">
            <ul class="slides">
                <li>
                    <img class="col s12" src="images/image1.png">
                    <div class="caption left-align logo">
                        <img src="images/logo.png">
                    </div>
                </li>
                <li>
                    <img class="col s12" src="images/image2.jpg">
                    <div class="caption left-align">
                        <h2>Our playerbase</h2>
                        <h5>Consists out of 30+ players</h5>
                    </div>
                </li>
                <li>
                    <img class="col s12" src="images/image3.jpg">
                    <div class="caption right-align">
                        <h2>Weekly Operations</h2>
                        <h5>PvE/PvP and more</h5>
                    </div>
                </li>
                <li>
                    <img class="col s12" src="images/games.jpg">
                    <div class="caption center-align">
                        <h2>We also play other games</h2>
                        <h5>Like: CS:GO, HOI4, Warthunder</h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col s12">
        <div class="page-white">
            <h2 class="header center-align">Introduction</h2>
            <p class="p-text">7th Infantry Brigade was founded in January 2017 by a group of like minded friends that
                strive to provide fun and atmospheric events for realism players however, this isn't your typical
                realism as there is no need of a "Yes, Sir!" "No, Sir!". As we aim to emulate the 7th Infantry Brigade,
                we follow the British Army structure and fit it to work in Arma. Doing our best to try and find the
                balance between realism and fun, utilising real life tactics and equipment to achieve realistic tasks,
                we hope that everyone that attends any of our events enjoys themselves whilst also using skills and
                knowledge based on the real British Army but tweaked to fit Arma. We run our main Operation on Saturday
                at 2000 GMT+0, and we have an ALiVE Server up 24/7 for those that enjoy playing Arma throughout the
                week. If you are interested in joining us or want to know more about 7th Infantry Brigade, feel free to
                come on our Teamspeak and have a chat with one of our members.</p>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider();
    });
</script>
</body>
</html>
