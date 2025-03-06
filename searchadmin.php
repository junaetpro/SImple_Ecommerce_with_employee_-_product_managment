

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daybix</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sinup2.css">
    <style>
        hr{
  border: 10px solid blue;
  border-radius: 5px;
}
    </style>

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
    <!-- !start #header -->










    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-1">
                    <div class="card-header text-center">
                        <h4>out of stock product list</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="1" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","project");

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];

                                        $query = "select * from product where quantity<=1";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">id</label>
                                                    <input type="text" value="<?= $row['id']; ?>" class="form-control">
                                                </div>


                                                <div class="form-group mb-3">
                                                    <label for="">productname</label>
                                                    <input type="text" value="<?= $row['productname']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">category</label>
                                                    <input type="text" value="<?= $row['category']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Stock</label>
                                                    <input type="text" value="<?= $row['quantity']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">supplier_name</label>
                                                    <input type="text" value="<?= $row['supplier_name']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">buying_price</label>
                                                    <input type="text" value="<?= $row['buying_price']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">selling_price</label>
                                                    <input type="text" value="<?= $row['selling_price']; ?>" class="form-control">
                                                </div>

                                                
                                                <hr><hr><br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- ............................................................................................................................................................................................................................................................. -->
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-1">
                    <div class="card-header text-center">
                        <h4>employee detais</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" placeholder="name" name="name" value="<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","project");

                                    if(isset($_GET['name']))
                                    {
                                        $name = $_GET['name'];

                                        $query = "select * from employee where name like '%$name%'";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">id</label>
                                                    <input type="text" value="<?= $row['id']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">name</label>
                                                    <input type="text" value="<?= $row['name']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">phone</label>
                                                    <input type="text" value="<?= $row['phone']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">email</label>
                                                    <input type="text" value="<?= $row['email']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">address</label>
                                                    <input type="text" value="<?= $row['address']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">job</label>
                                                    <input type="text" value="<?= $row['job']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">salary</label>
                                                    <input type="text" value="<?= $row['salary']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">join_date</label>
                                                    <input type="text" value="<?= $row['join_date']; ?>" class="form-control">
                                                </div>

                                                
                                                
                                                <hr><hr><br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



    


   
    

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