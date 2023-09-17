<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Pet Shop Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Pet Shop Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                  <?php
                    session_start();

                    if(isset($_SESSION['user_id'])){
                      $user_id = $_SESSION['user_id'];
                      $user_name = $_SESSION['name'];

                      echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                      echo $user_name;
                      echo "</a>";
                      echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">';
                      echo '<li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      <li hidden><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul></li>';
                      if($_SESSION['user_username']=='admin'){
                        echo '<li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>';
                      }
                    }
                    else{
                      echo '<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                      <li class="nav-item"><a class="nav-link" href="signup.html">SignUp</a></li>';
                    }
                  ?>
            </ul>
          </div>
        </div>
    </nav><br>
    <!-- Navigation Bar End -->

    <center>
        <h1>Welcome to Pet Shop Management System</h1><br><br>
        <h3>Choose from a variety of pets from the comfort of your home.</h3><br>

        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide shadow p-3 mb-5 bg-body-tertiary rounded" data-bs-ride="carousel" style="height: 500px; width: 800px;">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" 500pxaria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" style="height: 100%;">
              <div class="carousel-item active">
                <img src="Turtle Image.png" class="d-block w-100" alt="..." style="width: 500px;">
              </div>
              <div class="carousel-item">
                <img src="Parrot Image.png" class="d-block w-100" alt="..." style="width: 500px;">
              </div>
              <div class="carousel-item">
                <img src="White Cat Image.png" class="d-block w-100" alt="..." style="width: 500px;">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div><br>
        <!-- Carousel End -->

        <h3>Let's have a look at what we got</h3><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="White Cat Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Cats</h5>
            <p class="card-text" style="height: 100px;">Cat is a friendly, fluffy, and loved-by-everyone kind of pet. It also helps you to catch mice in your house. Price Rs. 1000</p>
            <a href="cat.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="Dog Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Dog</h5>
            <p class="card-text" style="height: 100px;">A dog is a loyal and friendly animal who protects your home from any intruders. It loves to play catch-catch. Price Rs. 1000</p>
            <a href="dog.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="Parrot Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Bird</h5>
            <p class="card-text" style="height: 100px;">A bird is a small flying animal who mostly lives on tree. It keeps us entertained. Price Rs. 1000</p>
            <a href="bird.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="Rabbit Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Rabbit</h5>
            <p class="card-text" style="height: 100px;">A rabbit is a small plant-eating animal with big ears and a fluffy body. Price Rs. 1000</p>
            <a href="rabbit.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="Fish Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Fish</h5>
            <p class="card-text" style="height: 100px;">A fish is a small aquatic animal with gills instead of lungs. Keep it in water always. Price Rs. 1000</p>
            <a href="fish.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; margin: 2%; display: inline-block;">
            <img src="Turtle Image.png" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Turtle</h5>
            <p class="card-text" style="height: 100px;">As calm and quiet it seems, a tortoise is actually slow in movement and has a protective shell on its back. Price Rs. 1000</p>
            <a href="turtle.php" target="_self" class="btn btn-primary">Details</a>
            </div>
        </div><br>
        
        <!-- Copy and edit below code to enter more cards as required -->
        <!-- Card No. -->
        <!--
            <div class="card" style="width: 18rem; display: inline-block;">
            <img src="" class="card-img-top" alt="Pet Image" style="height: 200px;">
            <div class="card-body">
            <h5 class="card-title">Pet Name</h5>
            <p class="card-text" style="height: 100px;">Pet Description</p>
            <a href="#" class="btn btn-primary">Details</a>
            </div>
            </div><br>
        -->

    </center><br>

    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>