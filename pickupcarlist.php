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
    <link rel="stylesheet" href="carCategorycss/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="SearchCars.php" class="logo"> <i class="fas fa-car"></i> RenCar  </a>

    <nav class="navbar">
        <a href="SearchCars.php">Home</a>
        <a href="managerlogin.php">Manager</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-car" id="cart-btn"></div>
        <div class="fas fa-user" onclick="location.href='loginsignup.html'" id="login-btn"></div>
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
                
                <span class="model">BMW 320i /</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        
       
        <div class="total"> total : $32.69 </div>
        <a href="#" class="btn">Checkout</a>
    </div>
</header>

<!-- header section ends -->




<!--Categories section starts here..-->
    <section class="categories" id="categories">
        <h1 class="heading"><span></span></h1>
        <h1 class="heading"><span>Pickup</span></h1>
        <div class="box-container">

            <div class="box">
                <img src="pickupimage/pickupCar-1.png" alt="">
                <h3>2017 Toyota Hilux</h3>
                <p>$35.99 / Per Day</p>
                <a href="#" class="btn">Hire Now</a>
            </div>
            <div class="box">
                <img src="pickupimage/pickupCar-2.png" alt="">
                <h3>2015 GMC Sierra</h3>
                <p>$85.99 / Per Day</p>
                <a href="#" class="btn">Hire Now</a>
            </div>
            <div class="box">
                <img src="pickupimage/pickupcar-3.png" alt="">
                <h3>2009 Ford F-150</h3>
                <p>$39.99 / Per Day</p>
                <a href="#" class="btn">Hire Now</a>
            </div>

        </div>
    </section>
<!--Categories section ends here..-->

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
            <a href="#" class="links"> <i class="fas fa-arrow-right">Pickup Cars</i></a>
            
        </div>

    </div>
</section>
<!--footer section ends here..-->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="SearchCarsjs/script.js"></script>

</body>
</html>