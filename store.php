<?php

include "databaseConnection.php";

function storeContactRequest(array $inputs) {
    try {
        $databaseConnection = setDatabaseConnection();
        $sql = "INSERT INTO contact_requests (name, email, phone, budget, comment) VALUES (?,?,?,?,?)";
        $stmt = $databaseConnection->prepare($sql);
        $stmt->bind_param("sssss", $inputs[NAME_KEY], $inputs[EMAIL_KEY], $inputs[PHONE_KEY], $inputs[BUDGET_KEY], $inputs[COMMENT_KEY]);
        $stmt->execute();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
