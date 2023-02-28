<?php
    include 'conn.php';
    $facilitiesId = $_REQUEST['id'];
    $deleteFacility = "DELETE FROM `facilitiesmaster` WHERE `facilitiesId` = '$facilitiesId';";
    $executeDeleteFacility = mysqli_query($conn, $deleteCategory);

    header('Location: categoryTable.php');
?>