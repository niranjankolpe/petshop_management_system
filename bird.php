<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bird | Pet Shop Management System</title>
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
        <h1>Bird</h1><br>
        <div class="container" style="width: 65%;"><h3>Mostly harmless and shy, they come in a variety of colors and sizes.</h3></div>
        <br><br>
        <h4>Find below your dream bird.</h4><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Downy Woodpecker.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Downy Woodpecker</h5>
          <p class="card-text" style="height: auto;">The downy woodpecker is virtually identical in plumage pattern to the larger hairy
            woodpecker, but it can be distinguished from the hairy by the presence of black spots
            on its white tail feathers.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Downy Woodpecker" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Laughing Dove.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Laughing Dove</h5>
          <p class="card-text" style="height: auto;">The laughing dove is a long-tailed, slim pigeon, typically 25 cm (9.8 in) in length. It is pinkish
            brown on the underside with a lilac tinged head and neck. The head and underparts are pinkish.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Laughing Dove" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Lovebirds.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Lovebirds</h5>
          <p class="card-text" style="height: auto;">There are nine species of lovebirds, and all belong to the genus Agapornis, though only a few are typically
            available as pets; namely the peach-faced, masked and Fischer’s lovebirds.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Lovebirds" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Grey Parrot.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Grey Parrot</h5>
          <p class="card-text" style="height: auto;">The grey colour on the head and wings is generally darker than its body. The head and
            body feathers have slight white edges. The tail feathers are red. The species is found from Kenya to Ivory Coast.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Grey Parrot" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Pionus Parrot.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Pionus Parrot</h5>
          <p class="card-text" style="height: auto;">The Pionus parrot is the best kept secret of the bird world. It’s got all of
            the good qualities of the popular companion species, with few of the negative
            aspects that often occur with parrots.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Pionus Parrot" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Parakeets.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Parakeets</h5>
          <p class="card-text" style="height: auto;">Parakeets are among the most low-maintenance types of birds kept as pets, being
            among the smallest companion birds as well as relatively easy to train in their
            youth.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Parakeets" hidden>
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