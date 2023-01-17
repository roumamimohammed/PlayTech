<?php
  session_start();
  if($_SESSION['user']==null){
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playtech</title>
    <link rel="stylesheet" href="style.css">
   <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="script.js" defer></script>
</head>
<body>
  <nav class="n">
    <div ><a href="home.php"><img src="img/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a></div>
    <div>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="Gallery.php">Gallery</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    <div style="width: 30%; display: flex; justify-content: center; justify-content: space-around; align-items: center; ">
      <div class="username"><?php echo $_SESSION['user']?></div>
      <a href="disconnect.php" class="disconnect">disconnect</a>
    </div>
  </nav>  
  <section class="container2">
   <div style="width: 400px ;">
    <h1 class="log2"  style="font-size: 80px; color:rgb(255, 255, 255);">Playtech</h1>
    <h3 style="font-size: 20px; color:rgb(255, 255, 255);padding-left: 30%;padding-bottom: 10%;" >No Game no Life</h3>      
    </div>
  </div>

   <div><img style="width: 100%; height: auto;" src="img/Dualsense-PS5-2-removebg-preview.png" alt=""></div>

  </section>
  <section class="sas">
   
    <div class="container">
     <h1 class="log"  style="font-size: 40px; color:rgb(255, 255, 255);">Store Promo</h1>
     
     <div class="box">
      <div><img style="width: 160px;height: 150px;" src="img/DESKTOP-PC-GAMER-MAG-CODEX-5-I7-11TH-RTX-3070-MSI.png" alt=""></div>
      <div><span class="show">900$</span></div>
     </div>
     
     <div class="box">
       <div><img style="width: 120px ;height: 150px;" src="img/console-right_@1x.webp" alt=""></div>
       <div><span class="show">90$</span></div>
     </div>
     
     <div class="box">
      <div><img style="width: 120px ;height: 150px;" src="img/74bwr5adyb-nox_hummer_nova_specs.webp" alt=""></div>
      <div><span class="show">1000$</span></div>
     </div>
    </div>   
 </section>
 
 <section class="sas">

  <div class="container3">
    
   <div class="box1">
    <div><img style="width: 160px;height: 150px;" src="img/15870086065413.webp" alt=""></div>
    <div><span class="show">BUMA</span></div>
   </div>
   <div class="box1">
     <div><img style="width: 120px ;height: 150px;" src="img/6458565.png" alt=""></div>
     <div><span class="show">HEROBOO</span></div>
   </div>
   <div class="box1">
    <div><img style="width: 120px ;height: 150px;" src="img/modele-logo-scorpion-creatif-dessine-main_23-2149193540.webp" alt=""></div>
    <div><span class="show">XBOX 1</span></div>
   </div>
   <h1 class="log1"  style="font-size: 40px; color:rgb(255, 255, 255);">New Product</h1>
  </div>   
</section>
<section class="sas">
   <div class="container4">
   <h1 class="log2" id="log2" style="font-size: 40px; color:rgb(255, 255, 255);">Store Brands</h1>
    <img class="MM" style="width: 150px;height: 150px;" src="img/ea-symbole.jpg" alt="">
    <img class="MM" style="width: 150px ;height: 150px;" src="img/amd-logo-amd-letter-amd-letter-logo-design-initials-amd-logo-linked-with-circle-and-uppercase-monogram-logo-amd-typography-for-technology-business-and-real-estate-brand-vector.jpg" alt="">
    <img class="MM" style="width: 150px ;height: 150px;" src="img/badc4ca034b41237d814368fe473eed1.png" alt="">
    <img class="MM" style="width: 150px ;height: 150px;" src="img/modele-logo-scorpion-creatif-dessine-main_23-2149193540.webp" alt="">
    <img class="MM" style="width: 130px ;height: 130px;" src="img/xbox-logo-cover.jpg" alt=""></div>
     
</section>
<section class="sas">
   
  <div class="containerr">
   
  <video class="zz" style="border-radius: 10px; box-shadow: #333;" src="https://media.direct.playstation.com/is/content/sierialto/dualsense-edge-ps5-controller-features-trailer" width="50%" height="auto" autoplay controls muted  >
    </video> 
   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.6998908787173!2d-9.237275085737073!3d32.29304571581311!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYouCode%20Safi!5e0!3m2!1sfr!2sma!4v1668456590795!5m2!1sfr!2sma"  width="95%" height="auto" style="border:0; border-radius: 4%; box-shadow: 0px 3px 8px #333;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   </div>

  </div>
     
</section>
<footer class="footer">
  <div class="first">
    <a href="#"><img class="logo" src="img/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a>
       <span>Follow us:</span> 
    <div class="social">
      <a href="#"><img style="width: 70%;padding: 2%; height: auto;" src="img/linkedin.png" alt="insta"></a>
      <a href=""><img style="width: 70%;padding: 2%; height: auto;" src="img/insta.png" alt="linkedin"></a>
      <a href=""><img style="width: 70%;padding: 2%;height: auto;" src="img/twitter.png" alt="twitter"></a>
    </div>   
    
  </div>
  <div class="second">
    <span>contact us :</span>
    <div class="contact">
    <p style="color:rgb(0, 109, 139) ;  margin-bottom: 0px;">Phone : 0649239990</p>
    <p style="color:rgb(0, 109, 139) ;  margin-bottom: 0px;">Email : playtech@gmail.com</p>
    </div>
  </div>
  <div class="therd">
    <span >Categories</span>
    <p style="color:rgb(0, 109, 139) ; margin-bottom: 0px;"> war game</p>
    <p style="color:rgb(0, 109, 139) ; margin-bottom: 0px;"> soocer game</p>
    <p style="color:rgb(0, 109, 139) ; margin-bottom: 0px;"> racing game</p>
  </div>
  <div class="copyr">
    <marquee direction="right">©copyright 2021-<?php echo date("Y");?></marquee>
  </div>
</footer>
</body>
</html>