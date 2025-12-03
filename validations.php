<?php
    function validateName($name) {
        $name = trim((string)$name);
        $len = strlen($name);
        if ($len < 2 || $len > 30) {
            return "Name must be between 2 and 30 characters.";
        }
        return null;
    }

    function validateCompanyName($companyName) {
        $companyName = trim((string)$companyName);
        if ($companyName !== '' && strlen($companyName) > 30) {
            return "Company Name must not exceed 30 characters.";
        }
        return null;
    }

    function validateEmail($email) {
        $email = trim((string)$email);
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "You must enter a valid email.";
        }
        return null;
    }

    function validateProjectType($projectType) {
        $projectType = trim((string)$projectType);
        if ($projectType === '') {
            return "You must select a project type.";
        }
        return null;
    }

    function validateMessage($message) {
        $message = trim((string)$message);
        if (strlen($message) < 20) {
            return "Your message must be at least 20 characters long.";
        }
        return null;
    }

    function validateCheckbox($checkbox) {
        if (empty($checkbox)) {
            return "<-- You must agree!!";
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