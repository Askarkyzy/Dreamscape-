<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mobile4.css">
    <link rel="stylesheet" href="css/style4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="img/icons8-plane-24.png">

<script src="contacts.js" defer></script>
    <title>Page 2</title>
<body>
    <header class="header">

    <div class="fas fa-bars" id="menu-btn"></div>

    <div class="logo">
        <a href="http://localhost/backend/index.php">
            <span class="dot"></span>
            <h1>Dreamscape</h1>
        </a>
    </div>


    <ul class="navbar">
        <li> <a href="http://localhost/backend/index.php">Main</a></li>
        <li> <a href="aboutus.html">About us</a></li>
        <li> <a href="#tours">Tours</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li> <a href="#contacts">Contacts</a></li>
    </ul>

   

    <div class="search-box">
        <input type="text" class="input-box" placeholder="Search...">
        <span class="search-btn">
          <i class="fa-solid fa-search"></i>
        </span>
    </div>


</header>


      <section class = "contact-bg">
        <h3>Get in Touch with Us</h3>
        <h2>contact us</h2>
        <div class = "line">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <p class = "text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste</p>
      </section>


      <section class = "contact-body">
        <div class = "contact-info">
          <div>
            <span><i class = "fas fa-mobile-alt"></i></span>
            <span>Phone No.</span>
            <span class = "text">1-2392-23928-2</span>
          </div>
          <div>
            <span><i class = "fas fa-envelope-open"></i></span>
            <span>E-mail</span>
            <span class = "text">mail@company.com</span>
          </div>
          <div>
            <span><i class = "fas fa-map-marker-alt"></i></span>
            <span>Address</span>
            <span class = "text">2939 Patrick Street, Vicotria TX, United States</span>
          </div>
          <div>
            <span><i class = "fas fa-clock"></i></span>
            <span>Opening Hours</span>
            <span class = "text">Monday - Friday (9:00 AM to 5:00 PM)</span>
          </div>
        </div>

        <div class = "contact-form">
          <form action="connect.php" method = "post">
            <div>
              <input type = "text" class = "form-control" placeholder="First Name">
              <input type = "text" class = "form-control" placeholder="Last Name">
            </div>
            <div>
              <input type = "email" class = "form-control" placeholder="E-mail">
              <input type = "text" class = "form-control" placeholder="Phone">
            </div>
            <textarea rows = "5" placeholder="Message" class = "form-control"></textarea>
            <input type = "submit" class = "send-btn" value = "send message">
          </form>

          <div>
            <img src = "img/kyle-johnson-Aq7id0ZjEW4-unsplash.jpg" alt = "">
          </div>
        </div>
      </section>

      <section class = "map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d223700.1490386933!2d-97.11558670486288!3d28.829485511234168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864266db2e2dac3b%3A0xeee20d566f63267d!2sVictoria%2C%20TX%2C%20USA!5e0!3m2!1sen!2snp!4v1604921178092!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </section>
      <div class="credit">created by <span>team     nmöçfghjk</span> | all rights not  reserved!</div>  

      <script>
        const header = document.querySelector("header");


        window.addEventListener ("scroll", function() {
        header.classList.toggle ("sticky", window.scrollY > 0);
});


        let navbar = document.querySelector('.header .navbar');

        document.querySelector('#menu-btn').onclick = () =>{
        navbar.classList.toggle('active');
}
      </script>

  </body>
</html>