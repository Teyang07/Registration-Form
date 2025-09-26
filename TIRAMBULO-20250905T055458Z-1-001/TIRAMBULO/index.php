<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
<title>Document</title>
</head>
<body>
    <?php echo "";?>
    <br>

<div>
  <h2>Registration Form</h2>


    <form action = "display.php" method = "POST">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname" value="Thea"><br>
        <br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname" value="Tirambulo"><br>
        <br>

        <label for="idnum">Student ID:</label>
        <input type="text" id="idNum" name="idNum" value="123456789"><br>
        <br>

        <label for="department">Department:</label>
        <input type="text" id="department" name="department" value="Information Technology"><br>
        <br>

        <input type="submit" value="Submit">
    </form>  
</div>
</body>
</html> 
