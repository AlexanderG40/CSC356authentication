<?php
    session_start();

    if ($_SESSION['isLoggedIn']==true){
        echo "Welcome! You have made it to this secure form.";
    } else{
        // otherwise boot
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Form</title>
</head>
<body>
    Welcome! Good to see you the password is cOwboys
</body>
</html>