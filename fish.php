<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fish | Pet Shop Management System</title>
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
        <h1>Fish</h1><br>
        <div class="container" style="width: 65%;"><h3>They breathe and live in water. So they are expert swimmers.</h3></div>
        <br><br>
        <h4>Find below your dream fish.</h4><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Guppies.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Guppies</h5>
          <p class="card-text" style="height: auto;">The guppy (Poecilia reticulata), also known as millionfish and rainbow fish, is one of the
            world's most widely distributed tropical fish and one of the most popular freshwater aquarium fish
            species.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Guppies" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Betta Fish.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Betta Fish</h5>
          <p class="card-text" style="height: auto;">Bettas can breathe atmospheric air using a unique organ called
            the labyrinth. This accounts for their ability to thrive in low-oxygen water conditions that would kill
            most other fish.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Betta Fish" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Goldfish.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Goldfish</h5>
          <p class="card-text" style="height: auto;">Common goldfish are social animals who prefer living in groups. They are able to coexist with any
            fish, providing they're tame and sociable. With  general care they can become tame.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Goldfish" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Angelfish.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Angelfish</h5>
          <p class="card-text" style="height: auto;">Angelfish enjoy a
            variety of live foods including bloodworms and
            other small insects and crustaceans. They
            will also benefit from the addition of some plant matter.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Angelfish" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Red-Bellied Piranha.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Red-Bellied Piranha</h5>
          <p class="card-text" style="height: auto;">Red-bellied piranhas are red on their undersides from chin and cheeks to belly. The head and body
            are various shades of gray; their sides are flecked with bright silver scales.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Red-Bellied Piranha" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Rainbowfish.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Rainbowfish</h5>
          <p class="card-text" style="height: auto;">The Rainbowfish is another less common fish that’s easy to care for. Their vibrant colors
            don’t exactly break in until they’re mature into adulthood. Still, it’s well worth the wait.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Rainbowfish " hidden>
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