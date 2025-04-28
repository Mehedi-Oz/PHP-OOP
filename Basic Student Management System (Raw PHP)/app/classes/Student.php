<?php

namespace App\Classes;
use App\Classes\Department;
use App\Classes\Subject;
use App\Classes\Section;

class Student
{
  public $students = [], $student, $studentsByDepartmentId = [];

  public function __construct()
  {
    $this->students = [
      [
        'id' => 1,
        'department_id' => 1,
        'section_id' => 1,
        'subject_id' => 1,
        'student_name' => 'Muhammad',
        'email' => 'muhammad@gmail.com',
        'phone' => '01927381273',
        'image' => '1.jpg',
      ],
      [
        'id' => 2,
        'department_id' => 2,
        'section_id' => 2,
        'subject_id' => 2,
        'student_name' => 'Mahadi',
        'email' => 'mahadi@gmail.com',
        'phone' => '239847928374',
        'image' => '2.jpg',
      ],
      [
        'id' => 3,
        'department_id' => 3,
        'section_id' => 3,
        'subject_id' => 3,
        'student_name' => 'Hasan',
        'email' => 'hasan@gmail.com',
        'phone' => '39287438723',
        'image' => '3.jpg',
      ],
    ];
  }

  public function getAllStudents()
  {
    return $this->students;
  }

  public function studentDetails($studentId)
  {
    $this->students = $this->getAllStudents();

    foreach ($this->students as $this->student) {
      if ($this->student['id'] == $studentId) {
        $department = new Department();
        $getDepartmentByStudentId = $department->getDepartmentByStudentId($this->student['department_id']);
        $this->student['department_name'] = $getDepartmentByStudentId['department_name'];

        $subject = new Subject();
        $getSubjectByStudentId = $subject->getSubjectByStudentId($this->student['subject_id']);
        $this->student['subject_name'] = $getSubjectByStudentId['subject_name'];

        $section = new Section();
        $getSectionByStudentId = $section->getSectionByStudentId($this->student['section_id']);
        $this->student['section_name'] = $getSectionByStudentId['section_name'];

        return $this->student;
      }
    }
  }

  public function getStudentsByDepartmentId($departmentId)
  {
    $this->students = $this->getAllStudents();
    foreach ($this->students as $this->student) {
      if ($this->student['department_id'] == $departmentId) {
        $this->studentsByDepartmentId[] = $this->student;
      }
    }
    return $this->studentsByDepartmentId;
  }
}