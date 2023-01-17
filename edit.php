<?php
include "connection.php";
$ID=$_GET['id-product'];

if (isset($_POST['submit'])) {
    $nom = isset($_POST["name"]) ? $_POST["name"] : null;
    $price = isset($_POST["price"]) ? $_POST["price"] : null;
    $qanti = isset($_POST["qte"]) ? $_POST["qte"] : null;
    
      $sql ="UPDATE `products` SET `label`='$nom',`quantity`=$qanti,`price`=$price   WHERE `id-product`=$ID" ;
      $resultat = mysqli_query($conn,$sql);
      if ($resultat) {
        header("Location:dh.php?msg=edited in id:$ID");
      }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD APP</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <script src="/bootstrap-5.2.2-dist/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div><a href="#"><img src="images/768px-Magicdelivery_gaming_logo.svg.png" alt=""></a></div>
        <div>
            <ul>
                <li><a href="#" style="color:#ffffffff ;text-decoration: none;">GESTIONNE PAGE</a></li>
            </ul>

        </div>
            </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3 class="log2" style="color:#ffffffff ;">Edit Product</h3>
        </div>
        <?php
         
         $sql="SELECT * FROM `products` WHERE `id-product` =$ID LIMIT 1";
         $resultat = mysqli_query($conn,$sql);
         $row = mysqli_fetch_assoc($resultat);
          
        ?>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px ;" enctype="multipart/form-data">
                <div class="row">
                    <div class="row">
                        <label style="color:#ffffffff ;" class="log">Product Name</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $row['label'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:#ffffffff ;">quantite</label>
                        <input type="text" class="form-control" name="qte" value="<?php echo $row['quantity'] ?>">
                    </div>
                    <div class="row">
                        <label class="log" style="color:#ffffffff ;">Product Price</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>">
                    </div>
                </div>
                <div class="ret col">
                    <div class="sub">
                    <button type="submit" class="btn btn-success m-1" name="submit">Save</button>
                    <a href="dh.php" class="btn btn-danger m-1">Cancel</a>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2
.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>