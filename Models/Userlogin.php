<?php

    class Userlogin {

        /**
         * @var array
         */
        private $errorMessages;

        public function __construct() {
            $this->errorMessages = [];
        }

        /**
         * Validates data input for sign up form
         * @param string $firstName
         * @param string $lastName
         * @param string $email
         * @param string $emailConfirm
         * @param string $password
         * @param string $passwordConfirm
         * @return Userlogin
         */
        public function createUserlogin($firstName, $lastName, $email, $emailConfirm, $password, $passwordConfirm) {
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmail($email, $emailConfirm);
            $this->validatePassword($password, $passwordConfirm);

            if (empty($this->errorMessages)) {
                // Insert into the database
                return true;
            } else {
                return false;
            }
        }

        /**
         * Returns the error message
         */
        public function getError($error) {
            if (!in_array($error, $this->errorMessages)) {
                $error = "";
            }
            return $error;
        }

        /**
         * Validates first name provided
         * @param string $firstName 
         * @return
         */
        private function validateFirstName($firstName) {
            if (strlen($firstName) > 35) {
                array_push($this->errorMessages, Constants::$firstNameLengthInvalid);
                return;
            }
        }
    
        /**
         * Validates last name provided
         * @param string $lastName 
         * @return
         */
        private function validateLastName($lastName) {
            if (strlen($lastName) > 35) {
                array_push($this->errorMessages, Constants::$lastNameLengthInvalid);
            }
        }
    
        /**
         * Validates email and confirmation email provided match
         * @param string $email
         * @param string $emailConfirm
         * @return
         */
        private function validateEmail($email, $emailConfirm) {
            if ($email !== $emailConfirm) {
                array_push($this->errorMessages, Constants::$emailsDoNotMatch);
                return false;
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                array_push($this->errorMessages, Constants::$emailInvalid);
                return false;
            }

            // TODO: Check email is not already in use

            return true;
        }
    
        /**
         * Validates password and confirmation password provided match
         * @param string $password
         * @param string $passwordConfirm
         * @return
         */
        private function validatePassword($password, $passwordConfirm) {
            if ($password !== $passwordConfirm) {
                array_push($this->errorMessages, Constants::$passwordsDoNotMatch);
            }
            if (strlen($password) < 8 || strlen($password > 60)) {
                array_push($this->errorMessages, Constants::$passwordLengthInvalid);
            }
        }
    }