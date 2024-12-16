<?php

$host="localhost";
$user="root";
$pass="";
$database="lms";
$conn=mysqli_connect($host,$user,$pass,$database);

$issuedate=date("Y-m-d");
$returndate=date('Y-m-d',strtotime($issuedate.'7 days'));

if(isset($_POST['submit']))
{
  $bookid=$_POST['bookid'];
  $studentid=$_POST['studentid'];
 
  $sql="insert into issuebook values('$bookid','$studentid','$issuedate','$returndate')";
  $stt=mysqli_query($conn,$sql);
  
  if($stt)
  {
  $sql1="update addbook set bookquantity = bookquantity-1 where bookno='$bookid'";
  $stt1=mysqli_query($conn,$sql1);
  echo"<script>alert('book issue successfully')</script>";
  }
  else
  echo"Book not Issued";

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
      <div class="container-fluid" style="background-image: url(photo/6.jpg); height:90vh; width:100%; background-size:cover;">
      <div class="row pt-5 pb-3">
      <h1 style="background-color:rgb(237, 213, 184); color: rgb(239, 129, 109);  font-weight:700; justify-content:center; display:flex; padding:5px; font-size:2.3rem;  text-shadow:5px 5px  10px rgb(6, 2, 2);">ISSUE BOOK</h1>
      </div>
      <div class="container-fluid p-4">
        <form method="post" class="form-horizontal border" style="height: 45vh; width: 40VW;  
            background-color:rgba(222, 153, 153, 0.553); backdrop-filter: blur(4px);padding:20px;
            margin: 40px;font-weight: 500;font-size: 1rem;color:white;
            text-transform: capitalize; box-shadow:7px 7px 50px rgb(167, 127, 127); color:black; font-weight:700;" action="issuebook.php">
            <div class="form-group-control row mt-4 ms-4">
              <label for="username" class="form-label col-sm-5">BOOK ID</label>
                <input type="text" name="bookid" class="form-group-control col-sm-6"  id="Username">
            </div>
            <div class="form-group-control row mt-3 ms-4">
                <label for="name" class="form-label col-sm-5">STUDENT ID</label>
                  <input type="text" name="studentid" class="form-group-control col-sm-6"  id="name">
              </div>
              <div class="form-group-control row mt-3 ms-4">
                <label for="fathername" class="form-label col-sm-5">ISSUE DATE</label>
                  <input type="text" value="<?php echo$issuedate ?>" name="issuedate" class="form-group-control col-sm-6"  id="fathername">
              </div>
            
              <div class="form-group-control row mt-3 ms-4">
                <label for="branchname" class="form-label col-sm-5">DUE DATE</label>
                  <input type="text" value="<?php echo$returndate ?>" name="returndate" class="form-group-control col-sm-6"  id="branchname">
               </div>
                      
              <div class="form-group mt-3 col-sm-9 ms-5 ps-5 mt-4"> 
                    <input type="submit" name="submit" id="Login" class="form-group-control btn btn-primary col-sm-4 ms-5" value="Issue">
                    <button class="btn btn-danger col-sm-4 ms-5">Close</button>
              </div>
          
                </div>
            </form>
        </div>
       
        </div>
</html>


