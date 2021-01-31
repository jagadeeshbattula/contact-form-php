<?php

include "../../databaseConnection.php";

$databaseConnection = setDatabaseConnection();

$sql = "CREATE TABLE contact_requests(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    budget VARCHAR(100) NULL,
    comment TEXT(10000) NULL
)";

if(mysqli_query($databaseConnection, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($databaseConnection);
}

mysqli_close($databaseConnection);
