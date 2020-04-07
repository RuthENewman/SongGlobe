<?php 

    if (isset($_POST['login-button'])) {
        $email = sanitiseEmailAddress($_POST['login-email']);
    }


