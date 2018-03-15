<?php

$adCode = $_POST["adminCode"];
$adName = $_POST["adminName"];
$email = $_POST["confirm_email"];
$tp = $_POST["phone"];
$disc = $_POST["disc"];

$connection = mysqli_connect("localhost", "root","mysql","ptcs");

if ($connection){

    $sql = "INSERT INTO admin VALUES('$adCode','$adName','$email','$tp','$disc')";
    $result = mysqli_query($connection,$sql);

    if ($result){
        echo "Admin has been saved successfully";
    }else{
        echo "Admin failed to save";
        echo mysqli_error($connection);
    }

}else{

    echo "Connection failed";
}