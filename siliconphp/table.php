<?php
    include 'conn.php';
?>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script type = "text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <?php
        // include 'head.php';

    // Get the list of Data from the table;
    $sqlStudent = "SELECT * FROM `studentmaster`;";

    // Execute the query
    $result = mysqli_query($conn, $sqlStudent);
?>
<table id="myTable">
        <thead>
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
            <th>Action</th>
            <th>Action</th>
        </thead>
        <tbody>
        
        <!--fetching data from the database and showing in a tabular form-->
        <?php
    
        while($fetchedData = mysqli_fetch_row($result))
        {
            echo '<tr>';
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
            echo '<td>'.$fetchedData[7].'</td>';
            echo '<td>'.$fetchedData[8].'</td>';
            echo '<td>'.$fetchedData[9].'</td>';
            echo '<td>'.$fetchedData[10].'</td>';
            echo '<td>'.$fetchedData[11].'</td>';
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