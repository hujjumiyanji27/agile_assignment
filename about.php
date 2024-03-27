1 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif; /* Sets a default, easy-to-read font */
            margin: 0;
            padding: 0;
            background: #f4f4f4; /* Light gray background for the whole page */
            color: #333; /* Dark gray color for text */
        }

        .container_about_us {
            max-width: 800px; /* Maximum width of the container */
            margin: 20px auto; /* Centering the container */
            padding: 20px;
            background: #fff; /* White background for the container */
            border-radius: 8px; /* Rounded corners for the container */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Slight shadow for depth */
        }

        .card {
            padding: 20px;
            background-color: #e9ecef; /* A light gray background for the card */
            border-radius: 8px; /* Rounded corners for the card */
            margin-bottom: 20px; /* Space below the card */
        }

        .card h1 {
            margin-top: 0; /* Removes default margin from the top of the h1 */
        }

        .card p {
            line-height: 1.6; /* Increases line height for better readability */
        }

        .card button {
            display: inline-block; /* Allows setting padding and margins */
            padding: 10px 20px; /* Padding inside the button */
            margin-top: 10px; /* Space above the button */
            border: none; /* Removes default border */
            border-radius: 4px; /* Rounded corners for the button */
            background-color: #007bff; /* Blue background color */
            color: white; /* White text */
            text-decoration: none; /* Removes underline from link */
            cursor: pointer; /* Changes cursor to pointer on hover */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        .card button:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        a {
            color: inherit; /* Ensures links inside buttons inherit button text color */
            text-decoration: none; /* Removes underline from links */
        }
    </style>
<body>
    <?php 
    include_once 'header.php';
    ?>

<div class="container_about_us">
    <div class="card">
        <h1>About us</h1>
        <p>Over the last 20 years, we have been producing research that involves children in a fun, interactive manner.</p>
        <p>Our FAQ has more information about our organisation and what work we do.</p>
        <button><a href="">View FAQ</a></button>
    </div>
</div>


    <?php 
    include_once 'footer.php';
    ?>
</body>
</html>