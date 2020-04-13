<?php 
    include("../config.php");
    include("../Models/Constants.php");
    include("../Models/Userlogin.php");

    $userlogin = new Userlogin($con);
    include("../Handlers/SignupHandler.php");
    include("../Handlers/LoginHandler.php");

    function getFormValue($input) 
    {
        if (isset($_POST[$input])) {
            echo htmlspecialchars($_POST[$input]);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head profile="https://www.w3.org/2005/10/profile">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Song Globe - sign up</title>
    <link rel="icon" type="image/png" href="../../assets/images/worldglobeamericasbluecircle128.png">
    <link rel="stylesheet" type="text/css" href="../../assets/css/signup.css">
</head>
<body>
    <div id="background-image">
        <div id="input-container">
            <form action="signup.php" 
                method="POST" 
                id="login-form">
                <h2>Login</h2>
                <p><label for="login-email">Email address: </label>
                    <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$loginFailed)); ?></span>
                    <input 
                    id="login-email" 
                    name="login-email" 
                    value="<?php getFormValue('login-email'); ?>"
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
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$firstNameLengthInvalid)); ?></p>
                    <input 
                    id="signup-firstname" 
                    name="signup-firstname"
                    value="<?php getFormValue('signup-firstname'); ?>"
                    type="text" 
                    placeholder="Your first name"
                    required >
                </p>
                <p>
                    <label for="signup-lastname">Last name: </label>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$lastNameLengthInvalid)); ?></p>
                    <input 
                    id="signup-lastname" 
                    name="signup-lastname" 
                    value="<?php getFormValue('signup-lastname'); ?>"
                    type="text"
                    placeholder="Your last name"
                    required >
                </p>
                <p>
                    <label for="signup-email">Email address: </label>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailInvalid)); ?></p>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailAlreadyInUse)); ?></p>
                    <input 
                    id="signup-email" 
                    name="signup-email" 
                    value="<?php getFormValue('signup-email'); ?>"
                    type="email" 
                    placeholder="Your email address" 
                    required >
                </p>
                <p>
                    <label for="signup-email--confirm">Confirm email address: </label>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailsDoNotMatch)); ?></p>
                    <input 
                    id="signup-email--confirm" 
                    name="signup-email--confirm"
                    value="<?php getFormValue('signup-email--confirm'); ?>" 
                    type="email" 
                    placeholder="Your email address" 
                    required >
                </p>
                <p>
                    <label for="signup-password">Password: </label>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$passwordLengthInvalid)); ?></p>
                    <input 
                    id="signup-password" 
                    name="signup-password" 
                    type="password" 
                    placeholder="Your password"
                    required >
                </p>
                <p>
                    <label for="signup-password--confirm">Confirm password: </label>
                    <p class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$passwordsDoNotMatch)); ?></p>
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
    </div>
</body>
</html>