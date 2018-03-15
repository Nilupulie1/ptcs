<?php


$grade = $_POST["grade"];
$clsName = $_POST["clsName"];
$teacher = $_POST["clsTecher"];
$stds = $_POST["stds"];
$disc = $_POST["disc"];

$connection = mysqli_connect("localhost", "root","mysql","ptcs");

if ($connection){

    $sql = "INSERT INTO class VALUES(0,'$grade','$clsName','$teacher','$stds','$disc')";
    $result = mysqli_query($connection,$sql);

    if ($result){
        echo "Class has been saved successfully";
    }else{
        echo "Class failed to save";
        echo mysqli_error($connection);
    }

}else{

    echo "Connection failed";
}