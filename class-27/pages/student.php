<?php include 'header.php' ?>

<h1>This is Student Page</h1>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-stripped table-danger table-hover">
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
          </tr>

          <?php foreach ($students as $student) { ?>
            <tr>
              <td><?php echo $student['id'] ?></td>
              <td><?php echo $student['name'] ?></td>
              <td><?php echo $student['phone'] ?></td>
              <td>
                <?php
                if (is_array($student['email'])) {
                  foreach ($student['email'] as $value) {
                    echo $value. '<br>';
                  }
                } else {
                  echo $student['email'];
                }
                ?>
              </td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php' ?>