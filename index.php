<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   

<?php
require 'dbconnect.php';
 $query = "SELECT * FROM items";
$query1="SELECT * FROM stores";
 $result = mysqli_query($conn,$query);
 $result1= mysqli_query($conn,$query1);

 echo "<table border ='1' class='table'>";

echo "<thead class='thead-black'>";
echo "<tbody>";
echo "<th scope='col'>ID</th>";
echo "<th scope='col'>NAME</th>";
echo "<th scope='col'>ADDRESS</th>";
echo "<th scope='col'>ITEMS</th>";
echo "<th scope='col'>ADD</th>";
 while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr scope='row'>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    $id = $row['id'];
    echo "<td><a href='items.php?id=$id'>items </a></td>";
    echo "<td><a href='storesform.php?id=$id'> add</a></td>";
     echo "</tr>";


}
//  echo "</table>" ;
//  echo "<br>";

//  echo "<table border ='2'>";

//  while($row = mysqli_fetch_assoc($result1)){
//     echo "<tr>";
//     echo "<td>" . $row['id'] . "</td>";


//     echo "<td>" . $row['id_stores'] . "</td>";
//     echo "<td>" . $row['name'] . "</td>";
//     echo "<td>" . $row['original_price'] . "</td>";
//     echo "<td>" . $row['discount_prince'] . "</td>";
//     echo "<td>" . $row['image'] . "</td>";
//      echo "</tr>";


// }
  
//  echo "</table>" ;








?>






   
   

    
 
</body>
</html>