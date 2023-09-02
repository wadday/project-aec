<?php

include 'config.php';


if (isset($_POST['name']) && isset($_POST['grade']) && isset($_POST['index'])) {


    //Data to be inserted
    $name = $_POST['name'];
    $grade = $_POST['grade'];
    $index = $_POST['index'];


    //Query to isnert data in to a table
    $sql = "INSERT INTO students (name, grade, index_number) VALUES ('$name', '$grade', '$index')";

    if ($conn->query($sql) === TRUE) {
        //echo "Record creaed successfully";
        header('Location: read.php');

    } else {
        echo "Error: ".$sql."<br />".$conn->error;
    }
}


$conn->close();
