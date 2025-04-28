<?php include 'header.php' ?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <?php foreach ($products as $product) { ?>
        <div class="col-md-4 mt-5">
          <div class="card">
            <div class="card-header">
              <input type="image" src="assets/images/<?php echo $product['image'] ?>" alt=""
                style="height: 350px; width: 350px;">
            </div>
            <div class="card-body">
              <h3><?php echo $product['product_name'] ?></h3>
              <h6>Price: <?php echo $product['price'] ?></h6>
              <a href="action.php?page=details&id=<?php echo $product['id'] ?>" class="btn btn-primary">Details</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>