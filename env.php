<?php
$variables = [
    'DB_HOST' => 'localhost',
    'DB_USERNAME' => 'root',
    'DB_PASSWORD' => '',
    'DB_NAME' => 'contact_form',
];

foreach ($variables as $key => $value) {
    putenv("$key=$value");
}
