<!-- lab5a_q1.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 5a Q1</title>
    <style>
        table { border-collapse: collapse; width: 60%; }
        td, th { border: 1px solid #666; padding: 8px; }
        th { background: #f0f0f0; text-align: left; }
    </style>
</head>
<body>
    <?php 
        // <-- Replace these with your own details:
        $name = "Anis Faqihah";            // (a) Name
        $matric = "A1230009";              // (b) Matric number
        $course = "Bachelor of Web Technology";        // (c) Course
        $year = "3";                       // (d) Year of study
        $address = "No 19, Jalan University 22, Johor"; // (e) Address
    ?>

    <h2>Student Details</h2>
    <table>
        <tr><th>Field</th><th>Value</th></tr>
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>
</body>
</html>
