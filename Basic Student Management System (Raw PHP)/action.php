<?php

require_once 'vendor/autoload.php';

use App\Classes\Student;
use App\Classes\Department;
use App\Classes\Subject;
use App\Classes\Section;

$students = new Student();

$departments = new Department();
$departments = $departments->getAllDepartments();

$subjects = new Subject();
$subjects = $subjects->getAllSubjects();

$sections = new Section();
$sections = $sections->getAllSections();

if (isset($_GET['page'])) {

  if ($_GET['page'] == 'home') {
    include 'pages/home.php';
  } elseif ($_GET['page'] == 'students') {
    $students = $students->getAllStudents();
    include 'pages/students.php';
  } elseif ($_GET['page'] == 'details') {
    $studentId = $_GET['id'];
    $details = $students->studentDetails($studentId);
    include 'pages/details.php';
  } elseif ($_GET['page'] == 'department') {
    $departmentId = $_GET['id'];
    $students = $students->getStudentsByDepartmentId($departmentId);
    include 'pages/department.php';
  }
}