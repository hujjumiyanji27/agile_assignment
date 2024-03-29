<?php
include('db_connect.php'); // Make sure this path is correct

if(isset($_POST['name']) && isset($_POST['address'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO schools (name, address) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $address);

    if($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
} else {
    echo "error";
}
?>
