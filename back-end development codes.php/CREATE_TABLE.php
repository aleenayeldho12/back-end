<?php
include "config.php";
// Establish database connection

// Create Classes table
$sql = "CREATE TABLE Classes (
    class_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(30) NOT NULL,
    capacity INT(6) NOT NULL,
    teacher_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES Teachers(teacher_id)
)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Classes table created successfully<br>";
} else {
    echo "Error creating Classes table: " . $conn->error."<br>";
}

// Create Pupils table
$sql = "CREATE TABLE Pupils (
    pupil_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pupil_name VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    medical_info TEXT,
    class_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (class_id) REFERENCES Classes(class_id)
)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Pupils table created successfully<br>";
} else {
    echo "Error creating Pupils table: " . $conn->error."<br>";
}

// Create Parents table
$sql = "CREATE TABLE Parents (
    parent_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    parent_name VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    email VARCHAR(50),
    telephone VARCHAR(20)
)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Parents table created successfully<br>";
} else {
    echo "Error creating Parents table: " . $conn->error."<br>";
}

// Create Pupil_Parents table
$sql = "CREATE TABLE Pupil_Parents (
    pupil_id INT(6) UNSIGNED NOT NULL,
    parent_id INT(6) UNSIGNED NOT NULL,
    PRIMARY KEY (pupil_id, parent_id),
    FOREIGN KEY (pupil_id) REFERENCES Pupils(pupil_id),
    FOREIGN KEY (parent_id) REFERENCES Parents(parent_id)
)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Pupil_Parents table created successfully<br>";
} else {
    echo "Error creating Pupil_Parents table: " . $conn->error."<br>";
}

// Create Teachers table
$sql = "CREATE TABLE Teachers (
    teacher_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    teacher_name VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    annual_salary DECIMAL(10, 2) NOT NULL,
    background_check BOOLEAN NOT NULL,
    class_id INT(6) UNSIGNED NOT NULL,
    FOREIGN KEY (class_id) REFERENCES Classes(class_id)
)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Teachers table created successfully<br>";
} else {
    echo "Error creating Teachers table: " . $conn->error."<br>";
}

// Close database connection
$conn->close();
?>