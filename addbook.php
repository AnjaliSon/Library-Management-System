<?php
$host="localhost";
$user="root"; 
$pass=""; 
$database="lms"; 
$conn=mysqli_connect($host,$user,$pass,$database);
if(isset($_POST['submit'])) 
 {
  echo"connected successfully";
$date_entry=$_POST['date_entry'];
$bookno=$_POST['bookno'];
$bookname=$_POST['bookname'];
$publisher=$_POST['publisher']; 
$bookquantity=$_POST['bookquantity'];

$img=$_FILES["uploadfile"]["name"]; 
$tempname=$_FILES["uploadfile"]["tmp_name"]; 
$folder="./img/".$img;
if(move_uploaded_file($tempname,$folder))
{
  echo"<script>alert('file uploaded successfully');</script>";
}

$sql="insert into addbook values('$date_entry','$bookno','$bookname','$publisher','$bookquantity','$img')"; 
$record=mysqli_query($conn,$sql);
if($record)
{ 
echo"<script>alert('Record inserted succcessfully')</script>";

} 
else{
echo"<script>alert('Record insertion Failed')</script>";
} 
mysqli_close($conn); 
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
<div class="container-fluid" style="background-image: url(photo/9.jpg); height:90vh; background-size:cover;">
<div class="row pt-5 pb-3">
 <h1 style="background-color:rgb(237, 213, 184); color: rgb(239, 129, 109);  font-weight:700; justify-content:center; display:flex; padding:5px; font-size:2.3rem;  text-shadow:5px 5px  10px rgb(6, 2, 2); ">ADD BOOK</h1>
</div>
        <div class="container-fluid p-3">
        <div class="container col-sm-10 ps-5">
        <a href="issuebook.php"><button class="btn btn-dark col-sm-2" style="margin-right:100px;  margin-left:60px; text-decoration:none;">Issue Book</button></a>
        <a href="bookrecord.php"><button class="btn btn-dark  col-sm-2" style="margin-right:100px; margin-left:100px; text-decoration:none;">Book record </button></a>
        <a href="#"><button class="btn btn-dark  col-sm-2" style="margin-right:100px; margin-left:100px; text-decoration:none;">Close</button></a>
        </div>
        <center>
            <form method="post" class="form-horizontal mt-3 p-4" 
            style="height: 55vh; width: 40VW; border:3px solid white;
            background-color:rgba(222, 153, 153, 0.553); backdrop-filter: blur(4px);
            font-weight: 600;font-size: 1rem;color:white;
            text-transform: capitalize; box-shadow:7px 7px 80px rgb(248, 37, 37);" enctype="multipart/form-data"> 
                <div class="form-group row mt-2">
                  <label for="username" class="form-label col-sm-5">DATE OF ENTRY</label>
                    <input type="date" name="date_entry" class="form-group-control col-sm-6"  id="Username">
                </div>
                <div class="form-group row mt-3">
                      <label for="name" class="form-label col-sm-5">BOOK N0:</label>
                      <input type="text" name="bookno" class="form-group-control col-sm-6"  id="name">
                  </div>
                  <div class="form-group row mt-3">
                     <label for="fathername" class="form-label col-sm-5">BOOK NAME</label>
                      <input type="text" name="bookname" class="form-group-control col-sm-6"  id="fathername">
                  </div>
                   <div class="form-group row mt-3">
                     <label for="coursename" class="form-label col-sm-5">PUBLISHER</label>
                      <input type="text" name="publisher" class="form-group-control col-sm-6"  id="coursename">
                    </div>
                
                  <div class="form-group row mt-3">
                      <label for="branchname" class="form-label col-sm-5">BOOK QUANTITY</label>
                      <input type="text" name="bookquantity" class="form-group-control col-sm-6"  id="branchname">
                  </div>
                  <div class="form-group mt-3 row">
                      <label for="bookimage" class="form-label col-sm-5">BOOK IMAGE</label>
                       <input type="file" name="uploadfile" class="form-group-control col-sm-6" id="bookimage">
                  </div>
                
                <center>
                <div class="form-group-control mt-3 col-sm-9"> 
                  <input type="submit" name="submit" id="Login" class="form-group-control btn btn-primary col-sm-4 ms-5" value="ADD BOOK">
                </div>
               </center>
            </form>
    </center>
        </div>
      </div>
</html>




