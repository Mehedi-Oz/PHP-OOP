<?php include 'header.php' ?>


<section class="mt-5">
  <div class="container">
    <div class="row">
      <?php foreach ($students as $student) { ?>
        <div class="col-md-4 mt-5">
          <div class="card">
            <div class="card-header">
              <img src="assets/images/<?php echo $student['image'] ?>" style="height: 350px; width: 350px;">
            </div>
            <div class="card-body">
              <h3>Name: <?php echo $student['student_name'] ?></h3>
              <h6>Email: <?php echo $student['email'] ?></h6>
              <a href="action.php?page=details&id=<?php echo $student['id'] ?>" class="btn btn-success">Details</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>


<?php include 'footer.php' ?>