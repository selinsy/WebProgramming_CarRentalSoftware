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

    <a href="SearchCars.html" class="logo"> <i class="fas fa-car"></i> RenCar </a>

    <nav class="navbar">
        <a href="SearchCars.html">Home</a>
        <a href="managerlogin.html">Manager</a>
    </nav>

    <div class="icons">
        
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-bell" id="cart-btn"></div>
        <div class="fas fa-user" onclick="location.href='loginsignup.html'" id="login-btn"></div>
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
                
            
            </div>
        </box>
        
    </div>
    
    
</section>

<!-- search section ends -->

<!--blogs section starts here..-->

<section class="blogs" id="blogs">
    <h1 class="heading">Past<span>Rental</span>History</h1>
    <div class="box-container">

        <div class="box">
            <img src="image/product-30.png" alt="">
            <div class="content">
                <div class="icons">
                    
                    <a href="#"> <i class="fas fa-calendar"></i>21st April 2019</a>
                </div>
                <h3>Brand/Model : 2016 BMW 320i</h3>
                <p>Lorem ipsum dolor sit, amet consectur adipisicin elit
                    Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur</p>
                    
            </div>
            
        </div>
        <div class="box">
            <img src="limousineimage/limousineCar-3.png" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i>21st April 2018</a>
                </div>
                <h3>Brand/Model : 2019 GMC Yukon XL</h3>
                <p>Lorem ipsum dolor sit, amet consectur adipisicin elit
                    Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur</p>
                    
            </div>
        </div>
        <div class="box">
            <img src="suvimage/suvCar-1.png" alt="">
            <div class="content">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i>21st April 2017</a>
                </div>
                <h3>Brand/Model : 2019 Hyundai Tucson</h3>
                <p>Lorem ipsum dolor sit, amet consectur adipisicin elit
                    Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur</p>
                    
            </div>
            
        </div>
        

    </div>
    
</section>


<!--Past section ends here..-->

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
            <a href="#blogs" class="links"> <i class="fas fa-arrow-right">My Past Rental History</i></a>
        </div>

    </div>
</section>
<!--footer section ends here..-->

<!-- custom js file link  -->
<script src="managerjs/script.js"></script>

</body>
</html>

