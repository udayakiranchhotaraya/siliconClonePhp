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
    $sqlCategory = "SELECT * FROM `categorymaster`;";

    // Execute the query
    $result = mysqli_query($conn, $sqlCategory);
    
?>

<div class="col-md-9">
    <div class="row justify-content-center">
    <form enctype="multipart/form-data" class="well-form-horizontal studentRegistration by-form" action="insertCategory.php" method="post" id="contactform">
    <div class="form-inline my-2 my-lg-0">
    <label>Enter the category you want to add:</label>&emsp;
                <input type="text" name="category" class="form-control" placeholder="add category">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login"
                    href="http://localhost/siliconphp/categoryedit.php">ADD</button></div>
                <br><br>
        </div>
    </form>
    </div>
    <table id="myTable">
        <thead>
            <th>Category ID</th>
            <th>Category</th>
            <th></th>
        </thead>
        <tbody>
        
        <!--fetching data from the database and showing in a tabular form-->
        <?php
    
        while($fetchedData = mysqli_fetch_row($result))
        {
            echo '<tr>';
            echo '<td>'.$fetchedData[0].'</td>';
            echo '<td>'.$fetchedData[1].'</td>';
            echo '<td><a href=deleteCategory.php?id='.$fetchedData[0].'>Delete</a></td>';
            echo '</tr>';
        }
        ?>

        </tbody>
    </table>
    </div>
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