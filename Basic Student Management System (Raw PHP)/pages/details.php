<?php include 'header.php' ?>

<section class="mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-5">
        <div class="card">
          <div class="card-header">
            <img src="assets/images/<?php echo $details['image'] ?>" style="height: 350px; width: 350px;">
          </div>
          <div class="card-body">
            <h3>Name: <?php echo $details['student_name'] ?></h3>
            <h6>ID: <?php echo $details['id'] ?></h6>
            <h6>Email: <?php echo $details['email'] ?></h6>
            <h6>Phone: <?php echo $details['phone'] ?></h6>
            <h6>Department: <?php echo $details['department_name'] ?></h6>
            <h6>Section: <?php echo $details['section_name'] ?></h6>
            <h6>Subject: <?php echo $details['subject_name'] ?></h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>