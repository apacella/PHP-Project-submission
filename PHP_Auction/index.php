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
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  
  .carousel-inner > .carousel-item active > img {
  margin: 0 auto;
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
    <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Front Row Free Auction</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Sports</a>
          <a href="#" class="list-group-item">Games</a>
          <a href="#" class="list-group-item">Random items</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <!-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid"  src="biddy.jpeg" alt="First slide">
            </div>
            <!--<div class="carousel-item">
              <img class="d-block img-fluid" height="50" width="550"src="auction_item_one.jfif" alt="Second slide">
            </div>-->
             <!--<div class="carousel-item">
              <img class="d-block img-fluid" height="700" width="350"  src="AllIKnowIsPain.jpg" alt="Third slide">
            </div>-->
          </div>
           <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>-->
           <!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>-->
        </div> <!--end carosel-->

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="auction_item_one.jfif" alt="fuzzy slippers"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Fuzzy Slippers</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">warm your feet with these heavily used fuzzy slippers</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> <!--end item 1-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="AllIKnowIsPain.jpg" alt="Muppet Screams"></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Muppet Screams</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Enjoy the sounds of Kermit! Hear the sweet sound of Beaker as he explodes!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><!--end item 2-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="KidsFireStart.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">My First Fire</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">100% not LEGAL!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> <!--end item 3-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="YouGetADivorce.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Divorce PONCHO</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Show your dominance to others, and tell the world of your freedom!!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> <!--end item 4-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="GoodNight.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">S'nores</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Give these to your kids when mommy needs a break</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><!--end item 4-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="MeaningOfLife.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">The Game of Existence</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Have fun playing the game of not playing a game!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div><!--end item 5-->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
    
    

<!--<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>Fuzzy Slippers</h2>
      <h5>current bid $1,000 by randomweirdo time left 2:00</h5>
      <div class="fakeimg"><img src="auction_item_one.jfif" alt="firsst pic"/></div>
      <p>warm your feet with these heavily used fuzzy slippers</p>													
	<button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
	  
<h2>Muppet Screams</h2>
      <h5>Current bid $2,000,000 by iMustConsume time left 3:36</h5>
      <div class="fakeimg"><img src="AllIKnowIsPain.jpg" alt="poncho" style="height:200px" /></div>
      <p>AAAAAAAAAAAAAHHHHHHHHHHHHHHHHHHHHHHHHHHHH</p>
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
	  
<h2>My First Fire</h2>
      <h5>Current bid $26.87 by noSheDIDNT time left 15:22</h5>
      <div class="fakeimg"><img src="KidsFireStart.jpg" alt="poncho" style="height:200px" /></div>
      <p>100% not LEGAL!</p>
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
     --> <!--  <h3>Some Links</h3>
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
     <!-- <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      
     <h2>Divorce PONCHO</h2>
      <h5>current bid $88.39 by PersonMan</h5>
      <div class="fakeimg"><img src="YouGetADivorce.jpg" alt="poncho" style="height:200px" /></div>
      <p>Show your dominance to others</p>
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
      <br>
      
     <h2>S'nores</h2>
      <h5>current bid $18.99 by reallyNEEDthatbreak</h5>
      <div class="fakeimg"><img src="GoodNight.jpg" alt="poncho" style="height:200px" /></div>
      <p>Give these to your kids when mommy needs a break</p>
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
	   
     <h2>The Game of Existence</h2>
      <h5>current bid $26.09 by ManPerson</h5>
      <div class="fakeimg"><img src="MeaningOfLife.jpg" alt="poncho" style="height:200px" /></div>
      <p>Have fun playing the game of not playing a game!</p>
      <button type="button" class="btn btn-primary" onclick="window.location.href = 'detail-product.html';">Bid now</button>
	  
    </div>

	 <div class="col-sm-4">
    
	  
      <hr class="d-sm-none">
	  
    </div>
  </div>
</div> --><!-- end class container (nav bar) -->


<?php
include 'footer.php';
?>

</body>
</html>