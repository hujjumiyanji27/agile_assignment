    <?php
    // submit_feedback.php

    session_start();
    // Check if user is logged in or redirect to login page
    if (!isset($_SESSION['login_id'])) {
        header('Location: login.php');
        exit;
    }

    // Database connection variables
    $host = 'localhost'; // or your host
    $username = 'hmmiyanji'; // your database username
    $password = 'rAQTnjMv'; // your database password
    $database = 'hmmiyanji'; // your database name

    // Create connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the form data
    $session_id = $_POST['session_id'];
    $feedback = $_POST['feedback'];
    $staff_id = $_SESSION['login_id']; // Assuming you store staff ID in session

    // Prepare and bind
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (session_id, staff_id, feedback) VALUES (?, ?, ?)");
$stmt->bind_param("iis", $session_id, $staff_id, $feedback);

    // Execute and close
    if ($stmt->execute()) {
        echo "Feedback submitted successfully";
        header("Location: https://vesta.uclan.ac.uk/~hmmiyanji/agile/scheduling/index.php");
        exit;
    } else {
        echo "Error submitting feedback: " . $stmt->error;
    }


    $stmt->close();
    $conn->close();
    ?>
