<?php

    session_start();
    include 'conn.php';
       
    if(!isset($_SESSION['name']))
    {
       
        header('Location: adminLogout.php');
    }
    else{
 
    //include 'head.php'; //cut the head from main page and save in the head.php file to not make the code messy while getting the codes everytime
    //echo $head;

    include 'sidebar.php';
//echo $sidebar;
    // Get the list of Data from the table;
    $sqlStudent = "SELECT *,(select categoryName FROM categorymaster WHERE categoryId=x.categoryId) categoryName FROM studentmaster x,(SELECT b.studentId, GROUP_CONCAT(facilitiesName) FROM `facilitiesmaster` a, studentfacility b WHERE a.facilitiesId=b.facilitiesId GROUP BY b.studentId) d WHERE d.studentId=x.studentId;";

    // Execute the query
    $result = mysqli_query($conn, $sqlStudent);

    // $join="SELECT * FROM `studentmaster` JOIN `categorymaster` ON studentmaster.studentId = categorymaster.categoryId ;";

    // $resultJoin = mysqli_query($conn, $join);
 
  
?>



<div class="col-md-9">
    <table id="myTable">
        <thead>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Category</th>
            <th>Religion</th>
            <th>E-mail</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Facilities Availed</th>
            <th>Action</th>
            <th>Action</th>
        </thead>
        <tbody>
        
        <!--fetching data from the database and showing in a tabular form-->
        <?php
    
        while($fetchedData = mysqli_fetch_row($result))
        {
            echo '<tr>';
            echo '<td>'.$fetchedData[0].'</td>';
            echo '<td>'.$fetchedData[1].'</td>';
            echo '<td>'.$fetchedData[2].'</td>';
            echo '<td>'.$fetchedData[3].'</td>';
            echo '<td>'.$fetchedData[4].'</td>';
            echo '<td>'.$fetchedData[5].'</td>';
            echo '<td>'.$fetchedData[6].'</td>';
            // $category = "SELECT `categorymaster`.`categoryName` FROM `categorymaster` WHERE `categorymaster`.`categoryId` = $fetchedData[7];";
            // $fetchCategory = mysqli_query($conn, $category);
            // $fetchedCategory = mysqli_fetch_object($fetchCategory);
            // echo '<td>'.$fetchedCategory->catergoryName.'</td>';
            echo '<td>'.$fetchedData[15].'</td>';
            echo '<td>'.$fetchedData[8].'</td>';
            echo '<td>'.$fetchedData[9].'</td>';
            echo '<td>'.$fetchedData[10].'</td>';
            echo '<td>'.$fetchedData[11].'</td>';
            echo '<td>'.$fetchedData[14].'</td>';
            echo '<td><a href=regForm.php?id='.$fetchedData[0].'>Edit</a></td>';
            echo '<td><a href=deleteStudent.php?id='.$fetchedData[0].'>Delete</a></td>';
            echo '</tr>';
        }
        ?>

        </tbody>
    </table>
    </div>
    </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

<?php 
    }
?>