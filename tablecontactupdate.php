
<?php
include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE contact set id='" . $_POST['userid'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', mobile ='" . $_POST['mobile'] . "' , freetime='" . $_POST['freetime'] . "', problem='" . $_POST['problem'] . "' WHERE id='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM contact WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">





    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sinup.css">


</head>
<body>
<header id="header">
      <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
          <p class="font-rale font-size-12 text-black-50 m-0">DayBix is most popular ecommerce site in Bangladesh</p>
          <div class="font-rale font-size-14">
              <a href="login.html" class="px-3 border-right border-left text-dark">Login</a>
              
          </div>
      </div>

      <!-- Primary Navigation -->
      


      <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
          <a class="navbar-brand logoo" href="index.html"><p class="logo">DayBix - admin</p></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
              
              <li class="nav-item">
                <a class="nav-link" href="tableorder.php">Order list</a></li>

                <li class="nav-item">
                  <a class="nav-link" href="tableblog.php">Blog</a>
                </li>
              
              <li class="nav-item">
                <a class="nav-link" href="tableemployee.php">Employee</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tableproduct.php">Product</a>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="tablecustomer.php">Customer</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="tablecontact.php">Customer-Call</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="searchadmin.php">search</a>
                </li>
                
            </ul>
            
          </div>
        </nav>
         <!-- !Primary Navigation -->

  </header>


<div class="conteiner">
      <h1>contact update</h1>

<div class="conteinerbox">



<form action="" method="post">

<div><?php if(isset($message)) { echo $message; } ?>
</div>
  <div class="mincol">
    <div class="col left">
        <label for="name">Id (no change):</label>
        <label for="email"> name:</label>
        <label for="mobile">Email:</label>
        <label for="free_time">Mobile:</label>
        <label for="problrm">Free Time:</label>
        <label for="problrm">Problem:</label>
       

    </div>
  
    <div class="col right">
      <div class="name">

<input type="hidden" name="userid" class="txtField" value="<?php echo $row['id']; ?>">

<input type="" name="userid"  value="<?php echo $row['id']; ?>" readonly>


<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">


<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">


<input type="text" name="mobile" class="txtField" value="<?php echo $row['mobile']; ?>">


<input type="text" name="freetime" class="txtField" value="<?php echo $row['freetime']; ?>">


<input type="text" name="problem" class="txtField" value="<?php echo $row['problem']; ?>">




      </div>
    </div>
  </div>
  <div class="divbtnsubmit">
    <button class="btn btn-lg btn-primary submitbtn">Submit</button>
  </div>
  
</form>

</div>

</div>



<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">DayBix</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Get 40% Offer</h4>

                <form action="customerinfo.php" method="post"  class="form-row">
                  <div class="col">

                    <input name="name" type="text" class="form-control" placeholder="Name"><br>

                    <input name="contact" type="text" class="form-control" placeholder="Email / Number *"> <br><br>

                  </div>
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                  </div>

                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Copyrights 2022. Desing By <a href="#" class="color-second">Junaet Islam</a></p>
        </div>

    <!-- !start #footer -->

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    

    <!-- Owl Carousel Js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>

    

    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


 
    

    <!-- Custom Javascript -->
    <script src="index.js"></script>
    
</body>
</html>