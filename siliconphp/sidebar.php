<?php  
    include 'head.php';
?>
<script>
    $(document).ready(function(){
        $("#studentTable").click(function(){
            $("#studentTable").addClass("active");
            $("#category, #facility").removeClass("active");
        });
        $("#category").click(function(){
            $("#category").addClass("active");
            $("#studentTable, #facility").removeClass("active");
        });
        $("#facility").click(function(){
            $("#facility").addClass("active");
            $("#category, #studentTable").removeClass("active");
        });
    });
</script>
    <br>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="https://silicon.ac.in/"><img src="elements\sit-logo.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <!--li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li-->
            </ul>
            <span class="navbar-text">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <?php
                        if (isset($_SESSION['name'])) echo 'Welcome '.$_SESSION['name'];
                    ?>
                </a>
                <div class="dropdown-menu dropdown-menu-end" style="left:57em">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <div class="row justify-content-center"><a button class="btn btn-primary" type="submit" name="log" id="logButton" value="Login" style="color: white" href="adminLogout.php">LOGOUT</a></div>
                </div>
            </span>
            </div>
            </nav>
        </div>
        <br>
    <div class= "container">
        <div class="row">
        <div class="col-md-2">
            <div class="list-group">
            <a id= "studentTable" href="showAllDetailsToAdmin.php" class="list-group-item list-group-item-action">
                Show Student Table
            </a>
            <a id="category" href="categoryTable.php" class="list-group-item list-group-item-action">Categories</a>
            <a id="facility" href="facilitiesTable.php" class="list-group-item list-group-item-action">Facilities</a>
            <!--a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a-->
            </div>
        </div>
