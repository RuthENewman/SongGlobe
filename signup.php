<?php 
    include("Models/Userlogin.php");
    $userlogin = new Userlogin();

    include("Handlers/SignupHandler.php");
    include("Handlers/LoginHandler.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song Globe - sign up</title>
</head>
<body>
    <div id="input-container">
        <form action="signup.php" 
              method="POST" 
              id="login-form">
            <h2>Login</h2>
            <p><label for="login-email">Email address: </label>
                <input 
                   id="login-email" 
                   name="login-email" 
                   type="email" 
                   placeholder="Your email address" 
                   required ></p>
            <p>
                <label for="login-password">Password: </label>
                <input 
                   id="login-password" 
                   name="login-password" 
                   type="password" 
                   placeholder="Your password"
                   required >
            </p>
            <button type="submit" name="login-button">Log in</button>
        </form>

        <form action="signup.php" 
              method="POST" 
              id="signup-form">
            <h2>Create an account</h2>
            <p>
                <label for="signup-firstname">First name: </label>
                <input 
                   id="signup-firstname" 
                   name="signup-firstname" 
                   type="text" 
                   placeholder="Your first name"
                   required >
            </p>
            <p>
                <label for="signup-lastname">Last name: </label>
                <input 
                   id="signup-lastname" 
                   name="signup-lastname" 
                   type="text"
                   placeholder="Your last name"
                   required >
            </p>
            <p>
                <label for="signup-email">Email address: </label>
                <input 
                   id="signup-email" 
                   name="signup-email" 
                   type="email" 
                   placeholder="Your email address" 
                   required >
            </p>
            <p>
                <label for="signup-email--confirm">Confirm email address: </label>
                <input 
                   id="signup-email--confirm" 
                   name="signup-email--confirm" 
                   type="email" 
                   placeholder="Your email address" 
                   required >
            </p>
            <p>
                <label for="signup-password">Password: </label>
                <input 
                   id="signup-password" 
                   name="signup-password" 
                   type="password" 
                   placeholder="Your password"
                   required >
            </p>
            <p>
                <label for="signup-password--confirm">Confirm password: </label>
                <input 
                   id="signup-password--confirm" 
                   name="signup-password--confirm" 
                   type="password" 
                   placeholder="Your password"
                   required >
            </p>
            <button type="submit" name="signup-button">Sign up</button>
        </form>
    </div>
</body>
</html>