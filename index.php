<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/mobile2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="ExampleProj1.css">
    <script src="ExampleProj1.js" defer></script> -->
    <title>Page 1</title>
</head>

<body>

<header class="header">

    <div class="logo">
        <a href="http://localhost/backend/index.php">
            <span class="dot"></span>
            <h1>Travel</h1>
        </a>
    </div>

    <ul class="navbar">
        <li> <a href="http://localhost/backend/index.php">Main</a></li>
        <li> <a href="#aboutus">About us</a></li>
        <li> <a href="http://localhost/backend/index3.php">Tours</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li> <a href="http://localhost/backend/index2.php">Contacts</a></li>
    </ul>

   

    <div class="search-box">
        <input type="text" class="input-box" placeholder="Search...">
        <span class="search-btn">
          <i class="fa-solid fa-search"></i>
        </span>
     </div>


</header>

<!-- header section ends -->




<!-- home section starts  -->

<section class="home" id="home">

    <div class="home-text">
        
        <h3 >Travel Time</h3>
        <p >Bon't let  noise scare you,<br>
            Let the rhythms of the dance amuze you. <br> 
            You are given a very rare chance<br> 
            Feel  the movement our ancestors </p>
        
    </div>

</section>

<!-- home section ends -->




            <!-- Popular tors starts -->
<section class="populartours" id="#populartours">
    <div class="populartours-text">
        <h3>Popular Tours</h3>
        <p>Lorem ipsum dolor </p>
    </div>

    <div class="populartours-list">
        <div class="col-content">
            <img src="img/img13.jpg" alt="">
            <h3>Tour 1</h3>
            <p>Lorem ipsum dolor</p>

        </div>

        <div class="col-content">
            <img src="img/img13.jpg" alt="">
            <h3>Tour 1</h3>
            <p>Lorem ipsum dolor</p>

        </div>

        <div class="col-content">
            <img src="img/img13.jpg" alt="">
            <h3>Tour 1</h3>
            <p>Lorem ipsum dolor</p>

        </div>
    </div>
    
</section>


     <!-- Popular tors ends -->




       <!-- Videos section starts -->
<section class="videos-section">
    <div class="videos-text">
        <h3 class="title">discover the world in a new way</h3>
        <p class="watchTitle">watch the video</p>

        <p class="citaty">"Attachment to things and comfort is the main obstacle to an interesting life. People, as a rule, do not realize that at any time they can throw anything out of their lives. Anytime. Instantly."</p>

        <p class="author">Carlos Castaneda</p>
    </div>

    <div class="video-container">
        <video src="img/annimation.mp4" muted autoplay loop class="video"></video>
        <div class="controls">
            <span class="control btn" data-src="img/annimation.mp4"></span>
            <span class="control btn" data-src="img/annimation.mp4"></span>
            <span class="control btn" data-src="img/annimation.mp4"></span>
        </div>
        
    </div>
</section>








<!-- banner section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
<div class="box" >
            <div class="logo">
                <a href="ExampleProj1.html"><span class="dot"></span>
                <h1>Travel</h1>
                </a>
            </div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ad?</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

       

        <div class="box" >
            <h3>Contact Us</h3>
            <p>Feel free to contact and reach us !! </p>
            <p> <i class="fas fa-phone"></i> +7 702 222 4141</p>
            <p> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </p>
            <p> <i class="fas fa-clock"></i> 7:00am - 10:00pm </p>
        </div>

        <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe our newsletter for more update & news !! </p>
            <form action="">
                <input type="email" name="" placeholder="Enter your email" class="email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

</section>

<div class="credit">created by <span>team     nmöçfghjk</span> | all rights not  reserved!</div>

<!-- footer section ends -->

<script>
    const header = document.querySelector("header");

window.addEventListener ("scroll", function() {
    header.classList.toggle ("sticky", window.scrollY > 0);
});
</script>



</body>
</html>