<?php
// Include database connection
include('db_connect.php');

// Check if required data is set
if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['address'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    // Prepare update query
    $query = "UPDATE schools SET name = ?, address = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssi", $name, $address, $id);

    // Execute and check success
    if($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
    header('https://vesta.uclan.ac.uk/~hmmiyanji/agile/scheduling/admin/index.php?page=school');
} else {
    echo "Required data not provided";
}
?>
