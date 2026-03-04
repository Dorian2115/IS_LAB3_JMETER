<?php

    $servername = 'localhost';
    $username = 'sakila1';
    $password = 'pass';
    $database = 'sakila';

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    echo "Database connected successfully, username: " . $username . "<br><br>";

    $sql = "UPDATE actor SET first_name='Chris' WHERE first_name='Adam'";
    $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();