<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
  <?php include"nav.php"; ?>
  <div class="container-fluid" style="background-image: url('photo/6.jpg'); 
    background-size:cover; height: 100vh; width:100%; font-family: 'Times New Roman', Times, serif;">
  <center>
  <div class="container p-5 row col-sm-8 ">
    <center class="h3 text-warning" style="font-family: 'Times New Roman', Times, serif;"><b>BOOK RECORDS</b></center>
  <table class="table table-striped table-primary table-hover col-sm-7 mt-3">
  <tr class="fw-bold fs-5 text-center">
    <th>BOOK ID</th>
    <th>STUDENT ID</th>
    <th>ISSUE DATE</th>
    <th>RETURN DATE</th>
  </tr>
  </div>
    </center>
  </div>
    </body>
</html>

<?php
$host="localhost";
$user="root";
$pass="";
$database="lms";
$conn=mysqli_connect($host,$user,$pass,$database);
if($conn){
  $sql="select *from issuebook";
  $query=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($query))
  {
    echo"<tr class='fw-semibold text-center'>";
    echo"<td>".$row['bookid']."</td>";
    echo"<td>".$row['studentid']."</td>";
    echo"<td>".$row['issuedate']."</td>";
    echo"<td>".$row['returndate']."</td>";
    echo"</tr>";
  }
echo"</table>";
mysqli_close($conn) ;
};
?>