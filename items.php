<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items</title>
</head>
<body>

<?php

require 'dbconnect.php';

// $result1= mysqli_query($conn,$query1);
$id =$_GET['id'];
if (isset($_GET['id']))
{
    $query = "SELECT * FROM stors WHERE id =$id";
    $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_assoc($result);

// $id = $_GET['id'];
// $id_stores = $_POST['id_stores'];
// $name = $_POST['name'];
// $original_price = $_POST['original_price'];
// $discount_prince = $_POST['discount_prince'];
}


// echo "</br>";
// echo "</br>";

// echo "id :" . " $row[id]";
// echo "</br>";

// echo "id stores:". "$row[id_stores]";
// echo "</br>";
// echo  "name item :" ."$row[name]";
// echo "</br>";
// echo  "originel price :"."$row[original_price]";
// echo "</br>";
// echo "discount_prince :" ."$row[discount_prince]";
// echo "</br>";






?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>MY STORES ITEMS </h1>      

  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
    <img src="<?php echo" $row[image]";?>" class="img-responsive" style="width:100%" alt="Image">

    <p> <?php
  
   

      echo "id :" . " $row[ID]"."/";
       

echo "id stores:". "$row[id_stores]"."/"." ";

echo  "name item :" ."$row[Name]"."" ." "." "."<br>";
echo  "originel price :"."$row[Original_price]"."/"." "." ";

echo "discount_prince :" ."$row[discount_price]".""." "." ";






?>
      </p>
  
<!-- 
<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br> -->





    
</body>
</html>