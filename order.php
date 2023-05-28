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
            <li><a href="resto.php">RESTAURANT</a></li>
            <li><a href="hotel.php" class="active">HOTEL</a></li>
            <li><a href="index.php">HOME</a></li>
          </ul>
        </div>
      </div>


    <!---reservation form--->
      <div class="form-container">
        <h2>Order Form</h2>
        <form>

          <div class = "form-row">
            <input type ="text" placeholder="List of Your Order"><input type ="text" placeholder="Email Account"><input type ="text" placeholder="Full Name">
            </div>

          <div class = "form-row">
            <input type ="number" placeholder="Quantity" min = "1">
          </div>

          <div class="form-row">
            <select name = "Reserve Table">
              <option value = "table-select">Select Table</option><option value = "list">Single Dining Tables</option><option value = "list">Dating Tables</option><option value = "list">Two to Four Person Tables</option><option value = "list">Family Dining Table</option><option value = "list">Bar Height Tables</option><option value = "list">Booths</option><option value = "saturday">Outdoor Tables</option>
            </select>


          </div>

          <div class="button">
            <a href="response1.php">SUBMIT</a>
          </div>


        </form>


    <div class="footer">
      <p> Copyright by R&A Hotel and Restaurant 2023<br> &copy; All rights reserved </p>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-facebook"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="fab instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-twitter"></i></a>
      <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"><i class="bi bi-youtube"></i></a>
    </div>  



  </body>
</html>