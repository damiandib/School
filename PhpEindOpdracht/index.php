<?php session_start(); ?>
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
// Variables
$logged_in = false;
$connection;

// Functions
// Initializes the connection to the database
function db_initialization()
{
    $servername = '127.0.0.1';
    $username = 'root';
    $password = 'root';
    $db = 'john_mayer';
    global $connection;
    // Create connection
    $connection = new mysqli($servername, $username, $password, $db);

    // Check connection
    if (!$connection) {
        die('Connection failed: ' . mysqli_connect_error());
    }
}

// Checks if you've filled in a username and password
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' || $password == '') {
        echo 'Username or password is empty';
    } else {
        db_initialization();
        $query = "SELECT * FROM `users` WHERE username='$username' AND password = '$password'";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            printf("Error: %s\n", mysqli_error($connection));
            exit();
        }

        $row = mysqli_fetch_array($result);

        if (!$row) {
            echo 'Invalid username/password please try again';
        } else {
            echo 'Log in successfull';
            $logged_in = true;
            $_SESSION['name'] = $username;
        }
    }
}
//Visible on the site
?>
<a class="btn waves-effect waves-light" href="login.php" name="action">Login</a>
<div class="container">
    <div class="row">
        <h5>Daarmee is john nu aan het daten</h5>
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
            //Haalt de data uit de database
            db_initialization();
            $sqlquery = 'SELECT Plaats, Vriendin, Datum, Tijd FROM `women` ORDER BY Datum DESC, Tijd DESC LIMIT 5';
            $number = 0;
            if ($result = mysqli_query($connection, $sqlquery)) {
                //Haalt de $result opnieuw op
                $result = mysqli_query($connection, $sqlquery);
                //Haalt elke rij op in de database en zet het op het scherm doormiddel van een printf
                while ($row = mysqli_fetch_row($result)) {
                    //printf('<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>', $row[1], $row[2], $row[3], $row[4]);
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
</div>
</body>
</html>
