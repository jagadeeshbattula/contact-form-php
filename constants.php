<?php

const NAME_KEY = "name";

const EMAIL_KEY = "email";

const PHONE_KEY = "phone";

const BUDGET_KEY = "budget";

const COMMENT_KEY = "comment";

const RESPONSE_INPUT_ERRORS_KEY = "inputErrors";

const RESPONSE_STATUS_KEY = "status";

const RESPONSE_MESSAGE_KEY = "message";

const SUCCESS_RESPONSE_MESSAGE = "Your request submitted successfully. We will reach out to you soon.";

const ERROR_RESPONSE_MESSAGE = "Some thing went wrong. Please try again later!";

const MANDATORY_INPUTS = [
    NAME_KEY => 'Provide valid name',
    EMAIL_KEY => 'Provide valid email',
    PHONE_KEY => 'Provide valid 10 digit phone'
];

const PHONE_NUMBER_DIGITS_ALLOWED = 10;

const RESPONSE_SUCCESS_CODE = 200;

const RESPONSE_NOT_FOUND_CODE = 404;

const RESPONSE_UNPROCESSABLE_ENTRY_CODE = 422;
