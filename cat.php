<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat | Pet Shop Management System</title>
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
        <h1>Cat</h1><br>
        <div class="container" style="width: 65%;"><h3>Cats are fluffy, cute and friendly animals which come in different colors and breeds.</h3></div>
        <br><br>
        <h4>Find below your dream cat.</h4><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Persian.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Persian</h5>
          <p class="card-text" style="height: auto;">Cats from Turkey, Afghanistan and Persia were commonly bred together. Today hey have been bred to keep their very unique look which is a round head, short face, rounded ears and big eyes.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Persian" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Maine Coon.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Maine Coon</h5>
          <p class="card-text" style="height: auto;">They like people being around them but they aren’t necessarily clingy. The mouser trait has still been passed down for many generations so expect your home to be rodent free.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Maine Coon" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Ragdoll.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Ragdoll</h5>
          <p class="card-text" style="height: auto;">Even if they are cradled on their back, they love a good cuddle and scratch from anyone. They generally stay on the same level as people rather than being at the highest point in the room.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Ragdoll" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Siamese.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Siamese</h5>
          <p class="card-text" style="height: auto;">While they are extremely fond of people, they will definitely tell you what they are thinking in a very loud and raspy tone and expect you to wait on them when the call. They do require attention.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Siamese" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="British Shorthair.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">British Shorthair</h5>
          <p class="card-text" style="height: auto;">They are 
            very mellow and easy going making them a wonderful addition to any family. They love 
            some affection but doesn’t whinge non-stop when you don’t give them love for 2 
            seconds.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="British Shorthair" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Abyssinian.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Abyssinian</h5>
          <p class="card-text" style="height: auto;">Abby Grabby is the nickname given to this breed as they are known for taking anything 
            that grabs their attention. If you do plan on getting an Aby be sure to have a tonne of toys 
            on hand as they love to play!
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Abyssinian" hidden>
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