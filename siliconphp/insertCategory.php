<?php 
    include 'conn.php';

    $category = $_REQUEST['category'];

    $sqlInsertCategory = "INSERT INTO `categorymaster`(`categoryId`, `categoryName`) VALUES ('NULL','$category');";

    $result = mysqli_query($conn, $sqlInsertCategory);

    header('Location: categoryTable.php');
?>