<!DOCTYPE html>
<html>
  <?php
  session_start();
    include 'conn.php';
    $categorysql = 'SELECT * FROM categorymaster';
    $categoryresult = mysqli_query($conn, $categorysql);
    $facilitessql = 'SELECT * FROM facilitiesmaster';
    $facilitiesresult = mysqli_query($conn, $facilitessql);

    $studentId='';
    //Run in insert mode i.e. with no prepoulated form
    if(isset($_GET['id']))
    {
      // Get student id
      $studentId = $_GET['id'];
    
      // Get student details for the ID requested
      $fetchStudentQuery = "SELECT * FROM `studentmaster` WHERE studentId = '$studentId' ;";

      // Run the query
      $resultStudentDetails = mysqli_query($conn, $fetchStudentQuery);

      // Get the array
      $studentArray = mysqli_fetch_array($resultStudentDetails);

      // Fetch facilities for $studentId from studentfacility
      $fetchStudentFacilitiesQuery = "SELECT * FROM `studentfacility` WHERE studentId = '$studentId' ;";

      // Run the query
      $resultStudentFacilites = mysqli_query($conn, $fetchStudentFacilitiesQuery);


    }
    

  ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="expires" content="0">
        <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="refSit.css">
        <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Poppins">
          <style>
            body {
              font-family: 'Poppins', sans-serif;
            }
          </style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <style>
          .material-symbols-outlined {
            font-variation-settings:
            'FILL' 100,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
          }
          </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--<script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/owl.carousel.min.js"></script>-->
        <!--<script src="https://silicon.ac.in/wp-content/themes/sit/assets/js/custom.js"></script>-->
        <script type="text/javascript" src="js/refSit.js"></script>

    </head>
    <body>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3"><img src="elements\sit-logo.svg"></div>
                <div class="col-md-9">
                    <div class="row justify-content-center">Silicon Institute of Technology</div>
                    <div class="row justify-content-center">Registration Form</div>    
                </div>
            </div>
        </div>
        <br>
        <form enctype="multipart/form-data" class="well form-horizontal studentRegistration bv-form" 
        action=<?php if(isset($_GET['id'])) echo "updateStudent.php"; else echo "insertStudent.php";?> 
        method="post" id="contact-form">
        <?php if(isset($_GET['id'])) echo '<input type="hidden" name="studentId" value='.$studentId.'>';?>
        <div class="container">
              <div class="input-group mb-3">
              <label for="student-first-name" class="col-sm-2 col-form-label">Upload your photo</label>
                <div class="input-group-prepend">
                <span class="input-group-text"><span class="material-symbols-outlined">photo_camera_front</span></span>
                </div>
                <div class="custom-file">
                <input type="file" class="custom-file-input" name="studentPhoto" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
              </div>
              </div>
              <div class="input-group mb-3">
                <label for="student-first-name" class="col-sm-2 col-form-label">First Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="student-first-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="firstName" class="form-control" placeholder="First Name" aria-label="First Name" aria-describedby="basic-addon1" required value="<?php if(is_numeric($studentId)) echo $studentArray['studentFirstName']; ?>"/>
              </div>
              <div class="input-group mb-3">
                <label for="student-last-name" class="col-sm-2 col-form-label">Last Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="student-last-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="lastName" class="form-control" placeholder="Last Name" aria-label="Last Name" aria-describedby="basic-addon1" required value="<?php if(is_numeric($studentId)) echo $studentArray['studentLastName']; ?>"/>
              </div>
              <div class="input-group mb-3">
                <label for="father-name" class="col-sm-2 col-form-label">Father's Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="father-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="fatherName" class="form-control" placeholder="Father's Name" aria-label="Father's Name" aria-describedby="basic-addon1" required value="<?php if(is_numeric($studentId)) echo $studentArray['fatherName']; ?>"/>
              </div>
              <div class="input-group mb-3">
                <label for="mother-name" class="col-sm-2 col-form-label">Mother's Name</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="mother-name"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="motherName" class="form-control" placeholder="Mother's Name" aria-label="Mother's Name" aria-describedby="basic-addon1" required value="<?php if(is_numeric($studentId)) echo $studentArray['motherName']; ?>"/>
              </div>
              <div class="input-group mb-3">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <?php
                  $selected_male=''; $selected_female=''; $selected_other='';
                  $male_focus=''; $female_focus=''; $other_focus='';
                  if (is_numeric($studentId)) {
                      if ($studentArray['gender'] == 'Male') {
                        $selected_male='checked'; 
                        $male_focus=' active focus';
                      } else { $selected_male=''; $male_focus='';};

                      if ($studentArray['gender'] == 'Female'){
                        $selected_female='checked'; 
                        $female_focus=' active focus';
                      } else { $selected_female=''; $female_focus='';};

                      if ($studentArray['gender'] == 'Other') {
                        $selected_other='checked'; 
                        $other_focus=' active focus';
                      } else { $selected_other=''; $other_focus='';};

                    }  
                ?>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-primary<?php echo $male_focus; ?>">
                      <input type="radio" name="gender" id="male" <?php echo  $selected_male; ?> value="Male"> Male
                    </label>
                    <label class="btn btn-outline-primary<?php echo $female_focus; ?>">
                      <input type="radio" name="gender" <?php echo  $selected_female; ?> id="female" value="Female"> Female
                    </label>
                    <label class="btn btn-outline-primary<?php echo $other_focus; ?>">
                      <input type="radio" name="gender" <?php echo  $selected_other; ?>  id="other" value="Others">Others
                    </label>
                  </div>
                </div>
              <div class="input-group mb-3">
                <label for="dob" class="col-sm-2 col-form-label">Date of Birth</label>
                <input type="date" name="dob" id="getDOB"	minlength="6" maxlength="6" required value="<?php if(is_numeric($studentId)) echo $studentArray['dateOfBirth']; ?>"/>
              </div>
              <div class="input-group mb-3">
               <label for="category" class="col-sm-2  col-form-label">Category</label>
                <div class="btn-group btn-grp-toogle" id="category">
                  <?php
                    $cat_selected='';
                    $cat_sql = mysqli_query($conn,"SELECT * FROM `categorymaster`;");
                           while($fetched_data = mysqli_fetch_array($cat_sql)) { 
                            if (is_numeric($studentId)) {
                              if ($fetched_data['categoryId']==$studentArray['categoryId']) {
                                $cat_selected='checked';
                              } else {
                                $cat_selected='';
                              }
                            }
                            ?>
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="category" 
                                id="categoryId" <?php echo $cat_selected; ?> 
                                value="<?php echo $fetched_data['categoryId'] ?>"> 
                                <?php echo $fetched_data['categoryName'] ?>
                            </label> 

                          <?php        
                        }
                    ?>
                  </div>
              </div>
              <div class="input-group mb-3">
                <label for="religion" class="col-sm-2 col-form-label">Religion</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="religion"><span class="material-symbols-outlined">person</span></span>
                </div>
                <input type="text" name="religion" class="form-control" id="getReligion" placeholder="Religion" aria-label="Religion" aria-describedby="basic-addon1" value="<?php if(is_numeric($studentId)) echo $studentArray['religion']; ?>">
              </div>
              <div class="input-group mb-3">
                <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="email"><span class="material-symbols-outlined">mail</span></span>
                </div>
                <input type="email" name="email" class="form-control" id="getEmail" placeholder="E-Mail" aria-label="E-Mail" aria-describedby="basic-addon1" value="<?php if(is_numeric($studentId)) echo $studentArray['email']; ?>">
              </div>
              <div class="input-group mb-3">
                <label for="phnNum" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="input-group-prepend">
                <span class="input-group-text" id="phnNum"><span class="material-symbols-outlined">call</span></span>
                </div>
                <input type="tel" name="phnNum" class="form-control" id="getPhnNum" placeholder="Phone Number" aria-label="Phone Nymber" aria-describedby="basic-addon1" value="<?php if(is_numeric($studentId)) echo $studentArray['phnNum']; ?>">
              </div>
              <div class="input-group">
                <label for="religion" class="col-sm-2 col-form-label">Address</label>
                <div class="input-group-prepend">
                  <span class="input-group-text"><span class="material-symbols-outlined">home</span></span>
                </div>
                <input class="form-control" name="address" id="getAddress" placeholder="Address" aria-label="Address" value="<?php if(is_numeric($studentId)) echo $studentArray['address']; ?>"></textarea>
              </div>
              <br>
              <div class="input-group mb-3">
               <label for="facilities" class="col-sm-2  col-form-label">Facilities</label>
                <div class="btn-group btn-grp-toogle" id="facilities">
                  <?php
                        $facility_checked = '';
                        while($fetched_data1 = mysqli_fetch_array($facilitiesresult)) 
                        { 
                          if (is_numeric($studentId)) {

                            mysqli_data_seek($resultStudentFacilites,0);
                            
                            while($studentFacilitesArray = mysqli_fetch_array($resultStudentFacilites)) {
                          
                              if ($fetched_data1['facilitiesId'] == $studentFacilitesArray['facilitiesId']) {
                                $facility_checked = 'checked';
                                break;
                              } else {
                                $facility_checked = '';     
                              }
                            }
                          } else 
                            $facility_checked = '';
                          ?>
                            <label class="btn btn-outline-primary">
                                <input type="checkbox" name="facility[]" 
                                id="facility" <?php echo $facility_checked; ?>
                                value="<?php echo $fetched_data1['facilitiesId'] ?>"> 
                                <?php echo $fetched_data1['facilitiesName'] ?>
                            </label> 

                          <?php        
                        }
                    ?>
                </div>
              </div>
              <div class="row justify-content-center">
                <button class="btn btn-primary justify-content-center" type="submit" id="submit">Submit</button>
              </div>
        </div>
        </form>
        
    </body>
</html>