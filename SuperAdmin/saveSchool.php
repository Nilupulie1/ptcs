<?php

$sclName = $_POST["sclName"];
$location = $_POST["sclLocation"];
$district = $_POST["district"];
$email = $_POST["email"];
$tp = $_POST["phone"];

$connection = mysqli_connect("localhost", "root","mysql","ptcs");

if ($connection){
    $disId = "SELECT disName FROM district";

    $sql = "INSERT INTO school VALUES(0,'$sclName','$location','$didId','$email','$tp')";
    $result = mysqli_query($connection,$sql);

    if ($result){
        echo "School has been saved successfully";
    }else{
        echo "School failed to save";
        echo mysqli_error($connection);
    }

}else{

    echo "Connection failed";
}