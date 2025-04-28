<?php include 'header.php' ?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-5">
        <div class="card">
          <div class="card-header">
            <input type="image" src="assets/images/<?php echo $details['image'] ?>" alt=""
              style="height: 350px; width: 350px;">
          </div>
          <div class="card-body">
            <h3><?php echo $details['product_name'] ?></h3>
            <h6>Category: <?php echo $details['category_name'] ?></h6>
            <h6>Price: <?php echo $details['price'] ?></h6>
            <h6>Details: <?php echo $details['description'] ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php' ?>