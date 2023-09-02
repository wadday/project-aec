<?php

include 'config.php';

//Replace with the ID you want to delete
$id_to_delete = 2;

//Query to delete a record from table
$sql = "DELETE FROM students WHERE id=$id_to_delete";

if ($conn->query($sql) === TRUE) {
    echo "Record Deleted Successfully";
} else {
    echo "Error: ".$sql."<br />".$conn->error;
}

$conn->close();

?>
