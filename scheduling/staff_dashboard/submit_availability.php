<?php
session_start(); // Start the session at the beginning

include 'connect.php'; // Ensure the path to connect.php is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = $_POST['day'];
    $time = $_POST['time'];

    // Check if the session variable exists
    if(isset($_SESSION['login_id'])) {
        $staff_id = $_SESSION['login_id']; // Assuming you store the logged-in staff's ID in session

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO staff_availability (faculty_id, day, time) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $faculty_id, $day, $time);

        if($stmt->execute()){
            echo "Availability submitted successfully.";
            // Redirect or inform the user
        } else {
            echo "Error submitting availability.";
            // Handle error
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Session not started or login_id not set.";
    }
}
?>


<button id="backButton" style="background-color: #4CAF50; border: none; color: white; padding: 15px 30px; text-align: center; text-decoration: none; display: block; font-size: 16px; margin: 50px auto 20px; cursor: pointer; border-radius: 8px;">
    <a href="https://vesta.uclan.ac.uk/~hmmiyanji/agile/scheduling/index.php" style="color: white; text-decoration: none;">Go back to Dashboard</a>
</button>


