1
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        /* Sets a default, easy-to-read font */
        margin: 0;
        padding: 0;
        background: #f4f4f4;
        /* Light gray background for the whole page */
        color: #333;
        /* Dark gray color for text */
    }

    .first-layer {
        width: 100%;
        height: 60px;
        background-color: #0693e3;
    }

    .col {
        margin-left: 150px;
    }

    .col a {
        color: white;
        text-decoration: none;
    }

    .second-layer {
        background-image: url('https://chici.org/wp-content/uploads/2021/11/generic_banner.png');
        background-size: cover;
        /* Cover the entire element */
        background-position: center;
        /* Center the background image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        width: 100%;
        height: 30em;
        /* Adjust as necessary */
    }

    .about-us{
        width: 35%;
        height: 43vh;
        border-color: 6px solid red;
        margin-left: 20em;
        padding-top: 90px;
        background-color: #f4f4f4;
        border-style:  ridge;
    }
    .us{
        margin-left: 20px;
    }
    .us button{
        background-color: #0693e3;
        color: white;
        border-radius: 25% 25%;
       
    }
    .side-second-layer img{
        margin-top: -30em;
        margin-left:  70em;
        width: 40em;
        height: 30em;
    }
</style>

<body>
    <?php
    include_once 'header.php';
    ?>

    <div class="first-layer">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h1><a href="#">Publications
                        </a></h1>
                </div>
                <div class="col">
                    <h1><a href="#">Projects

                        </a></h1>
                </div>
                <div class="col">
                    <h1><a href="#">UXPlaybook
                        </a></h1>
                </div>
            </div>
        </div>
    </div>

    <!-- second layer -->
    <div class="second-layer">
    <div class="about-us">
        <div class="us">
    <h1>About Us</h1>
    <p>Over the last 200000000 years, we have been producing research that involves <br>children in a fun, interactive manner.</p>

    <br>
    <p>Our FAQ has more information about our organisation and what work <br>we do.</p>
    <button>View FAQ</button>
    </div>
    </div>

    <div class="side-second-layer">
        <img src="https://chici.org/wp-content/uploads/2021/11/about_us_img.png" alt="About us image">
    
    </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>
</bod

</html>