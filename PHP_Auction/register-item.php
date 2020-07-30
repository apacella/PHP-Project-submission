<!DOCTYPE html>
<html lang="en">
<head>
<!--   
    
    CIS project
    Authors: Anthony Pacella, Emir Kaynak, Preston Pryer,
    Date:   12/9/2019

   
   -->
  <title>Front Row Free Auction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<?php
include 'header.php';
?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="list-auctions.php">Products</a>
      </li>  
	  <li class="nav-item">
        <a class="nav-link" href="register-item.php">add new product</a>
      </li>	  
      <li class="nav-item">
        <a class="nav-link" href="login.php">Sign In</a>
      </li> 
	   <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>	   	  
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
   <div class="card">
    <!-- <div class="card-body"> -->
      <h4 class="card-title">Add a new product</h4>      
<!--   <div class="form-group row">     -->
<form action="display_discount.php" method="post"> 

	<div class="col-sm-9">
	
		<label>Product Description:</label> 
		<input type="text" name="product_description"><br> 
		
		<label>Start Price:</label> 
		<input type="text" name="startPrice"><br> 
		
		<label>Bid Increment</label> 
		<input type="text" name="bidIncrement"><span></span><br>
		
		<label>Starting time </label> 
		<input type="text" name="startingTime"><span></span><br>
		
		<label>Ending time</label> 
		<input type="text" name="endingTime"><span></span><br>
		
		<label>Total Inventory </label> 
		<input type="text" name="inventoryCount"><span></span><br>
		
	</div> 
	<!-- <div class="form-group row"> -->
		<div class="col-sm-10">
	<label>&nbsp;</label>
	<input type="submit" value="Register a new product"><br> <!-- <input type="submit" value="Clear Form"><br>   -->
		</div>
	<!-- </div> -->
	<!-- <div class="form-group row"> -->
		<div class="col-sm-10 ">
	<label>&nbsp;</label>
	<input type="submit" value="Clear Form"><br> 
		</div>
	<!-- </div> -->
</form>	<!-- registration form end -->
  <!-- </div> -->
  <!-- <div class="form-group row">
    <div class="col-sm-10 offset-sm-2">
      <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#RegisterThanks">Register</button>
    </div>
  </div> -->

   <!--  </div> -->
  </div> <!-- adds border around the registration -->
</div> <!-- end class container (nav bar) -->


<?php
include 'footer.php';
?>

</body>
</html>