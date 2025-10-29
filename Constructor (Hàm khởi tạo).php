<?php
// Định nghĩa class Employee
class Employee {
    public $empName;
    public $empDept;
    public $empSalary;

    // Constructor: tự động chạy khi tạo đối tượng
    public function __construct($name, $dept, $salary) {
        $this->empName = $name;
        $this->empDept = $dept;
        $this->empSalary = $salary;
    }

    // Phương thức hiển thị thông tin
    public function showEmployee() {
        echo "Name: $this->empName<br>";
        echo "Department: $this->empDept<br>";
        echo "Salary: $this->empSalary<br><br>";
    }
}

// Tạo 2 đối tượng khác nhau
$emp1 = new Employee("Alice", "HR", 50000);
$emp2 = new Employee("Bob", "IT", 65000);

// Gọi phương thức hiển thị
$emp1->showEmployee();
$emp2->showEmployee();
?>
