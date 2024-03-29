<?php include('db_connect.php'); // Ensure this path is correct  ?>
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <b>School List</b>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>School Name</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Example query - adjust according to your database structure
                        $schools = $conn->query("SELECT * FROM schools ORDER BY name ASC");
                        while ($row = $schools->fetch_assoc()):
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['name']; ?>
                                </td> <!-- Adjust based on your column names -->
                                <td>
                                    <?php echo $row['address']; ?>
                                </td> <!-- Adjust based on your column names -->
                                <td>
<button class="btn btn-primary btn-sm edit" data-id="<?php echo $row['id']; ?>">Edit</button>

                                    <button class="btn btn-danger btn-sm delete" data-id="1">Delete</button>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Add New School</h2>
    <form id="addSchoolForm">
        <div class="mb-3">
            <label for="schoolName" class="form-label">School Name</label>
            <input type="text" class="form-control" id="schoolName" name="schoolName" required>
        </div>
        <div class="mb-3">
            <label for="schoolAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="schoolAddress" name="schoolAddress" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<!-- Add this line in the <head> section or before the closing </body> tag -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        // Event listener for the delete button
        $('.delete').click(function () {
            var id = $(this).data('id'); // Get the ID from the data-id attribute

            // Confirm dialog
            if (confirm('Are you sure you want to delete this school?')) {
                // AJAX request
                $.ajax({
                    url: 'delete_school.php', // The PHP file that handles the deletion
                    type: 'POST',
                    data: { id: id }, // Data sent to the server
                    success: function (response) {
                        // Handle response from the server
                        if (response.trim() == 'success') {
                            alert('School deleted successfully');
                            // Refresh page or use JavaScript to remove the row from the DOM
                            location.reload();
                        } else {
                            alert('Error deleting school');
                        }
                    }
                });
            }
        });
    });



    $(document).ready(function() {
    $('.edit').click(function() {
        var id = $(this).data('id'); // Get the ID from the data-id attribute
        window.location.href = 'edit_school.php?id=' + id; // Redirect to edit.php with the ID as a query string
    });
});

$(document).ready(function() {
    $('#addSchoolForm').submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        var schoolName = $('#schoolName').val();
        var schoolAddress = $('#schoolAddress').val();

        $.ajax({
            url: 'add_school_process.php', // The PHP file that processes the form data
            type: 'POST',
            data: {
                name: schoolName,
                address: schoolAddress
            },
            success: function(response) {
                // You can customize the success behavior
                alert('School added successfully');
                $('#addSchoolForm').trigger("reset"); // Reset form fields
                location.reload(); // Optionally reload the page or update the UI accordingly
            },
            error: function() {
                // You can customize the error behavior
                alert('Error adding school');
            }
        });
    });
});

</script>

<script>
    // Add your JavaScript here if needed, similar to the schedule functionality
</script>