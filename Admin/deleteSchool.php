<?php
$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['sclCode'] as $value) {
        $query = "delete from sclCode where sclCode='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"SuperAdmin/manageSchools.php?title=Manage Schools\");</script>";
        } else {
            header("Location: deleteSchool.php?title=Manage School");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);

