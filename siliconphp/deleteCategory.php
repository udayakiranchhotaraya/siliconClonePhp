<?php
    include 'conn.php';
    $categoryId = $_REQUEST['id'];
    $deleteCategory = "DELETE FROM `categorymaster` WHERE `categoryId` = '$categoryId';";
    $executeDeleteCategory = mysqli_query($conn, $deleteCategory);

    header('Location: categoryTable.php');
?>