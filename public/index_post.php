<?php

include "../validate.php";
include "../constants.php";
include "../store.php";

if($_POST) {

    $inputs = sanitizeInputs($_POST);

    $errors = validateInputs($inputs);

    if (!empty($errors)) {
        http_response_code(RESPONSE_UNPROCESSABLE_ENTRY_CODE);
        echo json_encode([
            RESPONSE_STATUS_KEY => false,
            RESPONSE_INPUT_ERRORS_KEY => $errors
        ]);
        exit();
    }

    $response = storeContactRequest($inputs);

    if ($response) {
        //mail();
        http_response_code(RESPONSE_SUCCESS_CODE);
        echo json_encode([
            RESPONSE_STATUS_KEY => true,
            RESPONSE_MESSAGE_KEY => SUCCESS_RESPONSE_MESSAGE
        ]);
    }
    exit();
} else {
    http_response_code(RESPONSE_NOT_FOUND_CODE);
    echo json_encode([
        RESPONSE_STATUS_KEY => false,
        RESPONSE_MESSAGE_KEY => ERROR_RESPONSE_MESSAGE
    ]);
    exit();
}
