<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

	<form action="addstores.php" method="post">
	    <label for="exampleInputEmail1">ID</label>
		 <input class="form-group" type="text" name="id"> </br>
		<label for="exampleInputEmail1">id_stores: </label>
		 <input class="form-group" type="text" name="id_stores"> </br>
	 <label for="exampleInputEmail1">	name:</label>
	  <input class="form-group" type="text" name="name"> </br>
        <label for="exampleInputEmail1">original_price:</label> 
		<input class="form-group" type="text" name="original_price"> </br>
		 <label for="exampleInputEmail1">discount_prince:</label>
		  <input class="form-group"  type="text" name="discount_prince"> </br>
	 <label for="exampleInputEmail1">	image:</label> 
	 <input class="form-group" type="text" name="image"> </br>


		<!-- <input type="submit" name="submit" value="Save stores" /> -->
		<button type="button" class="btn btn-primary">Save stores</button>


   

	</form>

</body>
</html>