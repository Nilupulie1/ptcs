<?php

$teachCode = $_POST["teachCode"];
$teachName = $_POST["teachName"];
$scl = $_POST["scl"];
$email = $_POST["confirm_email"];
$tp = $_POST["phone"];
$disc = $_POST["disc"];

$connection = mysqli_connect("localhost", "root","mysql","ptcs");

if ($connection){

    $sql = "INSERT INTO teacher VALUES('$teachCode','$teachName','$scl','$email','$tp','$disc')";
    $result = mysqli_query($connection,$sql);

    if ($result){
        echo "Teacher has been saved successfully";
    }else{
        echo "Teacher failed to save";
        echo mysqli_error($connection);
    }

}else{

    echo "Connection failed";
}