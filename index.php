<?php
// index.php - Home page with employee registration form

// Include database connection
include('includes/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Bootstrap CSS (for basic styling and responsiveness) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Employee Registration Form</h1>

        <!-- Employee Registration Form -->
        <form action="employee_register.php" method="POST">
            <!-- Personal Details -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong>Personal Details</strong>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="emp_id" class="col-sm-3 col-form-label">Employee ID</label>
                        <div class="col-sm-9">
                            <input type="text" id="emp_id" name="emp_id" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="firstName" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="firstName" name="firstName" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="middleName" class="col-sm-3 col-form-label">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="middleName" name="middleName" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="thirdName" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="thirdName" name="thirdName" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dob" class="col-sm-3 col-form-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" id="dob" name="dob" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="adhaarTxt" class="col-sm-3 col-form-label">Aadhar Number</label>
                        <div class="col-sm-9">
                            <input type="text" id="adhaarTxt" name="adhaarTxt" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="emailtxt" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" id="emailtxt" name="emailtxt" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="phoneNo" class="col-sm-3 col-form-label">Phone Number</label>
                        <div class="col-sm-9">
                            <input type="text" id="phoneNo" name="phoneNo" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address1" class="col-sm-3 col-form-label">Address Line 1</label>
                        <div class="col-sm-9">
                            <input type="text" id="address1" name="address1" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address2" class="col-sm-3 col-form-label">Address Line 2</label>
                        <div class="col-sm-9">
                            <input type="text" id="address2" name="address2" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address3" class="col-sm-3 col-form-label">Address Line 3</label>
                        <div class="col-sm-9">
                            <input type="text" id="address3" name="address3" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" id="state" name="state" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nationality" class="col-sm-3 col-form-label">Nationality</label>
                        <div class="col-sm-9">
                            <input type="text" id="nationality" name="nationality" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="university" class="col-sm-3 col-form-label">College/University</label>
                        <div class="col-sm-9">
                            <input type="text" id="university" name="university" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="Graduationyear" class="col-sm-3 col-form-label">Graduation Year</label>
                        <div class="col-sm-9">
                            <input type="text" id="Graduationyear" name="Graduationyear" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Details -->
            <div class="card mb-3">
                <div class="card-header">
                    <strong>Job Details</strong>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <label for="positionTxt" class="col-sm-3 col-form-label">Job Position / Title</label>
                        <div class="col-sm-9">
                            <input type="text" id="positionTxt" name="positionTxt" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="deptTxt" class="col-sm-3 col-form-label">Department</label>
                        <div class="col-sm-9">
                            <input type="text" id="deptTxt" name="deptTxt" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="rempID" class="col-sm-3 col-form-label">Report to (Emp ID)</label>
                        <div class="col-sm-9">
                            <input type="text" id="rempID" name="rempID" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="employmentType" class="col-sm-3 col-form-label">Type of Employment</label>
                        <div class="col-sm-9">
                            <select id="employmentType" name="employmentType" class="form-control" required>
                                <option value="Part-time employee">Part-time employee</option>
                                <option value="Intern">Intern</option>
                                <option value="Permanent position">Permanent position</option>
                                <option value="Holiday Worker">Holiday Worker</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="startDate" class="col-sm-3 col-form-label">Start Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="startDate" name="startDate" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="endDate" class="col-sm-3 col-form-label">End Date</label>
                        <div class="col-sm-9">
                            <input type="date" id="endDate" name="endDate" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="salaryTxt" class="col-sm-3 col-form-label">Salary and Compensation</label>
                        <div class="col-sm-9">
                            <input type="text" id="salaryTxt" name="salaryTxt" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="workhours" class="col-sm-3 col-form-label">Work Hours</label>
                        <div class="col-sm-9">
                            <input type="number" id="workhours" name="workhours" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="sickleave" class="col-sm-3 col-form-label">Sick Leave</label>
                        <div class="col-sm-9">
                            <input type="text" id="sickleave" name="sickleave" class="form-control" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="casualleave" class="col-sm-3 col-form-label">Casual Leave</label>
                        <div class="col-sm-9">
                            <input type="text" id="casualleave" name="casualleave" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Buttons -->
            <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary mx-2">Insert</button>
                <button type="submit" name="update" class="btn btn-success mx-2">Update</button>
                <button type="submit" name="overwrite" class="btn btn-danger mx-2">Overwrite</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
