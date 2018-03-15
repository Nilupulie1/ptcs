<?php
$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['adminCode'] as $value) {
        $query = "delete from subadmin where subCode='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"SuperAdmin.php/manageAdmin.php?title=Manage Admin\");</script>";
        } else {
            header("Location: deleteAdmin.php?title=Manage Admin");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);

