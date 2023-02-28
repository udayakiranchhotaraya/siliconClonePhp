<!DOCTYPE html>
<html>
    <?php 
        include 'head.php';
    ?>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="elements\sit-logo.svg"></div>
                <div class="col-md-9">
                    <div class="row justify-content-center" style="text-size: 20px">Silicon Institute of Technology</div>
                    <div class="row justify-content-center">Silicon Hills, Patia, Bhubaneswar - 751024</div>  
                </div>
            </div>
        </div>
        <br>
        <form action="adminSession.php" method="post" id="admin-form">
            <div class="container wrapper">
                <div class="card border-dark">
                    <div class="card-header">Administrator Login</div>
                    <div class="card-body text-dark">
                        <div class="form-group">
                            <label for="username">Administrator ID</label>
                            <input type="text" name= "userID" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your ID">
                            <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small-->
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="pass" class="form-control" id="inputPassword" placeholder="Password">
                        </div>
                        <!--div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div-->
                        <div class="row justify-content-center">
                            <!--div class="col-md-10"></div-->
                            <!--div class="col-md-1"-->
                                <button type="submit" name="login" class="btn btn-primary">Login</button> <!--&nbsp;&nbsp;-->
                                <!--button type="submit" class="btn btn-outline-primary">Register</button-->
                            <!--/div-->
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>