<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include"nav.php"; ?> 
    <div class="container-fluid" style="background-image: url(photo/6.jpg); height:90vh; width:100%; background-size:cover;">
    <div class="row pt-5 pb-3">
      <h1 style="background-color:rgb(237, 213, 184); color: rgb(239, 129, 109); font-weight:700; justify-content:center; display:flex; padding:5px; font-size:2.3rem; text-shadow:5px 5px  10px rgb(6, 2, 2);">REMOVE BOOK</h1>
    </div>  
      <div class="container p-5">
            <form method="post" class="form-horizontal border" 
            style="height: 45vh; width: 35VW;  
             background-color:rgba(222, 153, 153, 0.553); backdrop-filter: blur(4px);padding:30px;
            margin: 20px;font-weight: 500;font-size: 1rem;color:rgb(0, 0, 0);
            text-transform: capitalize; ">
                <div class="form-group-control row mt-3">
                  <label for="bookid" class="form-label col-sm-5">BOOK ID</label>
                    <input type="text" name="bookid" class="form-group-control col-sm-5"  id="bookid">
                </div>
                <div class="form-group-control row mt-3">
                    <label for="bookquantity" class="form-label col-sm-5">Book Quantity</label>
                      <input type="text" name="bookquantity" class="form-group-control col-sm-5"  id="bookquantity">
                  </div>
                   
                <div class="form-group mt-3 col-sm-12 ms-2 ps-5 mt-5"> 
                <input type="submit" name="remove" id="remove" class="form-group-control btn btn-light col-sm-4 ms-5" value="Remove" style=" margin-top: 10px;">
                <input type="submit" name="update" id="update" class="form-group-control btn btn-light col-sm-4 ms-5" value="Update" style=" margin-top: 10px;">
                </div>
            </div>
</body>
</html>
   
