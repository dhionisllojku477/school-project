<?php
class School {
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function greet() {
    echo "Hello, I am {$this->name}";
  }
}
$school = new School("School Project");
$school->greet();