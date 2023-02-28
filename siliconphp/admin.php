<!DOCTYPE html>
<html>
    <?php 
        session_start();

        include 'conn.php';
        include 'head.php';
        include 'sidebar.php';

        // Get the list of Data from the table;
        $sqlStudent = "SELECT * FROM `studentmaster`;";

        // Execute the query
        $result = mysqli_query($conn, $sqlStudent);
    ?>
    <body>
        
    <div class="col-md-4">

    <table id="myTable" >
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
            // $category = "SELECT `categoryName` FROM `categorymaster` WHERE `categoryId` = $fetchedData[7];";
            // $fetchCategory = mysqli_query($conn, $category);
            // $fetchedCategory = mysqli_data_seek($fetchCategory);
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

    </body>
</html>