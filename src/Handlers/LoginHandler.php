<?php

    if (isset($_POST['login-button'])) {
        $email = $userloginService->sanitiseEmailAddress($_POST['login-email']);
        $password = $userloginService->sanitisePassword($_POST['login-password']);

        if ($userlogin->login($email, $password)) {
            $_SESSION['userLoggedIn'] = $email;
            header("Location: index.php");
        }
    }


