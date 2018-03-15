$("#btnSend").click(function () {
    console.log("scl");
    $.ajax({
        method:"POST",
        url:"saveSchool.php",
        data:$("#frmSchool").serialize()
    }).done(function (response) {
        alert(response)

    });
});

$("#btnAddAdmin").click(function () {
    console.log("admin");
    $.ajax({
        method:"POST",
        url:"saveAdmin.php",
        data:$("#frmAddAdmin").serialize()
    }).done(function (response) {
        alert(response)

    });
});

$("#btnDeleteAdmin").click(function () {
    console.log("admin Deleted");
    $.ajax({
        method:"POST",
        url:"deleteAdmin.php",
        data:$("#frmAddAdmin").serialize()
    }).done(function (response) {
        alert(response)

    });
});