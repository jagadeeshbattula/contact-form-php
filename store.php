<?php

include "databaseConnection.php";

function storeContactRequest(array $inputs) {
    $databaseConnection = setDatabaseConnection();
    $sql = "INSERT INTO contact_requests (name, email, phone, budget, comment) VALUES (?,?,?,?,?)";
    $stmt = $databaseConnection->prepare($sql);
     if ($stmt->bind_param("sssss", $inputs[NAME_KEY], $inputs[EMAIL_KEY], strval($inputs[PHONE_KEY]), strval($inputs[BUDGET_KEY]), $inputs[COMMENT_KEY])) {
         return $stmt->execute();
     }
    return false;
}
