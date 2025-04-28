<?php

namespace App\Classes;

class Department
{
  public $departments = [], $department;

  public function __construct()
  {
    $this->departments = [
      [
        'id' => 1,
        'department_name' => 'CSE'
      ],
      [
        'id' => 2,
        'department_name' => 'EEE'
      ],
      [
        'id' => 3,
        'department_name' => 'SE'
      ],
    ];
  }

  public function getAllDepartments()
  {
    return $this->departments;
  }

  public function getDepartmentByStudentId($departmentId)
  {
    $this->departments = $this->getAllDepartments();

    foreach ($this->departments as $this->department) {
      if ($this->department['id'] == $departmentId) {
        return $this->department;
      }
    }
  }

}