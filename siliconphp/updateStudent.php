<?php
    include 'conn.php';
    //echo '<pre>' ; print_r($_REQUEST);

    $studentId = $_REQUEST['studentId'];

    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $fatherName = $_REQUEST['fatherName'];
    $motherName = $_REQUEST['motherName'];
    $Gender = $_REQUEST['gender'];
    $dateOfBirth = $_REQUEST['dob'];
    $category = $_REQUEST['category'];
    $religion = $_REQUEST['religion'];
    $email = $_REQUEST['email'];
    $phnNum = $_REQUEST['phnNum'];
    $address = $_REQUEST['address'];
    $facilities=$_REQUEST['facility'];

    $photoArray = $_FILES['studentPhoto'];
    $photoName = $photoArray['name'];
    $time = time();
    $finalPhoto=$time.$photoName;
    move_uploaded_file($photoArray['tmp_name'], "uploaded_images/$finalPhoto");

    $sqlUpdateDatabase = "UPDATE `studentmaster` SET `studentFirstName`='$firstName',`studentLastName`='$lastName',`fatherName`='$fatherName',`motherName`='$motherName',`gender`='$Gender',`dateOfBirth`='$dateOfBirth',`categoryId`='$category',`religion`='$religion',`email`='$email',`phnNum`='$phnNum',`address`='$address', `photoAddress`='$finalPhoto' WHERE `studentId` = '$studentId';";

    $result = mysqli_query($conn, $sqlUpdateDatabase);

    $sqlDeleteStudentFacilities = "DELETE FROM `studentfacility` WHERE studentId = '$studentId'";
    $resultDelete = mysqli_query($conn, $sqlDeleteStudentFacilities);

    foreach ($facilities as $fId) {
        $sqlInsertFacilitiesIntoDatabase = "INSERT INTO `studentfacility`(`studentFacilitiesId`, `studentId`, `facilitiesId`) VALUES ('NULL','$studentId','$fId');";
        $resultFacilties = mysqli_query($conn, $sqlInsertFacilitiesIntoDatabase);
    }

?>

    <script>
        $(document).ready( function(){
            alert("Details updated successfully!!");
        });
    </script>

<?php
    header('Location: showAllDetailsToAdmin.php'); //redirects to index.html //syntax: header('Location: <site>');
?>