<?php
$host="localhost";
$user="root";
$pass="";
$database="lms";
$conn=mysqli_connect($host,$user,$pass,$database);
if(isset($_POST['submit']))
{
$studentid=$_POST['studentid'];
$studentname=$_POST['studentname'];
$fathername=$_POST['fathername'];
$coursename=$_POST['coursename'];
$branchname=$_POST['branchname'];
$sql="insert into addstudent values('$studentid','$studentname','$fathername','$coursename','$branchname')";
$record=mysqli_query($conn,$sql);
if($record)
echo"<script>alert('Recotd inserted succcessfully')</script>";
else
echo"<script>alert('Recotd insertion Failed')</script>";
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php include "nav.php"; ?>
   <!--form-->
        <div class="container-fluid" style="background-image: url(photo/6.jpg); width:100%; background-size:cover;">
        <div class="row pt-5 pb-3">
        <h1 style="background-color:rgb(237, 213, 184); color: rgb(239, 129, 109);  font-weight:700; justify-content:center; display:flex; padding:5px; font-size:2.3rem;  text-shadow:5px 5px  10px rgb(6, 2, 2);">ADD NEW STUDENT</h1></div>
        <center><div class="container-fluid p-3">
        <div class="container col-sm-10 ps-5 ">
        <a href="returnbook.php"><button class="btn btn-dark  col-sm-2" style="margin-right:100px;  margin-left:50px; text-decoration:none;">Return Book</button></a>
        <a href="returnbook.php"><button class="btn btn-dark  col-sm-2" style="margin-right:100px; margin-left:100px; text-decoration:none;">Book record </button></a>
        <a href="returnbook.php"><button class="btn btn-dark  col-sm-2" style="margin-right:100px; margin-left:100px; text-decoration:none;">Close</button></a>
        </div>
            <form method="post" class="form-horizontal mt-5 pt-3"style="height: 55vh; width:40VW;
            border:3px solid white;  background-color:rgba(222, 153, 153, 0.553); backdrop-filter: blur(4px);font-weight:600;
            font-size:1rem; color:white; text-transform: capitalize; box-shadow:7px 7px 80px rgb(248, 37, 37);">
                <div class="form-group-control row mt-4">
                  <label for="username" class="form-label col-sm-5">Student ID..</label>
                    <input type="text" name="studentid" class="form-group-control col-sm-5"  id="Username">
                </div>
                <div class="form-group-control row mt-4">
                    <label for="name" class="form-label col-sm-5">Student Name</label>
                      <input type="text" name="studentname" class="form-group-control col-sm-5"  id="name">
                  </div>
                  <div class="form-group-control row mt-4">
                    <label for="fathername" class="form-label col-sm-5">Father Name</label>
                      <input type="text" name="fathername" class="form-group-control col-sm-5"  id="fathername">
                  </div>
                   <div class="form-group-control row mt-4">
                    <label for="coursename" class="form-label col-sm-5">Course Name</label>
                      <input type="text" name="coursename" class="form-group-control col-sm-5"  id="coursename">
                  </div>
                  <div class="form-group-control row mt-4">
                    <label for="branchname" class="form-label col-sm-5">Branch Name</label>
                      <input type="text" name="branchname" class="form-group-control col-sm-5"  id="branchname">
                  </div>
               
                 <div class="form-group mt-3 col-sm-8 ms-5"> 
                    <input type="submit" name="submit" id="Login" class="form-group-control btn btn-primary col-sm-2 ms-5" value="Save">
                    <button class="btn btn-primary col-sm-2 ms-5 ">Close</button>
                 </div>
            
                </div>
            </form>
        </div>
        </center>
        </div>
</html>
