<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.js" defer></script>
</head>
<body>
<nav>
    <div>
        <a href="#"><img class="logo1" src="img/768px-Magicdelivery_gaming_logo.svg.png" alt="logo"></a>
    </div>
</nav>
 <div class="cont container-sm">
        <form method="post" action="index.php" class="row g-3 border border-dark rounded">
            <div class="col-md-10">
              <label for="validationServer02" class="form-label">Email</label>
              <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="email" name="user_email" class="form-control" id="validationServer02" value="" required>
              </div>
            </div>
            <div class="col-md-10">
              <label for="validationServer02" class="form-label">Password</label>
              <input type="password" name="user_password" class="form-control" id="validationServer02" value="" required>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="admin">
                <label class="form-check-label" >admin</label>
            </div>
            <a href="signup.php" style="width: 150px ;" class="user2" >make an accont?</a>
            <div class="col-12">
              <input type="submit" name="submit" class="btn btn-primary" id="submit" value="login">  
            </div>
          </form>
</div>
    <?php 
        include("connection.php");
        if(isset($_POST['submit'])){

            if(isset($_POST['admin'])){
                
                $email = $_POST['user_email'];
                $password = $_POST['user_password'];
                $admin = $conn->prepare("SELECT * FROM `admin` WHERE `email`= ? and `password`= ?");
                $admin->execute([$email,$password]);
                $row =  $admin->fetch();
                if(isset($row)){
                    $_SESSION['admin'] = $email;
                    header("Location: dh.php");
                }else{
                    echo '<div class="user">incorrect</div>';
                }            
            }else{
                $email = $_POST['user_email'];
                $password = $_POST['user_password'];
           
                $sql = "SELECT * FROM `users`";
                $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            if($email == $row["email"] && md5($password) == $row["password"]){
                $_SESSION['user'] = $email;
                $_SESSION['id'] = $row["id"];
                header("Location: home.php");
            }
            }
            echo '<div class="user">user not found</div>';
            }            
            }   
        }
    ?>
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
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
</body>
</html>