<?php session_start();
$username = $_SESSION['name'];
$logged_in = $_SESSION['logged_in'];
if ($logged_in && $username == 'troycarter@hotmail.com') {
} else {
    header('Location:index.php');
}
?>
<html>
<head>
    <title>Admin pagina</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body>
<?php
function db_initialization()
{
    $servername = '127.0.0.1';
    $username = 'root';
    $password = 'root';
    $db = 'john_mayer';
    global $connection;
    // Maakt verbinding
    $connection = new mysqli($servername, $username, $password, $db);

    // Controleerd de verbinding
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }
}
?>
<a href="index.php"><button class="btn waves-effect waves-light" type="button" name="action">Home
    </button></a>
<div class="container">
    <div class="row">
        <form method="post">
            <h5>Daarmee is john nu aan het daten</h5>
            <div class="admin-tables">
                <table class="bordered col s8">
                    <thead>
                    <tr>
                        <th data-field="id">ID</th>
                        <th data-field="city">Plaats</th>
                        <th data-field="name">Naam</th>
                        <th data-field="date">Datum</th>
                        <th data-field="time">Tijd</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    // Controleerd of er een gebruiker is ingelogd en of de gebruiken troy carter is

                    db_initialization();
                    $sqlquery = 'SELECT Sgtnr, Plaats, Vriendin, Datum, Tijd FROM `women` ORDER BY Datum DESC, Tijd DESC';
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
                    if (isset($_POST['number'])) {
                        $number = $_POST['number'];
                        $sqlquery = "DELETE FROM `women` WHERE Sgtnr = '$number'";
                        if (mysqli_query($connection, $sqlquery)) {
                            echo "Data met het id: $number is verwijderd";
                            header('Location:admin.php');
                        } else {
                            die(mysqli_error($connection));
                        }
                    }

                    ?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="input-field col s1">
                    <input name="number" type="number" class="validate">
                </div>
                <div class="input-field col s2">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Delete
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>