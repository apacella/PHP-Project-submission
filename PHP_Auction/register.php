<!DOCTYPE html>
<html lang="en">
<head>
<!--   
    
    CIS project
    Authors: Anthony Pacella, Emir Kaynak, Preston Pryer,Delani Hall
    Date:   12/9/2019

   
   -->
  <title>Front Row Free Auction</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    <div class="card-body">
      <h4 class="card-title">Registration</h4>
	  
      <form action = "showCase.php" method = "post" >
  
    <div class="form-group row">
        
		<!-- FIRST Name -->
    <div class="col-sm-9">
    <label class="col-sm-3" >First Name </label>
    
      <input type="text" name = "firstName" required>
    </div>
	
		<!-- LAST Name -->
    <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">Last Name</label>    
      <input type="text" name = "lastName" required>
    </div>
              <!-- userName -->  
     <div class="col-sm-9">
        <label  class="col-sm-3 col-form-label">User Name</label>    
      <input type="text" name = "userName" required>
    </div>
	
		<!-- EmailAddress -->
     <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">Email</label>    
      <input type="email" name = "email" required>
    </div>
	
		<!-- PhoneNumber -->
      <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">Phone</label>    
      <input type="text" name = "phoneNumber" required>
    </div>
	
		<!-- PassWord -->
     <div class="col-sm-9">
       <label class="col-sm-3 col-form-label">Password</label>    
      <input type="password" name = "password" required>
    </div>
	
		<!-- Confirm PassWord -->
     <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">Confirm Password</label>    
      <input type="password" name = "confirmPassword" required>
    </div>
	
		<!-- Address -->
    <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">Address</label>    
      <input type="text" name = "address" required>
    </div>
	
		<!-- City -->
    <div class="col-sm-9">
        <label class="col-sm-3 col-form-label">City</label>    
      <input type="text" name = "city" required>
    </div>
	
		<!-- State -->
    <div class="col-sm-9">
	<label class="col-sm-3 col-form-label">State</label>    
      <input type="text" name = "state" required>
    </div>
	
		<!-- Zip Code -->
    <div class="col-sm-9">
	<label  class="col-sm-3 col-form-label">Zip Code</label>    
      <input type="text" name = "custZip" required>
    </div>
  </div>
  
  <!-- <div class="form-group row"> -->
  <div class="col-sm-8">
        <label  class="col-sm-3 col-form-label">Role</label>
  <select name="role">
      <option value="Admin">Admin</option>
      <option value="User" selected>User</option>
      
      
  </select>
      <br />
      <input class="btn btn-primary" type="submit" value = "Register" ></input> <input class="btn btn-primary" type="reset" value="Clear Form" />
    </div>
  
  <!-- </div> -->
</form>
    </div>
  </div>
</div> <!-- end class container (nav bar) -->


<?php
include 'footer.php';
?>

</body>
</html>