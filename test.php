<?php session_start();
// if ($_SESSION['user'] == null) {
//   header("location: index.php");
// }


include("connection.php");
$sql = "SELECT p.`id-product` as id, p.img ,p.label as name ,p.price, p.quantity,c.label FROM `products` p , `category` c  WHERE c.id = p.`id-category`;";
$result = $conn->query($sql);
header("Content-Type: application/json");
echo json_encode($result->fetch_all(MYSQLI_ASSOC));
