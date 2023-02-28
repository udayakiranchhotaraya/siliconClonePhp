<?php
    include 'conn.php';
    $studentId = $_REQUEST['id'];
    $deleteStudent = "DELETE FROM `studentmaster` WHERE `studentId` = '$studentId';";
    $executeDeleteStudent = mysqli_query($conn, $deleteStudent);
    $deleteStudent = "DELETE FROM `studentfacility` WHERE `studentId` = '$studentId';";
    $executeDeleteStudent = mysqli_query($conn, $deleteStudent);

    header('Location: showAllDetailsToAdmin.php');
?>