<?php

require 'dbconnect.php';

// $result1= mysqli_query($conn,$query1);
$id =$_GET['id'];
if (isset($_GET['id']))
{
    $query = "SELECT * FROM stores WHERE id =$id";
    $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);

// $id = $_GET['id'];
// $id_stores = $_POST['id_stores'];
// $name = $_POST['name'];
// $original_price = $_POST['original_price'];
// $discount_prince = $_POST['discount_prince'];
}


echo "</br>";
echo "</br>";

echo "id :" . " $row[id]";
echo "</br>";

echo "id stores:". "$row[id_stores]";
echo "</br>";
echo  "name item :" ."$row[name]";
echo "</br>";
echo  "originel price :"."$row[original_price]";
echo "</br>";
echo "discount_prince :" ."$row[discount_prince]";
echo "</br>";






?>