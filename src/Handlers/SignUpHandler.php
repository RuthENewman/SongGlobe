<?php
    include("../Services/UserloginService.php");
    $userloginService = new UserloginService();

    if (isset($_POST['signup-button'])) {
        $email = $userloginService->sanitiseEmailAddress($_POST['signup-email']);
        $emailConfirm = $userloginService->sanitiseEmailAddress($_POST['signup-email--confirm']);
        $firstName = $userloginService->sanitiseAndCapitalise($_POST['signup-firstname']);
        $lastName = $userloginService->sanitiseAndCapitalise($_POST['signup-lastname']);
        $password = $userloginService->sanitisePassword($_POST['signup-password']);
        $passwordConfirm = $userloginService->sanitisePassword($_POST['signup-password--confirm']);
        
        $createdUserlogin = $userlogin->createUserlogin($firstName, $lastName, $email, $emailConfirm, $password, $passwordConfirm);

        if ($createdUserlogin) {
            $_SESSION['userLoggedIn'] = $email;
            header("Location: index.php");
        }

    }



