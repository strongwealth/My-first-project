<!DOCTYPE html>
<html>
<head>
  <title>Red Stone Shop</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1,user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="/tutorial/index.php" class="navbar-brand" id="text">Red Stone Shop</a>
    <ul class="nav navbar-nav">
      <!--Drop down menu-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Shirts</a></li>
          <li><a href="#">Pants</a></li>
          <li><a href="#">Shoes</a></li>
          <li><a href="#">Accessories</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<!-- Creating Images-->
<div id="background-image">
  <div id="image-1">
    <div id="image-2">
    </div>
  </div>
</div>


<!--Removing the spaces and center the products-->

<div class="" style="display:flex; justify-content:center">

<!-- main content of featured products-->
  <div class="col-md-9">

    <h2 class="text-center">Featured Products</h2>
    <div class="row">
    <div class="col-md-3">
      <h4>Levis jeans</h4>
      <img src="images/trouser.jpg" alt="Levis jeans" id="images"/>
      <p class="list-price text-danger">List price: <s>$24.99</s></p>
      <p class="price">Our price: $19.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Addidas Football</h4>
      <img src="images/addidas.jpg" alt="Addidas Football" id="images"/>
      <p class="list-price text-danger">List price: <s>$39.99</s></p>
      <p class="price">Our price: $29.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Watch</h4>
      <img src="images/rolex.jpg" alt="Watch" id="images"/>
      <p class="list-price text-danger">List price: <s>$20.99</s></p>
      <p class="price">Our price: $17.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Polo Shirt</h4>
      <img src="images/polo.jpg" alt="Polo Shirt" id="images"/>
      <p class="list-price text-danger">List price: <s>$54.99</s></p>
      <p class="price">Our price: $19.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Head Band</h4>
      <img src="images/band.jpg" alt="Head Band" id="images"/>
      <p class="list-price text-danger">List price: <s>$20.99</s></p>
      <p class="price">Our price: $15.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Shoes</h4>
      <img src="images/jordan.jpg" alt="Shoes" id="images"/>
      <p class="list-price text-danger">List price: <s>$24.99</s></p>
      <p class="price">Our price: $19.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
    </div>

    <div class="col-md-3">
      <h4>Tennis ball</h4>
      <img src="images/tennis.jpg" alt="Tennis ball" id="images"/>
      <p class="list-price text-danger">List price: <s>$50.99</s></p>
      <p class="price">Our price: $15.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
    </div>


    <div class="col-md-3">
      <h4>Bag</h4>
      <img src="images/bag.jpg" alt="Bag" id="images"/>
      <p class="list-price text-danger">List price: <s>$30.99</s></p>
      <p class="price">Our price: $20.99</p>
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
    </div>
  </div>
</div>
</div>
  <footer class="text-center" id="footer">&copy; Copyright 2019-2020 Red Stone shop</footer>
  </body>

</html>
