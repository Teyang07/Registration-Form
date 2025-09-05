<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="result-box">
    <h2>Student Details</h2><br>
    <p>Welcome <strong><?php echo $_POST["fname"]; ?></strong></p><br>
    <p>Your family name is: <strong><?php echo $_POST["lname"]; ?></strong></p><br>
    <p>Your Student ID is: <strong><?php echo $_POST["idNum"]; ?></strong></p><br>
    <p>Department: <strong><?php echo $_POST["department"]; ?></strong></p><br>
</div>

</body>
</html>
