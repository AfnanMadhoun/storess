<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	

<?php

if (isset($_POST['id'])){


$id = $_POST['id'];
$id_stores = $_POST['id_stores'];
$name = $_POST['name'];
$original_price = $_POST['original_price'];
$discount_prince = $_POST['discount_prince'];
$image = $_POST['image'];


require 'dbconnect.php';

if (!$conn){
    die("Could not connect to database " . mysqli_connect_error());
    

}


$query = "INSERT INTO stores (id, id_stores, name,original_price,discount_prince,image) 
values ('$id', '$id_stores', '$name','$original_price','$discount_prince','$image')";

$result = mysqli_query($conn, $query);



if ($result){
	echo " saved successfully";
}
else{
	echo "Error " . mysqli_error($conn);
}

}
else{
	header("location: storesform.php");
	echo "No data";
}

?>
</body>
</html>