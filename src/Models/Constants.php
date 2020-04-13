<?php 

class Constants {

    // Error Messages

        // Passwords 

            /**
             * @var string
             */
            public static $passwordsDoNotMatch = "Confirmation password does not match.";

            /**
             * @var string
             */
            public static $passwordLengthInvalid = "Passwords must be between 8 and 60 characters in length.";

        // Emails

            /**
             * @var string
             */
            public static $emailsDoNotMatch = "Confirmation email address does not match.";

            /**
             * @var string
             */
            public static $emailInvalid = "Email address is invalid.";

             /**
             * @var string
             */
            public static $emailAlreadyInUse = "An account with this email address already exists.";

        // Names

            /**
             * @var string
             */
            public static $firstNameLengthInvalid = "First name provided cannot be greater than 35 characters.";

            /**
             * @var string
             */
            public static $lastNameLengthInvalid = "Last name provided cannot be greater than 35 characters.";

        // Login 

            /**
             * @var string
             */
            public static $loginFailed = "No account found for the email or password provided.";

}
