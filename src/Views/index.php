<?php 
    include("../config.php");
    
    // session_destroy(); for manual logout

    if(isset($_SESSION['userLoggedIn'])) {
        $loggedInUser = $_SESSION['userLoggedIn'];
    } else {
        header("Location: signup.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song Globe</title>
</head>
<body>
    <h1>Song Globe</h1>
</body>
</html>