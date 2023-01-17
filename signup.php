<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<nav>
    <div><a  href="#"><img class="logo1" src="img/768px-Magicdelivery_gaming_logo.svg.png" alt="logo"></a></div>
</nav>
<div class="cont container-sm">
        <form method="post" action="signup.php" class="row g-3 needs-validation border border-dark rounded">
            <div class="col-md-10">
              <label for="validationCustom01" class="form-label">Enter your email:</label>
              <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="email" name="user_email" class="form-control" id="validationCustom01" value="" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  enter your email.
                </div>
              </div>
            </div>
            <div class="col-md-10">
              <label for="validationCustom02" class="form-label">Make a new password:</label>
              <input type="password" name="user_password" class="form-control" id="validationCustom02" value="" required>
            </div>
            
            <div class="col-12">
              <input type="submit" name="submit" class="btn btn-primary" id="submit" value="signup">  
            </div>
          </form>
</div>
    <?php 
            
             include("connection.php");
             if(isset($_POST['submit'])){
              $email = $_POST['user_email'];
              $password = md5($_POST['user_password']);
             if($conn->connect_error){
             die('conection failed :'.$conn->connect_error);
             echo "error";
             }else{
             mysqli_query($conn,"INSERT INTO `users` (`email`, `password`) VALUES ('$email','$password')");
             header("Location: index.php");
             }
            }
    ?>
<footer class="footer">
        <div class="first">
          <a href="#"><img class="logo" src="img/768px-Magicdelivery_gaming_logo.svg.png" alt="logo"></a>
             <span>Follow us:</span> 
          <div class="social">
            <a href="#"><img style="width: 100%; height:100%;" src="img/insta.png" alt="insta"></a>
            <a href=""><img style="width: 100%; height:100%;" src="img/linkedin.png" alt="linkedin"></a>
            <a href=""><img style="width: 100%; height:100%;" src="img/twitter.png" alt="twitter"></a>
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
        <div style="margin-top: 90px;">
        <marquee direction="right">©copyright 2021-<?php echo date("Y");?></marquee>
        </div>
    </footer>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>