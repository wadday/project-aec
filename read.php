<?php

include 'config.php';

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'ID: '.$row['id'].'- Name: '.$row['name'].'<br />';
    }
} else {
    echo 'No record found';
}

$conn->close();
