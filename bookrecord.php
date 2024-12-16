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

<div class="container-fluid" style="background-image: url('photo/6.jpg'); 
  background-size: 100vw; height: 100vh; width: 100vw; font-family: 'Times New Roman', Times, serif;">
  <center>
  <div class="container p-5 row col-sm-8 ">
    <center class="h3 text-warning fw-5" style="font-family: 'Times New Roman', Times, serif;"><b>BOOK RECORDS</b></center>
  <table class="table table-striped table-primary table-hover col-sm-7 mt-3">
  <tr class="fw-bold fs-5">
    <th>DATE OF ENTRY</th>
    <th>BOOK NO</th>
    <th>BOOK NAME</th>
    <th>PUBLISHER</th>
    <th>BOOK QUANTITY</th>
    <th>BOOK IMAGE</th>
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
  $sql="select *from addbook";
  $query=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($query))
  {
    echo"<tr class='fw-semibold text-center'>";
    echo"<td>".$row['date_entry']."</td>";
    echo"<td>".$row['bookno']."</td>";
    echo"<td>".$row['bookname']."</td>";
    echo"<td>".$row['publisher']."</td>";
    echo"<td>".$row['bookquantity']."</td>";
    echo"<td><center><img src='img/".$row['img']."'style='height:60px; width:50px;'></center></td>";
    echo"</tr>";
  }
  echo"</table>";
  mysqli_close($conn) ;
};
?>