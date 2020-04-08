<?php

    function sanitiseEmailAddress($email) {
        $email = strip_tags($email);
        return str_replace(" ", "", $email); 
    }

    function sanitiseAndCapitalise($input) {
        $input = strip_tags($input);
        $input = str_replace(" ", "", $input);
        return ucfirst(strtolower($input));
    }

    function sanitisePassword($password) {
        return strip_tags($password);
    }

    if (isset($_POST['signup-button'])) {
        $email = sanitiseEmailAddress($_POST['signup-email']);
        $emailConfirm == sanitiseEmailAddress($_POST['signup-email--confirm']);
        $firstName = sanitiseAndCapitalise($_POST['signup-firstname']);
        $lastName = sanitiseAndCapitalise($_POST['signup-firstname']);
        $password = sanitisePassword($_POST['signup-password']);
        $passwordConfirm = sanitisePassword($_POST['signup-password--confirm']);
        
        $userlogin = new Userlogin();

    }



