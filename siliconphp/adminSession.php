<?php
    session_start();
    include 'conn.php';
    
    $getUserID=$_REQUEST['userID'];
    $getPassword=$_REQUEST['pass'];

    //run the query to find the rows with 
     $myQuery="SELECT * FROM `adminmaster` WHERE adminId = '$getUserID' AND password = '$getPassword';";
    $result=mysqli_query($conn,$myQuery);

    //check the number of rows
    $numOfRows=mysqli_num_rows($result);

    //fetch the contents in the array to validate
    $result_row=mysqli_fetch_array($result);

    //
    if($numOfRows==1)
    {
       
        $_SESSION['name'] = $result_row['adminFirstName'];
        $_SESSION['logged_id'] = true;
        header('Location: showAllDetailsToAdmin.php');
    } 
    else    
    {
        
        session_unset();

        header('Location: adminLogin.php');
    }
?>