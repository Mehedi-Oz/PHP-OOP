<?php

namespace App\Classes;

class Subject
{
  public $subjects = [], $subject;

  public function __construct()
  {
    $this->subjects = [
      [
        'id' => 1,
        'subject_name' => 'Algorithm'
      ],
      [
        'id' => 2,
        'subject_name' => 'Circuit Design'
      ],
      [
        'id' => 3,
        'subject_name' => 'App Design'
      ],
    ];
  }

  public function getAllSubjects()
  {
    return $this->subjects;
  }
  public function getSubjectByStudentId($studentsSubjectId)
  {
    $this->subjects = $this->getAllSubjects();

    foreach ($this->subjects as $this->subject) {
      if ($this->subject['id'] == $studentsSubjectId) {
        return $this->subject;
      }
    }
  }
}