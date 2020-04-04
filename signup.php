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
                   name="email" 
                   type="email" 
                   placeholder="Your email address" 
                   required ></p>
            <p>
                <label for="login-password">Password: </label>
                <input 
                   id="login-password" 
                   name="password" 
                   type="password" 
                   required >
            </p>
            <button type="submit" name="login-button">Log in</button>
        </form>
    </div>
</body>
</html>