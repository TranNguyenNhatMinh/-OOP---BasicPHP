<?php
// Định nghĩa class Student
class Student {
    // Thuộc tính
    public $name;
    public $age;
    public $grade;

    // Phương thức hiển thị thông tin
    public function displayInfo() {
        echo "Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Grade: $this->grade<br><br>";
    }
}

// Tạo đối tượng thứ nhất
$student1 = new Student();
$student1->name = "John";
$student1->age = 20;
$student1->grade = "A";

// Tạo đối tượng thứ hai
$student2 = new Student();
$student2->name = "Anna";
$student2->age = 21;
$student2->grade = "B";

// Gọi phương thức hiển thị
$student1->displayInfo();
$student2->displayInfo();
?>
