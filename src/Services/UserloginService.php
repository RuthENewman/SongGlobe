<?php

    class UserloginService {

        public function sanitiseEmailAddress($email) {
            $email = strip_tags($email);
            return str_replace(" ", "", $email); 
        }
    
        public function sanitiseAndCapitalise($input) {
            $input = strip_tags($input);
            $input = str_replace(" ", "", $input);
            return ucfirst(strtolower($input));
        }
    
        public function sanitisePassword($password) {
            return strip_tags($password);
        }

    }
