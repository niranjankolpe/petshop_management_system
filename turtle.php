<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turtle | Pet Shop Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script language="javascript" type="text/javascript" src="order.js"></script>
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
                    if($_SESSION['name']=='Niranjan Kolpe'){
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
        <h1>Turtle</h1><br>
        <div class="container" style="width: 65%;"><h3>They do not have some special super-fast skills, but are likely to make you love them.</h3></div>
        <br><br>
        <h4>Find below your dream turtle.</h4><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Red-Eared Slider.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Red-Eared Slider</h5>
          <p class="card-text" style="height: auto;">Red-eared sliders are very popular aquatic turtles that require special
            lighting, an animal and plant based diet, and continuous cleaning and
            maintenance. They
            can live up to 20 years.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value=" Red-Eared Slider" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="African Sideneck Turtle.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">African Sideneck Turtle</h5>
          <p class="card-text" style="height: auto;">These turtles got their common
            name because they're unable to tuck their heads entirely inside their
            shells, so they tuck them to the side instead. Sidenecks are on the
            larger side as far as turtles go.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="African Sideneck Turtle" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Western Painted Turtle.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Western Painted Turtle</h5>
          <p class="card-text" style="height: auto;">The painted turtle is the most widespread native turtle of North America. It lives
            in slow-moving fresh waters, from southern Canada to northern Mexico, and from the Atlantic to the
            Pacific.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Western Painted Turtle" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Mississippi Map Turtle.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Mississippi Map Turtle</h5>
          <p class="card-text" style="height: auto;">A Mississippi map on dry land feels sort of like a fish out of water.
            They feel at home in the water. They don't stray far from any
            body of water so that they can always dart back into it to make an
            escape.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Mississippi Map Turtle" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Common Musk Turtle.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Common Musk Turtle</h5>
          <p class="card-text" style="height: auto;">Common musk turtles are small turtles with dark brown or black shells that may be
            streaked or mottled and commonly accumulates green algae. There are two distinct stripes on the
            head.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Common Musk Turtle" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Spotted Turtle.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Spotted Turtle</h5>
          <p class="card-text" style="height: auto;">The Spotted Turtle is one of the smallest species of semi-aquatic turtle
            to be kept as a pet. They are found in multiple regions of the Eastern
            and Midwestern United States.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Spotted Turtle" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>
    </center><br><br>

    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>