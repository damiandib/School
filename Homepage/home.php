<?php ?>
<html>
    <head>
        <title></title>
        <link href="stylesheet.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    </head>
    <body class="home-body">
        <div class="row">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="images/image1.png">
                        <div class="caption left-align logo">
                            <img src="images/logo.png">
                        </div>
                    </li>
                    <li>
                        <img src="images/image2.jpg">
                        <div class="caption left-align">
                            <h3>Test</h3>
                            <h5>Another line test</h5>
                        </div>
                    </li>
                    <li>
                        <img src="images/image3.jpg">
                        <div class="caption right-align">
                            <h3>And the best part is:</h3>
                            <h5>We also shoot trees.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="page-white">
                <h2 class="header" > Introduction</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
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
