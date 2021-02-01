<?php
$variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'contact_form',
    'EMAIL_RECIPIENT' => 'jagadeesh106@gmail.com'
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}
