<?php

include 'nav.php';
include 'config.php';


if (isset($_POST['name']) && isset($_POST['grade']) && isset($_POST['level'])) {


    //Data to be inserted
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $level = $_POST['level'];


    //Query to isnert data in to a table
    $sql = "INSERT INTO students (name, grade, level) VALUES ('$name', '$grade', '$level')";

    if ($conn->query($sql) === TRUE) {
        //echo "Record creaed successfully";
        header('Location: read.php');
    
    } else {
        echo "Error: ".$sql."<br />".$conn->error;
    }
}


$conn->close();