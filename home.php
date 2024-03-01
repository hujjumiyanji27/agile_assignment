
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="style.css"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Roboto+Slab:wght@100&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Collegiate+One&family=Kenia&family=Roboto+Slab:wght@100&display=swap"
    rel="stylesheet">

    <style>
.row {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* Creates three columns of equal width */
  grid-gap: 20px; /* Space between grid items */
  margin: 20%;
  max-width: 100%;
  height:  25vh;
}

.card {

  border-radius: 5px; /* Rounded corners for the cards */
  
  width: 20%;
  color: black;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  width: 100%;
  
}

.card-img-top {
  width: 100%; /* Make image responsive */
  height: auto;
  border-radius: 5px 5px 0 0; /* Rounded corners for the top of the image */
}

.btn-primary {
  background-color: #007bff; /* Bootstrap primary button color */
  border: none;
  color: white;
  padding: 10px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.btn-primary:hover {
  background-color: white;
  color: black;
  border: 1px solid #007bff;
}

.card-text {
  padding: 15px;
  font-size: 14px;
}

.top-card {
/* add css for this  */
margin-left: 10%;
margin-right: 10%;
}


/* Responsive layout for screens smaller than 768px */
@media screen and (max-width: 768px) {
  .row {
    grid-template-columns: repeat(1, 1fr); /* Each card takes full width */
  }
}

</style>
</head>
<body>
    <!-- HUJAIFAH DONE THIS SECTIONM




-->
<header> <!-- for header -->
  <?php
  include_once 'header.php';
  ?>
</header>

<body>

  <div class="box">
  <img src="shape_texture_banner.png" alt="shape image...">
  <div class="card">
  <div class="top-card">
    <!-- card 1 -->
    <img src="https://vesta.uclan.ac.uk/~hmmiyanji/agile/ethics_word_bubble.png" class="card-img-top" alt="..." style="height: 45%;">
    <a href="#" class="btn btn-primary">About Us</a>
    <p class="card-text">Never heard of us before? Click here to find out more about our organisation</p>

  </div>
  <div class="top-card">
   <!-- card 2 -->
   <img src="https://vesta.uclan.ac.uk/~hmmiyanji/agile/ethics_word_bubble.png" class="card-img-top" alt="..." style="height: 45%;">
    <a href="#" class="btn btn-primary">ChiCI’s Ethics</a>
    <p class="card-text">We’ve participated in a variety of conferences and events that discuss the ethical
    implications of children’s participation in research.</p>

  </div>
  <div class="top-card">
 <!-- card 3 --> 
 <img src="https://vesta.uclan.ac.uk/~hmmiyanji/agile/collab_thumb.png" class="card-img-top" alt="..." style="height: 45%;">
    <a href="#" class="btn btn-primary">Collaborations</a>
            <p class="card-text">Over the last 20 years, we’ve worked with many schools, universities and organisations.
            </p>

  </div>
  </div>
  </div>

</body>
</html>