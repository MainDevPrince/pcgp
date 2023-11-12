<?php
    function generateSecretPhrase() {
        $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $length = 30;
        $secretPhrase = "";

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $secretPhrase .= $characters[$randomIndex];
        }

        return $secretPhrase;
    }

    function generateOTP() {
        $characters = "abcdefghijklmnopqrstuvwxyz0123456789";
        $length = 10;
        $secretPhrase = "";

        for ($i = 0; $i < $length; $i++) {
            $randomIndex = rand(0, strlen($characters) - 1);
            $secretPhrase .= $characters[$randomIndex];
        }

        return $secretPhrase;
    }
?>
