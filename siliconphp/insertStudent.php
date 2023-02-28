<?php
    include 'conn.php';
    //echo '<pre>' ; print_r($_REQUEST); print_r($_FILES);

    //$studentId = mysqli_insert_id($conn);

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

    $sqlInsertIntoDatabase = "INSERT INTO `studentmaster`(`studentId`, `studentFirstName`, `studentLastName`, `fatherName`, `motherName`, `gender`, `dateOfBirth`, `categoryId`, `religion`, `email`, `phnNum`, `address`, `photoAddress`) VALUES ('NULL','$firstName','$lastName','$fatherName','$motherName','$Gender','$dateOfBirth','$category','$religion','$email','$phnNum','$address','$finalPhoto'); ";

    //echo $sqlInsertIntoDatabase;

    $result = mysqli_query($conn, $sqlInsertIntoDatabase);

    $studentId = mysqli_insert_id($conn);

    foreach ($facilities as $fId) {
        $sqlInsertFacilitiesIntoDatabase = "INSERT INTO `studentfacility`(`studentFacilitiesId`, `studentId`, `facilitiesId`) VALUES (NULL,'$studentId','$fId');";
        $resultFacilties = mysqli_query($conn, $sqlInsertFacilitiesIntoDatabase);
    }

    //echo $sqlInsertFacilitiesIntoDatabase;

    ?>

    <script>
        $(document).ready( function(){
            alert("You have registered successfully!!");
        });
    </script>

<?php
    header('Location: index.php'); //redirects to index.html //syntax: header('Location: <site>');
?>