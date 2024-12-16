<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="design.css">
    <script src="jquery.min.js"></script>

  <style> 
    .form-group{
         margin: 20px;
         
        }
    .main{
            border: 2px solid black;
            width:18vw; 
            border-radius: 20px;
            box-shadow: 0px 0px 60px rgb(100, 173, 233);
            background-color: aliceblue;
            font-weight: bold;
        }
        
</style>
</head>
<body>
<?php include "nav.php"; ?>
<!-- admin form-->

<div class="container-fluid pt-3" style="background-image: url(photo/library1.jpg); height:100vh; width:100%; background-size: 100vw;">
  <div class="container p-5" style="  display: flex; justify-content:flex-end;">
    <div class="container col-sm-4"><img src="photo/boy4.png" alt="" style="height: 300px; margin-left:80%; margin-top:40px;"></div>

  <form action="#" method="post" class="form-container main ps-2" style="width:300px;">
    <div class="form-group">
        <h2 style="font-weight:800; font-size:x-large;" class="text-center">Sign Up</h2>
        <label for="Inputname" style="margin-top:20px;">User Name</label>
        <input type="text" id="Inputname" class="form-control" required style="width: 16vw;" name="username">
    </div>

    <div class="form-group">
        <label for="email">Email ID</label>
        <input type="text" id="email" class="form-control" required style="width: 16vw;" name="email">
      </div>

    <div class="form-group">
        <label for="Inputpassword">Password</label>
        <input type="password" id="Inputpassword" class="form-control" required style="width: 16vw;" name="pass">
       
      </div>
      
      <div class="ms-5 mb-3">
  <button type="submit" class="btn btn-info border-light b2 ms-5"  name="submit" id="mybtn">Sign Up</button>
</div>
</form>
</div>
</div>
</body>
</html>


