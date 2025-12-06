<?php
    function validateName($name) {
        $name = trim((string)$name);
        $len = strlen($name);
        if ($len < 2) {
            return "At least 2 characters.";
        }
        return null;
    }
    function validateEmail($email) {
        $email = trim((string)$email);
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email.";
        }
        return null;
    }
    function validateProjectType($projectType) {
        $projectType = trim((string)$projectType);
        if ($projectType === '') {
            return "Must select project.";
        }
        return null;
    }
    function validateMessage($message) {
        $message = trim((string)$message);
        if (strlen($message) < 50) {
            return "At least 50 characters.";
        }
        return null;
    }
    function validateCheckbox($checkbox) {
        if (empty($checkbox)) {
            return "<-- Must agree!!";
        }
        return null;
    }
    function isblank($arr) {
        if (!is_array($arr)) return true;
        foreach ($arr as $v) {
            if ($v !== null && $v !== '') return false;
        }
        return true;
    }
?>