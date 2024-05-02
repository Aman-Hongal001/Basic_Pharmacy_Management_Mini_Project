<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['name'])){

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MYPHARM_HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <style>
    h3,h5{
    font-weight: bold;
    }
    strong{
      font-size: 30px;
      font-style: italic;
      font-weight: bold;
    }
    nav.navbar-expand-lg.a{
        font-size: 30px;
        font-weight: bold;
    }

  </style>

  <body>

    <!-- navbar starts hear -->
    <nav class="navbar navbar-expand-lg " style="background-color: #aff2cb;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MYPHARM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="display.php">Medicine Details</a>
              </li>
            </ul>
            <a class="nav-link" aria-current="page" href="logout.php">logout</a>
          </div>
        </div>
      </nav>

      <!-- crausel starts here -->
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="11.jpg" class="d-block w-100" alt="image"  height="650vh" width="100vw">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: white;">  WELCOME <?php echo $_SESSION['name']; ?></h3>
              <h5 style="color: white;"> We help you to live a healthy life.</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="12.jpg" class="d-block w-100" alt="image"  height="650vh" width="100vw">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color: yellow;">How it works</h5>
              <h3 style="color: yellow;">We Bring The Pharmacy To You.
              </h3>
            </div>
          </div>
          <div class="carousel-item">
            <img src="13.jpg" class="d-block w-100" alt="image"  height="650vh" width="100vw">
            <div class="carousel-caption d-none d-md-block">
              <h3 style="color: red;">25% OFF</h3>
              <h5 style="color: red;">Providing 25% off on every order above Rs 2000. </h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    <!-- <div class="container" > -->
      <div class="row mb-2, row mt-2"  >
        <div class="col-md-6" >
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: black;">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Health and Wellness</strong>
              <p class="card-text mb-auto" style="color: white; font-size: 20px;">Health is the state of complete physical,mental and social well being and free from diseases.Wellness means nourishing a healthy body through Excercise,nutritio,sleep etc.Living a healthy lifestyle such as eating healthy, exercising, avoiding junk will not only extend your life, rejuvenate your skin and hair but also improve your overall well-being. It will help you to feel better physically and mentally. However, healthy habits are hard to develop and require changing of a mindset.</p>
              <a href="#" class="stretched-link"><button type="button" class="btn btn-outline-warning">Read more</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="21.png" alt="image" class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="background-color: black;">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-success" >Healthy Lifestyle</strong>
             
              <p class="mb-auto" style="color: white; font-size: 20px;" >Living a healthy lifestyle such as eating healthy, exercising, avoiding junk will not only extend your life, rejuvenate your skin and hair but also improve your overall well-being. It will help you to feel better physically and mentally. However, healthy habits are hard to develop and require changing of a mindset.</p>
              <a href="#" class="stretched-link"><button type="button" class="btn btn-outline-warning">Read more</button></a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="23.jpg" alt="image"  class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c">
             
    
            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
        <footer class="container" >
          <p class="float-end"><a href="#">Back to top</a></p>
          <p class="ml-17">© 2022–2023 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}
else{
	header("Location:login.php");
}

?>