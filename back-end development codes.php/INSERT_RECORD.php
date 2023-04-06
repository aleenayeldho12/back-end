<?php
include "config.php";
// Establish database connection

// Insert sample data into Classes table
$sql = "INSERT INTO Classes (class_name, capacity, teacher_id) VALUES
        ('Reception Year', 25, 1),
        ('Year One', 30, 2),
        ('Year Two', 30, 3),
        ('Year Three', 28, 4),
        ('Year Four', 28, 5),
        ('Year Five', 26, 6),
        ('Year Six', 26, 7)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Sample data inserted into Classes table successfully<br>";
} else {
    echo "Error inserting sample data into Classes table: " . $conn->error."<br>";
}

// Insert sample data into Pupils table
$sql = "INSERT INTO Pupils (pupil_name, address, medical_info, class_id) VALUES
        ('John Smith', '123 Main St', 'Asthma', 1),
        ('Emma Johnson', '456 Oak Ave', '', 1),
        ('Tom Davis', '789 Elm St', '', 1),
        ('Sara Green', '234 Maple Ave', 'Allergy to peanuts', 2),
        ('Adam Brown', '567 Pine St', '', 2),
        ('Amy White', '890 Cedar Ave', '', 2),
        ('Jake Wilson', '345 Oak Ave', '', 3),
        ('Lucy Lee', '678 Elm St', 'Vision problems', 3),
        ('Max Turner', '901 Maple Ave', '', 3)";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Sample data inserted into Pupils table successfully<br>";
} else {
    echo "Error inserting sample data into Pupils table: " . $conn->error."<br>";
}

// Insert sample data into Parents table
$sql = "INSERT INTO Parents (parent_name, address, email, telephone) VALUES
        ('Peter Smith', '123 Main St', 'peter.smith@email.com', '555-1234'),
        ('Anna Johnson', '456 Oak Ave', 'anna.johnson@email.com', '555-2345'),
        ('Mike Davis', '789 Elm St', '', '555-3456'),
        ('Kate Green', '234 Maple Ave', '', '555-4567'),
        ('David Brown', '567 Pine St', 'david.brown@email.com', ''),
        ('Jenny White', '890 Cedar Ave', '', ''),
        ('Dan Wilson', '345 Oak Ave', '', ''),
        ('Rachel Lee', '678 Elm St', '', '555-5678'),
        ('Steve Turner', '901 Maple Ave', '', '')";

if ($conn->mysqli_query($sql) === TRUE) {
    echo "Sample data inserted into Parents table successfully<br>";
} else {
    echo "Error inserting sample data into Parents table: " . $conn->error."<br>";
}

// Insert sample data into Pupil_Parents table
$sql = "INSERT INTO Pupil_Parents (pupil_id, parent_id) VALUES
        (1, 1),
        (2, 2),
        (3, 3),
        (4, 4),