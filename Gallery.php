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
    <link rel="stylesheet" href="Style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      .username {
        position: relative;
        top: 10px;
        left: 1%;
        color: white;
        font-size: 17px;
      }
    </style>
</head>
<body>
  <nav class="n">
    <div><a href="home.php"><img src="img/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a></div>
    <div>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="Gallery.php">Gallery</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    <div style="width: 40%; display: flex; justify-content: center; justify-content: space-around; padding-top:5px ">
      <div class="username"><?php echo $_SESSION['user']?></div>
      <a href="disconnect.php" class="disconnect">disconnect</a>
      <img id="icon" src="img/shopping-cart-30.png" alt="icon" onclick="toggle()">
      <img id="icon0" src="img/close-window-16.png" alt="icon" onclick="toggle0()">
    </div>
  </nav>   
  <div class="carte">
    <div class="cnt">
      <div id="bill"></div>
      <div class="cnt1" >The Total : <span id="total"></span><a class="button1" onclick="order()">Confirm</a></div>
    </div>
  </div>
  <section class="container2">
   <div style="width: 400px ;">
    <h1 class="log2"  style="font-size: 80px; color:rgb(255, 255, 255);">Playtech</h1>
    <h3 style="font-size: 20px; color:rgb(255, 255, 255);padding-left: 30%;padding-bottom: 10%;" >No Game no Life</h3> 
    </div>
  </div>
   <div>
   <img style="width: 100%; height: auto;" src="img/Dualsense-PS5-2-removebg-preview.png" alt=""></div>
  </section>
  <section>
    <div class="containerz">
     <?php 
       include "connection.php";
       $sql="SELECT * FROM `products`";
       $resultat = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_assoc($resultat)){
       $id=$row["id-product"];
     ?>
     <div class="box">
      <div><img style="width: 130px;" src="<?php echo $row["img"] ?>" alt="img"></div>
      <div class="buy"><span class="show"><?php echo $row["price"] ?> DH</span><button onclick="buy(<?php echo $id?>)">buy</button></div>
     </div>
     <?php 
       }
     ?>
    </div>   
 </section>
 
   <section>
   
    <h1 class="log2"  style="font-size: 40px; color:rgb(255, 255, 255);">Store Brands</h1><div class="container4">
     <img class="MM" style="width: 150px; height: 150px;" src="img/ea-symbole.jpg" alt="">
     <img class="MM" style="width: 150px ;height: 150px;" src="img/amd-logo-amd-letter-amd-letter-logo-design-initials-amd-logo-linked-with-circle-and-uppercase-monogram-logo-amd-typography-for-technology-business-and-real-estate-brand-vector.jpg" alt="">
     <img class="MM" style="width: 150px ;height: 150px;" src="img/badc4ca034b41237d814368fe473eed1.png" alt="">
     <img class="MM" style="width: 150px ;height: 150px;" src="img/modele-logo-scorpion-creatif-dessine-main_23-2149193540.webp" alt="">
     <img class="MM" style="width: 150px ;height: 150px;" src="img/xbox-logo-cover.jpg" alt=""></div>
      
       
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
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>