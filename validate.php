<?php

function sanitizeInputs(array $inputs) {

    $sanitizedInputs = [];

    if(isset($inputs[NAME_KEY])) {
        $sanitizedInputs[NAME_KEY] = filter_var($inputs[NAME_KEY], FILTER_SANITIZE_STRING);
    }

    if(isset($inputs[EMAIL_KEY])) {
        $sanitizedInputs[EMAIL_KEY] = filter_var($inputs[EMAIL_KEY], FILTER_VALIDATE_EMAIL);
    }

    if(isset($inputs[PHONE_KEY])) {
        $sanitizedInputs[PHONE_KEY] = filter_var($inputs[PHONE_KEY], FILTER_SANITIZE_NUMBER_INT);
    }

    if(isset($inputs[BUDGET_KEY])) {
        $sanitizedInputs[BUDGET_KEY] = filter_var($inputs[BUDGET_KEY], FILTER_SANITIZE_NUMBER_INT);
    }

    if(isset($inputs[COMMENT_KEY])) {
        $sanitizedInputs[COMMENT_KEY] = filter_var($inputs[COMMENT_KEY], FILTER_SANITIZE_STRING);
    }

    return $sanitizedInputs;
}

function validateInputs(array $inputs) {

    $errors = [];

    foreach (MANDATORY_INPUTS as $input => $errorMessage) {
        if (empty($inputs[$input])) {
            $errors[$input] = $errorMessage;
        }

        if ($input === PHONE_KEY && strlen($inputs[PHONE_KEY]) !== PHONE_NUMBER_DIGITS_ALLOWED) {
            $errors[$input] = $errorMessage;
        }
    }

    return $errors;
}
