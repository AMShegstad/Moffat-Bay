<?php  session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo "{$_SESSION["login"]}<br>";
        echo "{$_SESSION['lastName']}<br>";
        echo "{$_SESSION['emailAddress']}<br>";
        echo "{$_SESSION['customerID']}<br>";
        echo "{$_SESSION['roomConfig']}<br>";
        echo "{$_SESSION['codString']}<br>";
    ?>

    <a href="index.php">Back to index.php</a>
</body>
</html>