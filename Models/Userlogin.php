<?php

    class Userlogin {

        public function __construct() {

        }

        public function createUserlogin() {
            $this->validateFirstName($firstName);
            $this->validateLastName($lastName);
            $this->validateEmail($email, $emailConfirm);
            $this->validatePassword($password, $passwordConfirm);
        }

        private function validateFirstName($firstName) {

        }
    
        private function validateLastName($lastName) {
    
        }
    
        private function validateEmail($email, $emailConfirm) {
    
        }
    
        private function validatePassword($password, $passwordConfirm) {
    
        }
    }