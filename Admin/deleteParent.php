<?php
$connection = mysqli_connect("localhost", "root", "mysql", "crud", "3306");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['sclCode'] as $value) {
        $query = "delete from student where stCode='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"SuperAdmin/manageParent.php?title=Manage Parent\");</script>";
        } else {
            header("Location: deleteParent.php?title=Manage Parent");
            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);

