<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <title>R&A Website</title>
  </head>
  <body>

  <!---header--->

      <div class="wrapper">
        <div class="header">
          <div>
            <img src="images/logo.png">
          </div>
          <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="resto.php" class="active">RESTAURANT</a></li>
            <li><a href="hotel.php">HOTEL</a></li>
            <li><a href="index.php">HOME</a></li>
          </ul>
        </div>
      </div>


    <!---resto page--->
    <div class="menu-page">
        <h2>MENU</h2>
      </div>

      <div class="container px-4">
      <div class="row gx-4 justify-content-center">
          <div class="col-lg-12 text-center">
                <div class = "container">
                    <img src="images/menu.png" alt="..." width="120" class="rounded mb-2 img-thumbnail">
       <?php
           echo "<h3> DESSERTS</h3>";
           echo "<br/>";

           echo "<p>ICE CREAM</p>";
           echo "<p>APPLE PIE</p>";
           echo "<p>ALMOND CAKE</p>";
           echo "<p>TIRAMISU</p>";
           echo "<p>VANILLA ICE CREAM</p>";
           echo "<p> ICE CREAM CAKE</p>";
           echo "<p>APPLE CINNAMON CUSTARD CAKE</p>";
           echo "<p>CHEESE CAKE</p>";
           echo "<p>COOKIES</p>";
           echo "<p>GELATINE</p>";
           echo "<p>CANDIES</p>";;
           echo "<p>PUDDING</p>";
           echo "<p>MACAROONS</p>";
           echo "<p>HALO-HALO</p>";
           echo "<p>LECHE FLAN</p>";
           echo "<p>TURON</p>";
      ?>

      <div class="button">
        <a href="order.php">ORDER NOW</a>
      </div>



    <div class="footer">
      <p> Copyright by R&A Hotel and Restaurant 2023<br> &copy; All rights reserved </p>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-facebook"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="fab instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-twitter"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-youtube"></i></a>
    </div>  



  </body>
</html>