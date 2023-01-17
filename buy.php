<?php

$id = $_POST["id"];
include("connection.php");
$sql = "SELECT * FROM products as p WHERE p.`id-product` = $id ;"; 

$result = $conn->query($sql);

if($result->num_rows > 0){
    $qtty = $result->fetch_assoc()["quantity"];
    $qtty--;
    if ( $qtty >= 0 ) {
        $sql2 = "UPDATE products SET quantity = $qtty where products.`id-product` = $id;";
        $result2 = $conn->query($sql2);
        echo "done";
    }else{
        echo "not enough qtyy";
    }
}
else{
    echo "error, not found";
}

$conn->close();
exit();
?>