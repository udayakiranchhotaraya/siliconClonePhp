<?php 
    include 'conn.php';

    $facility = $_REQUEST['facility'];

    $sqlInsertFacilities = "INSERT INTO `facilitiesmaster`(`facilitiesId`, `facilitiesName`) VALUES ('NULL','$facility');";

    $result = mysqli_query($conn, $sqlInsertFacilities);

    header('Location: facilitiesTable.php');
?>