<!DOCTYPE html>
<html lang="en">
<head>
<!--   
    
    CIS project
    Authors: Anthony Pacella, Emir Kaynak, Preston Pryer, Delani Hall
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
  <div class="row">
    <div class="col-sm-4">
      <h2>Snores</h2>
      <h5>current bid $53.69 by outbiddinyou</h5>
      <h5>50 items left</h5>
      <div class="fakeimg"><img src="GoodNight.jpg" alt="poncho" style="height:200px" /></div>
      <p>do you have trouble sleeping? craving dessert? this all in one desert contains an absurd amount of sleeping pills! get dreaming kids!</p>
	  
	  <h2>Divorced Poncho</h2>
      <h5>current bid $53.69 by outbiddinyou</h5>
      <h5>50 items left</h5>
      <div class="fakeimg"><img src="YouGetADivorce.jpg" alt="poncho" style="height:200px" /></div>
      <p>are you newly single? let the world know you of you new found and probably unwanted freedom. perfect on that rainy day! or even on a sunny day!</p>
     <!--  <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul> -->
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Muppet Screams</h2>
      <h5>current bid $53.69 by outbiddinyou</h5>
      <h5>50 items left</h5>
      <div class="fakeimg"><img src="AllIKnowIsPain.jpg" alt="poncho" style="height:200px" /></div>
      <p>current bid $53.69 by outbiddinyou</p>
      <p>wakka wakka! get these one of a kind muppet screams featuring Ms piggy, kermet and all your other loveable Jim Henson characters! gathered in probably the least humane way possible!</p>
      <br>
      
      <h2>My First Fire</h2>
      <h5>Posted Sep 2, 2017</h5>
      <h5>50 items left</h5>
      <div class="fakeimg"><img src="KidsFireStart.jpg" alt="poncho" style="height:200px" /></div>
      <p>current bid $53.69 by outbiddinyou</p>
      <p>hey kids!! do you like fire? well impress youre family and friends with the My first Fire kit! only slightly used and no longer under the evidence lock up!</p>
	  
	  
    </div>
	 <div class="col-sm-4">
      <h2>The Game of Existence</h2>
      <h5>current bid $53.69 by outbiddinyou</h5>
      <h5>50 items left</h5>
      <div class="fakeimg"><img src="MeaningOfLife.jpg" alt="poncho" style="height:200px" /></div>
      <p>Tired of the game known as life? wanna add more to your life of boardgames? well look no further! this has it all...except a few of the pieces i cant seem to find</p>
      <!-- <h3>Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul> -->
      <hr class="d-sm-none">
    </div>
  </div>
</div> <!-- end class container (nav bar) -->


<?php
include 'footer.php';
?>

</body>
</html>