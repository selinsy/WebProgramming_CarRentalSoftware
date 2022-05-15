<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Website Design</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="managercss/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="SearchCars.php" class="logo"> <i class="fas fa-car"></i> RenCar  </a>

   

    <div class="icons">
        
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-bell" id="cart-btn"></div>
        
        <div class="fas fa-user" id="login-btn" onclick="location='loginsignup.html'">
        <button type ="button" onclick="location ='http://127.0.0.1:5500/loginsignup.html'"></button></div>
        
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label> 
    </form>
    <div class="shopping-cart">
        <div class="box">
            <img src="image/23rdApril.png" alt="">
            <div class="content">
                <h3>Public Holiday-23rd April</h3>
                <span class="model">Reduced Operating Hours</span>
            </div>
        </div>
        
       
        
        <a href="managerPage.html" class="btn">Close</a>

    </div>
    <form action="" class="login-form">
        <div class="content">
            <h3>Selin Yıldız</h3>
            <h3>Email : selin@gmail.com</h3>
        </div>
        
        <input type="button" value="Log out" class="btn"  onclick="location.href='http://127.0.0.1:5500/SearchCars.html';">
    </form>


</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>DASHBOARD</h3>
        <p>Welcome back Ms.Selin Yıldız</p>
        
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> Weekly<span>Report</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <h3>50 - Total Visitors</h3>
            <p>20% Higher Than Last Week</p>
            
        </div>

        <div class="box">
            
            <h3>20 - Registered Users</h3>
            <p>5% Higher Than Last Week</p>
            
        </div>

        <div class="box">
            
            <h3>15% - Server Load</h3>
            <p>1% Higher Than Last Week</p>
            
        </div>
        <div class="box">
            
            <h3>15 - Total Cars</h3>
            <p>Same as last week</p>
            
        </div>

    </div>

</section>

<!-- features section ends -->


<!--Message section starts-->

<section class="cars" id="cars"></section>

<h1 class="heading"></h1>
<h1 class="heading"> Our<span>Vehicles</span> </h1>

<table id="cars">
  <tr>
    <th>Car Names</th>
    <th>Category</th>
    <th>Price</th>
    <th>Photo</th>
    <th>Status</th>
  </tr>

  <?php
include("connection.php");

$choice="Select * From cars";
$result=$connection->query($choice);

if($result->num_rows>0){
  while($pull=$result->fetch_assoc()){

    echo"
    <tr>
        <td>".$pull['carsname']."</td>
        <td>".$pull['category']."</td>
        <td>".$pull['price']."</td>
        <td>".$pull['photo']."</td>
        <td>".$pull['status']."</td>
    </tr>
    ";

  }

}
else{
  echo"No data could be found.";

}

?>

  
  
</table>
</section>

<!--Message section ends--> 
        <a href="addCar.php" class="btn">Add a new car</a>
       
    


<!--Deals Of The Week section starts here..-->
<section class="categories" id="categories">
    <h1 class="heading"><span>Deals of the Week</span></h1>
    <div class="box-container">

        <div class="box">
            <img src="pickupimage/pickupCar-2.png" alt="">
            <h3>2015 GMC Sierra</h3>
            <p>upto 45%</p>
            <a href="#" class="btn">Update</a>
            <a href="#" class="btn">Delete</a>
        </div>
        <div class="box">
            <img src="image/product-30.png" alt="">
            <h3> 2016 BMW 320i</h3>
            <p>upto 40%</p>
            <a href="#" class="btn">Update</a>
            <a href="#" class="btn">Delete</a>
        </div>
        <div class="box">
            <img src="image/product-1.png" alt="">
            <h3>2019 Hyundai Tucson</h3>
            <p>upto 20%</p>
            <a href="#" class="btn">Update</a>
            <a href="#" class="btn">Delete</a>
        </div>

    </div>
</section>
<!--Deals Of The Week section ends here..-->

<!--Recent Rented Car section starts-->

<section class="rentedlist" id="rentedlist"></section>

<h1 class="heading"></h1>
<h1 class="heading"> Recent<span>Car</span>Bookings</h1>

<table id="rentedlist">
  <tr>
    <th>Username</th>
    <th>Car Names</th>
    <th>Price</th>
    <th>Pick-up Date</th>
    <th>Return Date</th>
    
    
  </tr>

  <?php
include("connection.php");

$choice="Select * From rentedlist";
$result=$connection->query($choice);

if($result->num_rows>0){
  while($pull=$result->fetch_assoc()){

    echo"
    <tr>
        <td>".$pull['username']."</td>
        <td>".$pull['carsname']."</td>
        <td>".$pull['price']."</td>
        <td>".$pull['pickupdate']."</td>
        <td>".$pull['returndate']."</td>
    </tr>
    ";

  }

}
else{
  echo"No data could be found.";

}

?>

  
  
</table>
</section>

<!--Recent Rented Car section ends-->


<!--footer section starts here..-->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>RenCar <i class="fas fa-car"></i></h3>
            <p>Lorem ipsum dolor sit, amet consectur adipisicin elit
                Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur
            </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#" class="links"> <i class="fas fa-phone">+90 538 486 6148</i></a>
            <a href="#" class="links"> <i class="fas fa-envelope">seliny@gmail.com</i></a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt">Antalya, TURKEY</i></a>
        </div>

        <div class="box">
            <h3>Quick Links</h3>
            <a href="SearchCars.php" class="links"> <i class="fas fa-arrow-right">Home</i></a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right">Our vehicles</i></a>
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right">Recent Car Bookings</i></a>
            
            
        </div>

        

    </div>
    
</section>
<!--footer section ends here..-->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="managerjs/script.js"></script>

</body>
</html>