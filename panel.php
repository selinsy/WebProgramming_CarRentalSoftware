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
    <link rel="stylesheet" href="panelcss/style.css">

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
      
     
      
      <a href="panel.html" class="btn">Close</a>

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
<!--Message section starts-->

<section class="messages" id="messages"></section>

<h1 class="heading"></h1>
<h1 class="heading"> Customers'<span>Message</span> </h1>

<table id="customers">
  <tr>
    <th>Name Surname</th>
    <th>Phone Number</th>
    <th>E-Mail Address</th>
    <th>Topic Title</th>
    <th>Message</th>
  </tr>

  <?php
include("connection.php");

$choice="Select * From contact";
$result=$connection->query($choice);

if($result->num_rows>0){
  while($pull=$result->fetch_assoc()){

    echo"
    <tr>
        <td>".$pull['nameSurname']."</td>
        <td>".$pull['phonenumber']."</td>
        <td>".$pull['email']."</td>
        <td>".$pull['topic']."</td>
        <td>".$pull['message']."</td>
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
            <a href="managerPage.php" class="links"> <i class="fas fa-arrow-right">Manager Home Page</i></a>
          
          
      </div>

      

  </div>
  
</section>
<!--footer section ends here..-->


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="managerjs/script.js"></script>

</body>
</html>




