<?php

namespace App\Classes;

class Section
{
  public $sections = [], $section;

  public function __construct()
  {
    $this->sections = [
      [
        'id' => 1,
        'section_name' => 'A'
      ],
      [
        'id' => 2,
        'section_name' => 'B'
      ],
      [
        'id' => 3,
        'section_name' => 'C'
      ],
    ];
  }

  public function getAllSections()
  {
    return $this->sections;
  }

  public function getSectionByStudentId($studentsSectionId)
  {
    $this->sections = $this->getAllSections();

    foreach ($this->sections as $this->section) {
      if ($this->section['id'] == $studentsSectionId) {
        return $this->section;
      }
    }
  }
}