<!-- lab5a_q2.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 5a Q2</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        td, th { border: 1px solid #666; padding: 6px; }
        th { background: #eee; }
    </style>
</head>
<body>
    <h2>Students List</h2>

    <?php
        // Example associative array of students
        $students = array(
            "CI230029" => array("name" => "Athirah", "program" => "BIW", "age" => 23),
            "AI230009" => array("name" => "Alisa", "program" => "BIS", "age" => 22),
            "AI230019" => array("name" => "Syazwana", "program" => "BIT", "age" => 22)
        );
    ?>

    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>

        <?php foreach ($students as $matric => $info): ?>
            <tr>
                <td><?php echo htmlspecialchars($matric); ?></td>
                <td><?php echo htmlspecialchars($info['name']); ?></td>
                <td><?php echo htmlspecialchars($info['program']); ?></td>
                <td><?php echo htmlspecialchars($info['age']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
