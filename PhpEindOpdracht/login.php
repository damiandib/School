<?php session_start();
$message = '';
?>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body class="img">
<?php
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
// Checks if you've filled in a username and password
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == '' || $password == '') {
        $message = 'Username or password is empty';
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
            $logged_in = 'false';
            $_POST['logged_in'] = $logged_in;
        } else {
            $message = 'Log in successfull';
            global $logged_in;
            $logged_in = 'true';
            $_SESSION['name'] = $username;
            $_SESSION['logged_in'] = $logged_in;
            if ($username == 'troycarter@hotmail.com') {
                echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
            } else {
                echo "<meta http-equiv='refresh' content='0;url=index.php'>";
            }
        }
    }
}
?>
<a href="index.php"><button class="btn waves-effect waves-light" type="button" name="action">Home
    </button></a>
<div class="container">
    <div class="row">
        <form class="col s12" method="post" action="">
            <div class="login-box">
                <div class="input-field col s12">
                    <input id="username" name="username" type="text" class="validate">
                    <label for="username">E-mail Address</label>
                </div>
                <div class="input-field col s12">
                    <input id="password" name="password" type="password" class="validate">
                    <label for="password">Wachtwoord</label>
                </div>
                <?php
                echo $message;
                ?>
                <div class="input-field col s12">
                    <button class="left-align btn waves-effect waves-light" type="submit" name="action">Inloggen
                    </button>
                    <a class="right-align btn waves-effect waves-light" href="register.php" name="action">Registeren</a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>