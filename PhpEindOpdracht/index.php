<?php session_start();
if(isset($_SESSION['logged_in']))
{}
else{$_SESSION['logged_in'] = 'false';}
$message = '';
if (isset($_POST['place'], $_POST['name'], $_POST['date'], $_POST['time'])) {
    $place = ($_POST['place'] ? $_POST['place'] : 'Unknown');
    $name = ($_POST['name'] ? $_POST['name'] : 'Unknown');
    $date = ($_POST['date'] ? $_POST['date'] : NULL);
    $time = ($_POST['time'] ? $_POST['time'] : NULL);
    db_initialization();
    $sqliquery = "INSERT INTO `women` (`Sgtnr`, `Plaats`, `Vriendin`, `Datum`, `Tijd`) VALUES (NULL, '$place', '$name', '$date', '$time')";
    if ($_SESSION['logged_in'] == 'true') {
        mysqli_query($connection, $sqliquery);
    } else {
        $message = "U bent niet ingelogd of er is iets mis met de server";
    }
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Met wie date john mayer?</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body>
<?php
// Variabelen
$connection;

// Functies
// Maakt verbinding met de database
function db_initialization()
{
    $servername = '10.3.0.115';
    $username = 'h07_bas';
    $password = 'pom1pom2';
    $db = 'h07_johnmayer';
    global $connection;
    // Maakt verbinding
    $connection = new mysqli($servername, $username, $password, $db);

    // Controleerd de verbinding
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }
}


//Zichtbaar op de website
?>
<a class="btn waves-effect waves-light" href="login.php" name="action">Inloggen</a>
<div class="container">
    <div class="row">
        <h5>Tabel</h5>
        <table class="bordered col s8">
            <thead>
            <tr>
                <th data-field="city">Plaats</th>
                <th data-field="name">Naam</th>
                <th data-field="date">Datum</th>
                <th data-field="time">Tijd</th>
            </tr>
            </thead>
            <tbody>
            <?php
            // Haalt de data uit de database
            db_initialization();
            $sqlquery = 'SELECT Plaats, Vriendin, Datum, Tijd FROM `women` ORDER BY Datum DESC, Tijd DESC LIMIT 5';
            if ($result = mysqli_query($connection, $sqlquery)) {
                //Haalt de $result opnieuw op
                $result = mysqli_query($connection, $sqlquery);
                //Haalt elke rij op in de database en zet het op het scherm doormiddel van een printf
                while ($row = mysqli_fetch_row($result)) {
                    echo '<tr>';
                    for ($i = 0; $i < count($row); $i++) {
                        echo '<td>' . $row[$i] . '</td>';
                    }
                    echo '</tr>';
                }
                mysqli_free_result($result);
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <form method="post" class="col s12">
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" name="place" id="place">
                    <label for="place">Plaats</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" name="name" id="name">
                    <label for="name">Naam</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s2">
                    <input type="date" name="date" id="date">
                </div>
                <div class="input-field col s2">
                    <input type="time" name="time" id="time">
                </div>
                <div class="input-field col s1">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Invoeren
                    </button>
                </div>
                <?php
                    echo $message;
                ?>
            </div>
        </form>
    </div>
</div>
</html>
