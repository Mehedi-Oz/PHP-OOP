<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management System</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="action.php?page=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="action.php?page=students">Students</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Departments
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($departments as $department) { ?>
                <li>
                  <a class="dropdown-item" href="action.php?page=department&id=<?php echo $department['id'] ?>">
                    <?php echo $department['department_name'] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Subjects
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($subjects as $subject) { ?>
                <li>
                  <a class="dropdown-item" href="action.php?page=subject&id=<?php echo $subject['id'] ?>">
                    <?php echo $subject['subject_name'] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sections
            </a>
            <ul class="dropdown-menu">
              <?php foreach ($sections as $section) { ?>
                <li>
                  <a class="dropdown-item" href="action.php?page=section&id=<?php echo $section['id'] ?>">
                    <?php echo $section['section_name'] ?>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>