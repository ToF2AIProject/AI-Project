<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your gender</title>
</head>
<body>
    <h1>The computer thinks your gender is:</h1>
    <?php
    echo "<h2>$_COOKIE[kjonn]</h2>";
    ?>
    <h2>Is this correct?</h2>
    
        <a href="done.php">
            <input type="submit" value="Yes" name="sendKjonn">
        </a>
        <a href="done.php">
            <input type="submit" value="No" name="sendKjonn">
        </a>
    
    <?php
    $cookie_name = "kjonn";
    $kjonn = $_COOKIE[$cookie_name];
    if(isset($_POST["sendKjonn"])){

        $kjonn_right = $_POST["sendKjonn"];

        $tjener = "localhost";
        $brukernavn = "root";
        $passord = "";
        $database = "kjonn";
        
        $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

        if($kobling->connect_error) {
            die("Something went wrong. Try refreshing or wait for a few minutes. ".$kobling->connect_error);
        } else {
            echo("Ya good homeboy");
        }
        
        $sql = "INSERT INTO kjonn (gjettetKjonn, faktiskKjonn) VALUES ('$kjonn', '$kjonn_right')";
    }
    ?>
</body>
</html>