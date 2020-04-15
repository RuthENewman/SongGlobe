<?php 
    include("../config.php");

    include("../Models/Constants.php");
    include("../Models/Userlogin.php");
    $userlogin = new Userlogin($con);

    include("../Handlers/SignupHandler.php");
    include("../Handlers/LoginHandler.php");

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
    <script src="../../assets/js/signup.js" type="text/javascript"></script> 
</head>
<body>
    <?php 
        if (isset($_POST['signup-button'])) {
            echo '<script>
                        const ready = (callback) => {
                            if (document.readyState != 'loading') {
                                callback();
                            } else {
                            document.addEventListener('DOMContentLoaded', fn);
                            }
                        }
                        const callback = () => {
                            document.getElementById('signUpForm').style.display = 'none';
                            document.getElementById('loginForm').style.display = 'block';
                        }
            </script>';
        }
    ?>
    <div id="background-image">
        <div id ="login-container">
            <div id="input-container">
                <form action="signup.php" 
                    method="POST" 
                    id="login-form">
                    <h2>Song Globe</h2>
                    <p><label for="login-email">Email address: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$loginFailed)); ?></span>
                        <input 
                        id="login-email" 
                        name="login-email" 
                        value="<?php $userloginService->getFormValue('login-email'); ?>"
                        autocomplete="email"
                        type="email" 
                        placeholder="Your email address" 
                        required ></p>
                    <p>
                        <label for="login-password">Password: </label>
                        <input 
                        id="login-password" 
                        name="login-password"
                        value="<?php $userloginService->getFormValue('login-password'); ?>"
                        autocomplete="current-password"
                        type="password" 
                        placeholder="Your password"
                        required >
                    </p>
                    <button type="submit" name="login-button">Log in</button>
                    <div class="has-account--text">
                        <span id="hide-login">Create a new account</span>
                    </div>            
                </form>
                <form action="signup.php" 
                    method="POST" 
                    id="signup-form">
                    <h2>Create a Song Globe account</h2>
                    <p>
                        <label for="signup-firstname">First name: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$firstNameLengthInvalid)); ?></span>
                        <input 
                        id="signup-firstname" 
                        name="signup-firstname"
                        value="<?php $userloginService->getFormValue('signup-firstname'); ?>"
                        type="text" 
                        placeholder="Your first name"
                        required >
                    </p>
                    <p>
                        <label for="signup-lastname">Last name: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$lastNameLengthInvalid)); ?></span>
                        <input 
                        id="signup-lastname" 
                        name="signup-lastname" 
                        value="<?php $userloginService->getFormValue('signup-lastname'); ?>"
                        type="text"
                        placeholder="Your last name"
                        required >
                    </p>
                    <p>
                        <label for="signup-email">Email address: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailInvalid)); ?></span>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailAlreadyInUse)); ?></span>
                        <input 
                        id="signup-email" 
                        name="signup-email" 
                        value="<?php $userloginService->getFormValue('signup-email'); ?>"
                        type="email"
                        autocomplete="email" 
                        placeholder="Your email address" 
                        required >
                    </p>
                    <p>
                        <label for="signup-email--confirm">Confirm email address: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$emailsDoNotMatch)); ?></span>
                        <input 
                        id="signup-email--confirm" 
                        name="signup-email--confirm"
                        value="<?php $userloginService->getFormValue('signup-email--confirm'); ?>" 
                        autocomplete="email"
                        type="email" 
                        placeholder="Your email address" 
                        required >
                    </p>
                    <p>
                        <label for="signup-password">Password: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$passwordLengthInvalid)); ?></span>
                        <input 
                        id="signup-password" 
                        name="signup-password"
                        value="<?php $userloginService->getFormValue('signup-password'); ?>" 
                        autocomplete="new-password"
                        type="password" 
                        placeholder="Your password"
                        required >
                    </p>
                    <p>
                        <label for="signup-password--confirm">Confirm password: </label>
                        <span class="error-message"><?php echo htmlspecialchars($userlogin->getError(Constants::$passwordsDoNotMatch)); ?></span>
                        <input 
                        id="signup-password--confirm" 
                        name="signup-password--confirm"
                        value="<?php $userloginService->getFormValue('signup-password--confirm'); ?>" 
                        autocomplete="new-password"
                        type="password" 
                        placeholder="Your password"
                        required >
                    </p>
                    <button type="submit" name="signup-button">Sign up</button>
                    <div class="has-account--text">
                        <span id="hide-signup">Already have an account? Log in here</span>
                    </div>  
                </form>
            </div>
        </div>
    </div>
</body>
</html>