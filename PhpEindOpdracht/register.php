<?php session_start()?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
</head>
<body class="img">
<?php
// Maakt verbinding met de database
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

$class = '';
// Begint alleen als alle velden in zijn ingevuld
if (isset($_POST['username'], $_POST['password'], $_POST['confirm_password'])) {
    // Controleerd of er ook daadwerkelijk data in de velden staan
        if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['confirm_password'])) {
        $data = 'Please fill in all fields';
        $class = 'validate invalid';
    } else {
        // Controleerd of de
        if ($_POST['confirm_password'] === $_POST['password']) {
            $username = $_POST['username'];
            $password =  $_POST['password'];
            db_initialization();
            $query = "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password')";
            mysqli_query($connection, $query);
            $_SESSION['logged_in'] = 'true';
            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        } else {
            $data = 'Passwords do not match';
            $class = 'validate invalid';
        }
    }
}
?>
<a class="btn waves-effect waves-light" href="index.php" name="action">Home</a>
<a class="btn waves-effect waves-light" href="login.php" name="action">Inloggen</a>
<div class="container">
    <div class="row">
        <form class="col s12" method="post">
            <div class="login-box">
                <div class="input-field col s12">
                    <input name="username" id="username" type="email" class="validate">
                    <label for="username" data-error="Invalid" data-success="Correct">E-mail Address</label>
                </div>
                <div class="input-field col s12">
                    <input name="password" id="password" type="password">
                    <label for="password">Wachtwoord</label>
                </div>
                <div class="input-field col s12">
                    <input name="confirm_password" id="confirm_password" type="password" class="<?php echo $class; ?>">
                    <label for="confirm_password" data-error="<?php echo $data; ?>">Verifiër Wachtwoord</label>
                    <div class="row"></div>
                </div>
                <div class="center-align input-field col s12">
                    <button type="submit" class="btn waves-effect waves-light" action="register">Registeren
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>