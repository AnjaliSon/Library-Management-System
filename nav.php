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
<style>
  body{
  font-family: 'Times New Roman', Times, serif;
}
.navcss li:hover{
  color: dodgerblue;
  font-weight: 800;
  transform: scaleZ(1.2);
  
}
     li ,a{
        font-size: 1.2rem;
        font-weight:500;
      }
   </style>
<body>
<nav class="navbar navbar-expand-lg bg-light" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="photo/logo4.png" alt="logo" style=" height:75px; width:250px"></a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navcss navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active overlay zoom" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1">About</a>
              </li>
              <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 BookTransaction
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item " href="BookIsue.php">Add New Student</a></li>
                  <li><a class="dropdown-item" href="BookReturn.php">Add Book</a></li>
                  <li><a class="dropdown-item " href="BookIsue.php">Book Issue</a></li>
                  <li><a class="dropdown-item" href="BookReturn.php">Return Book</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="RemoveBook.php">Remove Book</a></li>
                  <li><a class="dropdown-item" href="SearchBook.php">Search Book</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" tabindex="-1" class="nav-link " aria-disabled="true">Authors</a>
              </li>
              <li class="nav-item">
                <a href="#" tabindex="-1" class="nav-link " aria-disabled="true">Contant</a>
              </li>
            </ul>
            <!-- <form class="d-flex col-sm-5" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>