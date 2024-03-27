<style>
    /* Styles for the entire form */
form {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f4f7f6;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Styles for form inputs and textarea */
input[type=text], textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical; /* Allows the textarea to be resized vertically */
}

/* Styles for labels */
label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-size: 16px;
}

/* Style for the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

/* Change the background color of the submit button on mouse hover */
input[type=submit]:hover {
    background-color: #45a049;
}

/* Optional: Adds some spacing to the bottom of the form */
form {
    margin-bottom: 40px;
}

</style>

<?php include_once'header.php';?>
<form action="submit_feedback.php" method="post">
    <label for="session_id">Session ID:</label>
    <input type="text" id="session_id" name="session_id" required><br><br>

    <label for="feedback">Feedback:</label>
    <textarea id="feedback" name="feedback" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Submit Feedback">
</form>

<?php include_once'footer.php';?>

