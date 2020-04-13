<?php

    if (isset($_POST['login-button'])) {
        $email = $userloginService->sanitiseEmailAddress($_POST['login-email']);
        $password = $userloginService->sanitisePassword($_POST['login-password']);

        if ($userlogin->login($email, $password)) {
            header("Location: index.php");
        }
    }


