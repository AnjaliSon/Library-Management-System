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
      <div class="container-fluid pt-3" style="background-image:url(photo/5.jpg); background-size:cover">
      <div class="row me-2 mt-2 ms-3"><button class="btn btn-primary col-sm-1 ">Sign In</button>&nbsp;&nbsp;&nbsp;&nbsp;
     <button class="btn btn-primary col-sm-1">Sign Up</button></div>
      <div class="row">
        <div class="col text-center text-warning bg-light fw-bold mt-4"><h1>Welcome To My library</h1></div>
      </div>
        <div class="container col-sm-6 mt-2 pt-3">
        <ul class="list-group col-sm-5 mt-5 ms-5">
                <a href="addbook.php" style="text-decoration:none; "><li class="list-group-item btn  border border-secondary m-1"><b>Add Book</b></li></a>
                <a href="addstudent.php" style="text-decoration:none;"><li class="list-group-item btn  border border-secondary m-1"><b>Add Student </b></li></a>
                <a href="issuebook.php" style="text-decoration:none; "> <li class="list-group-item btn  border border-secondary m-1"><b>Book Issue </b></li></a>
                <a href="Bookrecord.php" style="text-decoration:none;">   <li class="list-group-item btn  border border-secondary m-1"><b>Book Record </b></li></a>
                <a href="Studentrecord.php" style="text-decoration:none;">   <li class="list-group-item btn  border border-secondary m-1"><b>Student Record </b></li></a>
                <a href="returnbook.php" style="text-decoration:none;"><li class="list-group-item btn  border border-secondary m-1"><b>Return Book </b></li></a>
                <a href="removebook.php" style="text-decoration:none;"><li class="list-group-item btn  border border-secondary m-1"><b>Remove Book </b></li></a>
                <a href="admin.php" style="text-decoration:none; "><li class="list-group-item btn  border border-secondary m-1"><b>Admin Login </b></li></a>
        </ul>
          </div>
      </div>
</body>
</html>

