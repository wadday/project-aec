<?php

include 'config.php';

//ID of the record to update
$recordId = 1;

//values to update
$name = "Updated name";

//Write SQL query to update data
$sql = "UPDATE students SET name = '$name' WHERE id= $recordId";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated successfully";
} else {
    echo "Error updating record: ".$conn->error;
}

$conn->close();
?>
