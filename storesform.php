<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel = "stylesheet" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

	<form action="addstores.php" method="post">
		
		<!-- ID: <input type="text"  class="form-control" name="id" class="form-group" style> </br>
		id_stores: <input class="form-control" type="text" name="id_stores"> </br>
		name: <input  class="form-control" type="text" name="name"> </br>
        original_price: <input class="form-control" type="text" name="original_price"> </br>
		discount_prince: <input class="form-control" type="text" name="discount_prince"> </br>
		image: <input class="form-control" type="text" name="image"> </br>


		<input type="submit" class="btn btn-default" type="submit" name="submit" value="Save stores" />

</form> -->

<div class="container">
 <div class="row">
 <div class="col-md-12">
 <div class="well well-sm">
 <form class="form-horizontal" method="post">
 <fieldset>
 <legend class="text-left header">ADD ITEM:</legend>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
 <div class="col-md-8">
 ID: <input id="fname" name="name" type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
 <div class="col-md-8">
 id_stores:<input id="lname" name="name" type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
 <div class="col-md-8">
 name:<input id="lname" name="name" type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
 <div class="col-md-8">
 original_price: <input id="lname" name="name" type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
 <div class="col-md-8">
 discount_prince: <input id="lname" name="name"  type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
 <div class="col-md-8">
 IMAGE: <input id="phone" name="phone" type="text"  class="form-control">
 </div>
 </div>
 <div class="form-group">
 <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>

 </div>
 <div class="form-group">
 <div class="col-md-12 text-center">
 <button type="submit" class="btn btn-primary btn-lg">ADD</button>
 </div>
 </div>
 </fieldset>
 </form>
 </div>
 </div>
 </div>
   
 </form>
</body>
</html>