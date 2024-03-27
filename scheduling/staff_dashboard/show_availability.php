<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
</head>
<body>
    <?php 
    include_once 'header.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Dashboard</title>
</head>
<body>
    <?php include_once 'header.php'; ?>

    <h2>Submit Availability</h2>
    <form action="submit_availability.php" method="POST">
        <label for="day">Day:</label>
        <select name="day" id="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select><br>

        <label for="time">Time:</label>
        <input type="time" id="time" name="time"><br>

        <input type="submit" value="Submit">
    </form>

    <?php include_once 'footer.php'; ?>
</body>
</html>


<?php 
include_once 'footer.php';
?>
</body>
</html>