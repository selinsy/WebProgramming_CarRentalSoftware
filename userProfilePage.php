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
    <link rel="stylesheet" href="userProfilecss/style.css">
    
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="SearchCars.php" class="logo"> <i class="fas fa-car"></i> RenCar </a>

    <nav class="navbar">
        <a href="SearchCars.php">Home</a>
        <a href="managerlogin.php">Manager</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-car" id="cart-btn"></div>
        <div class="fas fa-user" onclick="location.href='loginsignup.html'" id="login-btn"></div>
        <button type ="button" onclick="location ='http://127.0.0.1:5500/loginsignup.html'"></button></div>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/product-30.png" alt="">
            <div class="content">
                <h3>Great</h3>
                <span class="model">BMW 320i</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        
       
        <div class="total"> total : $32.69 </div>
        <a href="#" class="btn">Checkout</a>
    </div>
    <form action="" class="login-form">
        <div class="content">
            <h3>Selin Yıldız</h3>
            
        </div>
        
        <input type="button" value="Log out" class="btn"  onclick="location.href='http://127.0.0.1:5500/SearchCars.html';">
    </form>
    

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>we've got all <span>great</span> models for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
    </div>

</section>

<!-- home section ends -->

<!-- search section starts  -->

<section class="search" id="search">

    <h1 class="heading"><span>Account</span>Details </h1>
    <h1 class="heading">    </h1>

    <div class="box-container">
        <box action ="">
            <div class="box">
                <div class="input-box">                         
                    <span>First name</span>
                    <input type="search" name="" id="" placeholder="Selin" >
                </div>
                <div class="input-box">                         
                    <span>Last name</span>
                    <input type="search" name="" id="" placeholder="Yıldız" >
                </div>
                <div class="input-box">                         
                    <span>Username</span>
                    <input type="search" name="" id="" placeholder="yildizselin" >
                </div>
                <div class="input-box">                         
                    <span>Email addres</span>
                    <input type="search" name="" id="" placeholder="selin.yildiz@gmail.com" >
                </div>
                <div class="input-box">
                    <span>Birthday</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">                         
                    <span>Addres</span>
                    <input type="search" name="" id="" placeholder="Antalya/TURKEY" >
                </div>
                
            
                <a href="userProfilePage.php" class="btn">Save Changes</a>
                
            </div>
        </box>
        
    </div>
    
    
</section>

<!-- search section ends -->

<!--Past rental section starts-->

<section class="mypastrental" id="mypastrental"></section>

<h1 class="heading"></h1>
<h1 class="heading"> My Last<span>Rentals</span></h1>

<table id="cars">
  <tr>
    <th>Car Names</th>
    <th>Price</th>
    <th>Pick-up Dates</th>
    <th>Return Dates</th>
  </tr>

  <?php
include("connection.php");

$choice="Select * From usercomments order by id DESC LIMIT 3";
$result=$connection->query($choice);

if($result->num_rows>0){
  while($pull=$result->fetch_assoc()){

    echo"
    <tr>
        <td>".$pull["carsname"]."</td>
        <td>".$pull['price']."</td>
        <td>".$pull['pickupDate']."</td>
        <td>".$pull['returnDate']."</td>
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

<!--Past rental section ends-->

<!-- Review section starts here..-->

<section class="review">
    <div class="container">
        <h3>Make A Review</h3>
        <form action="userProfilePage.php" method ="post" onClick=" >
        <div id="reviewOpaque">
            <div id="formgroup">
                <div id="leftform">
                    <input type="text" name="username" placeholder="Username" required class="form-control">
                </div>
                <textarea name="review" id="" cols="30" placeholder="Please make a review..." rows="10" required class="form-control"></textarea>
                
                <input type="submit" value="Send" >
            
            </div>
        
    </div>
    </form> 
    </div>
    

</section>

<!--Review section ends here..-->

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
            <a href="SearchCars.html" class="links"> <i class="fas fa-arrow-right">Home</i></a>
            <a href="#search" class="links"> <i class="fas fa-arrow-right">My Account</i></a>
        </div>

    </div>
</section>
<!--footer section ends here..-->

<!-- custom js file link  -->
<script src="managerjs/script.js"></script>

</body>
</html>

<!-- php connection -->
<?php

include("connection.php");

if(isset($_POST['username'], $_POST['review'])){
    $username=$_POST["username"];
    $review=$_POST["review"];
    
    
    $insert=" INSERT INTO review (username, review) VALUES 
    ('".$username."','".$review."')";
    
    
    if($connection-> query($insert)===TRUE){
        echo "<script>alert('Your message has been sent successfully.')
        </script>";

    }
    else {
        echo "<script>alert('Your message has not been sent successfully.')
        </script>"; 
    }
mysqli_close($connection);
}

?>

