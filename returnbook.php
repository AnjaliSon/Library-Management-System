<?php
$returndate=date('y-m-d');
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
<?php include"nav.php" ;?>
<!--form-->

      <div class="container-fluid " style="background-image: url(photo/6.jpg); height:90vh; width:100%; background-size:cover;">
      <div class="row pt-5 pb-3">
      <h1 style="background-color:rgb(237, 213, 184); color: rgb(239, 129, 109); font-weight:700; justify-content:center; display:flex; padding:5px; font-size:2.3rem; text-shadow:5px 5px  10px rgb(6, 2, 2);">RETURN BOOK</h1>
</div>
        <div class="container p-5">
            <form method="post" class="form-horizontal border" 
            style="height: 45vh; width: 35VW;  
             background-color:rgba(222, 153, 153, 0.553); backdrop-filter: blur(4px);padding:30px;
            margin: 20px;font-weight: 500;font-size: 1rem;color:rgb(0, 0, 0);
            text-transform: capitalize; ">
                <div class="form-group-control row mt-3">
                  <label for="username" class="form-label col-sm-5">BOOK ID</label>
                    <input type="text" name="bookid" class="form-group-control col-sm-5"  id="Username">
                </div>
                <div class="form-group-control row mt-3">
                    <label for="name" class="form-label col-sm-5">STUDENT ID</label>
                      <input type="text" name="studentid" class="form-group-control col-sm-5"  id="name">
                  </div>
                
                  <div class="form-group-control row mt-3">
                    <label for="branchname" class="form-label col-sm-5">RETURN DATE</label>
                      <input type="text" value="<?php echo$returndate ?>" name="returndate" class="form-group-control col-sm-5"  id="branchname">
                   </div>
                   
                <div class="form-group mt-3 col-sm-9 ms-5 ps-5"> 
                <input type="submit" name="submit" id="Login" class="form-group-control btn btn-light col-sm-4" value="RETURN" style="margin-left: 100px; margin-top: 10px;">
                 
            </div>
            <?PHP
        $host="localhost";
        $user="root";
        $pass="";
        $database="lms";
        $conn=mysqli_connect($host,$user,$pass,$database);
        
        if(isset($_POST['submit']))
        {
            $bookid=$_POST['bookid'];
            $studentid=$_POST['studentid'];
            $SQL="delete from issuebook where (studentid='$studentid' AND bookid='$bookid')";
            $RESULT =  mysqli_query($conn,$SQL);
            if($RESULT){
                $SQL2="update addbook set bookquantity=bookquantity+1 where bookno = '$bookid'";
                $query = mysqli_query($conn,$SQL2);
                    if($query)
                    {
                        echo"<h4 style='color:yellow; text-align:center;'>book is returned</h4>";
                        header ("location:issuebook.php");
                    }
                    else{
                        echo"<h4 style='color:yellow; text-align:center;'>book is not returned</h4>";
                    }
                }
            else{
                echo"nnnnn";
            }
        }
    ?>
            </form>
            <!-- <img src="book3.jpg" alt="" style="height: 200px; width: 200px;"> -->
        </div>
       
    </div>
</html>