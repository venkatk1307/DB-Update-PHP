<?php
// Database server and credentials
$servername = "";  // Replace with your actual server address (e.g., IP address or domain name)
$username = "";  // Your MySQL username
$password = "";  // Your MySQL password
$dbname = "";  // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$emp_id = $_POST['emp_id'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$aadhar_number = $_POST['aadhar_number'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address_line_1 = $_POST['address_line_1'];
$address_line_2 = $_POST['address_line_2'];
$address_line_3 = $_POST['address_line_3'];
$state = $_POST['state'];
$nationality = $_POST['nationality'];
$university = $_POST['university'];
$graduation_year = $_POST['graduation_year'];
$position = $_POST['position'];
$department = $_POST['department'];
$report_to_emp_id = $_POST['report_to_emp_id'];
$employment_type = $_POST['employment_type'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$salary = $_POST['salary'];
$work_hours = $_POST['work_hours'];
$sick_leave = $_POST['sick_leave'];
$casual_leave = $_POST['casual_leave'];

// Action type (Insert, Update, Overwrite)
$action = $_POST['action'];

if ($action == 'insert') {
    // Insert data into the table
    $sql = "INSERT INTO employee_registration (
        emp_id, first_name, middle_name, last_name, dob, aadhar_number, email, phone_number, 
        address_line_1, address_line_2, address_line_3, state, nationality, university, 
        graduation_year, position, department, report_to_emp_id, employment_type, 
        start_date, end_date, salary, work_hours, sick_leave, casual_leave
    ) VALUES (
        '$emp_id', '$first_name', '$middle_name', '$last_name', '$dob', '$aadhar_number', '$email', 
        '$phone_number', '$address_line_1', '$address_line_2', '$address_line_3', '$state', 
        '$nationality', '$university', '$graduation_year', '$position', '$department', 
        '$report_to_emp_id', '$employment_type', '$start_date', '$end_date', '$salary', '$work_hours', 
        '$sick_leave', '$casual_leave'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == 'update') {
    // Update data in the table
    $sql = "UPDATE employee_registration SET 
        first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', 
        dob = '$dob', aadhar_number = '$aadhar_number', email = '$email', phone_number = '$phone_number', 
        address_line_1 = '$address_line_1', address_line_2 = '$address_line_2', address_line_3 = '$address_line_3',
        state = '$state', nationality = '$nationality', university = '$university', 
        graduation_year = '$graduation_year', position = '$position', department = '$department', 
        report_to_emp_id = '$report_to_emp_id', employment_type = '$employment_type', 
        start_date = '$start_date', end_date = '$end_date', salary = '$salary', work_hours = '$work_hours', 
        sick_leave = '$sick_leave', casual_leave = '$casual_leave' 
        WHERE emp_id = '$emp_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == 'overwrite') {
    // Overwrite (Insert) the record
    $sql = "REPLACE INTO employee_registration (
        emp_id, first_name, middle_name, last_name, dob, aadhar_number, email, phone_number, 
        address_line_1, address_line_2, address_line_3, state, nationality, university, 
        graduation_year, position, department, report_to_emp_id, employment_type, 
        start_date, end_date, salary, work_hours, sick_leave, casual_leave
    ) VALUES (
        '$emp_id', '$first_name', '$middle_name', '$last_name', '$dob', '$aadhar_number', '$email', 
        '$phone_number', '$address_line_1', '$address_line_2', '$address_line_3', '$state', 
        '$nationality', '$university', '$graduation_year', '$position', '$department', 
        '$report_to_emp_id', '$employment_type', '$start_date', '$end_date', '$salary', '$work_hours', 
        '$sick_leave', '$casual_leave'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Record overwritten successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
