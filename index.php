<link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?php
require 'dbconnect.php';
 $query = "SELECT * FROM items";
$query1="SELECT * FROM stores";
 $result = mysqli_query($conn,$query);
 $result1= mysqli_query($conn,$query1);

 echo "<table border ='1'>";
echo "<tbody>";
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
 echo "</table>" ;
 echo "<br>";

 echo "<table border ='2'>";

 while($row = mysqli_fetch_assoc($result1)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";


    echo "<td>" . $row['id_stores'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['original_price'] . "</td>";
    echo "<td>" . $row['discount_prince'] . "</td>";
    echo "<td>" . $row['image'] . "</td>";
     echo "</tr>";


}
  
 echo "</table>" ;








?>