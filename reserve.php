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
        <h2>Reservation Form</h2>
        <form>
          <div class="form-row">
            <select name = "days">
              <option value = "day-select">Select day</option><option value = "sunday">Sunday</option><option value = "monday">Monday</option><option value = "tuesday">Tuesday</option><option value = "wednesday">Wednesday</option><option value = "thursday">Thursday</option><option value = "friday">Friday</option><option value = "saturday">Saturday</option>
            </select>

            <select name = "hours">
              <option value = "hour-select">Select Hour</option><option value = "10">10hrs</option><option value = "10">12hrs</option><option value = "10">14hrs</option><option value = "10">16hrs</option><option value = "10">18hrs</option><option value = "10">20hrs</option><option value = "10">22hrs</option>
            </select>
          </div>

          <div class = "form-row">
            <input type ="text" placeholder="Full Name"><input type ="text" placeholder="Email Account">
          </div>

          <div class = "form-row">
            <input type ="number" placeholder="How Many Persons?" min = "1">
          </div>
          
          <div class="button">
            <a href="response.php">BOOK NOW</a>
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