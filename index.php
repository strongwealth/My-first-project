<?php
require_once 'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerfull.php';
$sql = "SELECT * FROM products WHERE featured = 1";
$featured =$db->query($sql);
?>

<!--Removing the spaces and center the products-->
<div class="" style="display:flex; justify-content:center">

<!-- main content of featured products-->


<div class="col-md-8">


    <h2 class="text-center">Featured Products</h2>
    <div class="row">


    <?php while ($product = mysqli_fetch_assoc($featured)): ?>

    <div class="col-md-3">
      <h4><?= $product['title']; ?></h4>
      <img src="<?=$product['image']; ?>" alt="<?=$product['title']; ?>" id="images"/>
      <p class="list-price text-danger">List price: <s>$<?=$product['list_price']; ?></s></p>
      <p class="price">Our price:$<?=$product['price']; ?></p>
      <button type="button" class="btn btn-success"onclick="detailsmodal(<?=$product['id'];?>)" id="button">Details</button>
    </div>
<?php endwhile; ?>
</div>
</div>
</div>
</div>






  <!--detail module-->
  <?php
        include 'includes/footer.php';
        ?>
    <!--end of detail modal-->
  </body>
</html>
