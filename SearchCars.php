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
    <link rel="stylesheet" href="searchCarscss/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="SearchCars.php" class="logo"> <i class="fas fa-car"></i> RenCar </a>

    <nav class="navbar">
        <a href="SearchCars.php">Home</a>
        <a href="#features">Features</a>
        <a href="#search">Find Your Best Car</a>
        <a href="#review">Reviews</a>
        <a href="managerlogin.php">Manager</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-car" id="cart-btn"></div>
        <div class="fas fa-user" onclick="location.href='loginsignup.php'" id="login-btn"></div>
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

    

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>We've Got All <span>Great</span> Models For Your</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> Our <span>Features</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/feature-img-1.png" alt="">
            <h3>Brand New</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            
        </div>

        <div class="box">
            <img src="image/feature-img-2.png" alt="">
            <h3>New Deals Every Week</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            
        </div>

        <div class="box">
            <img src="image/feature-img-3.png" alt="">
            <h3>Easy Payments</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
            
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- search section starts  -->

<section class="search" id="search">

    <h1 class="heading"> Find Your<span>Best Car</span>Rental With<span>RenCar</span> </h1>
    <h1 class="heading">    </h1>

    <div class="box-container">
        <box action ="">
            <div class="box">
                <div class="input-box">                         
                    <span>Location</span>
                    <input type="search" name="" id="" placeholder="Search Places" >
                </div>
                <div class="input-box">
                    <span>Pick-Up Date</span>
                    <input type="date" name="" id="">
                </div>
                <div class="input-box">
                    <span>Return Date</span>
                    <input type="date" name="" id="">
                </div>
            
                <a href="index-old.php" class="btn">Search</a>
            </div>

        </box>

        
    </div>

</section>

<!-- search section ends -->

<!--Review section starts-->

<section class="review" id="review"></section>
<div class="rew">
<h1 class="heading"></h1>
<h1 class="heading">Reviews</h1>

<table id="review" class="container" >
  <tr>
    <th>Username</th>
    <th>Review</th>
  </tr>
  </div>

  <?php
include("connection.php");

$choice="Select * From review ";
$result=$connection->query($choice);

if($result->num_rows>0){
  while($pull=$result->fetch_assoc()){

    echo"
    <tr>
        <td>".$pull['username']."</td>
        <td>".$pull['review']."</td>
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

<!--Review section ends-->

<!-- Contact section starts here..-->



<section class="contact">
    <div class="container">
        <h3>Send A Message</h3>
        



        <form action="SearchCars.php" method ="post" onClick=" >
        <div id="contactOpaque">
            <div id="formgroup">
                <div id="leftform">
                    <input type="text" name="nameSurname" placeholder="Name Surname" required class="form-control">
                    <input type="text" name="phonenumber" placeholder="Phone Number"required class="form-control">
                    <input type="text" name="email" placeholder="E-mail Address" required class="form-control">
                    <input type="text" name="topic" placeholder="Topic Title"required class="form-control">
                </div>
                <textarea name="message" id="" cols="30" placeholder="Please Enter Message" rows="10" required class="form-control"></textarea>
                
                <input type="submit" value="Send" >
            
            </div>
        
    </div>
    </form> 
    </div>
    

</section>

<!--Contact section ends here..-->


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
            <a href="#home" class="links"> <i class="fas fa-arrow-right">Home</i></a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right">Features</i></a>
            <a href="#search" class="links"> <i class="fas fa-arrow-right">Find Your Best Car</i></a>
        </div>

        

    </div>
</section>
<!--footer section ends here..-->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="SearchCarsjs/script.js"></script>

<script
function myreset() { window.open(#home) 
}></script>


    
    

</body>
</html>

<!-- php connection -->
<?php

include("connection.php");

if(isset($_POST['nameSurname'], $_POST['phonenumber'], $_POST['email'], $_POST['topic'], 
$_POST['message'])){
    $nameSurname=$_POST["nameSurname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $topic=$_POST["topic"];
    $message=$_POST["message"];
    
    
    $insert=" INSERT INTO contact (nameSurname, phonenumber, email, topic, 
    message) VALUES 
    ('".$nameSurname."','".$phonenumber."','".$email."','".$topic."','".$message."')";
    
    
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

