<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dog | Pet Shop Management System</title>
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
        <h1>Dog</h1><br>
        <div class="container" style="width: 65%;"><h3>Dogs are hairy, cute and extremely loyal animals. Keeping you entertained and protecting your house is what they are good at.</h3></div>
        <br><br>
        <h4>Find below your dream dog.</h4><br>

        <!-- Card No. 1 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="German Shepherd.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">German Shepherd</h5>
          <p class="card-text" style="height: auto;">German Shepherds were the 
            search and rescue dogs crawling through the ruins of the World Trade Center after the 
            9/11 terrorist attacks, looking for survivors.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="German Shepherd" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 2 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Labrador.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Labrador</h5>
          <p class="card-text" style="height: auto;">Retriever is characteristically 
            rugged, even-tempered, and gentle. It has been used in military and police 
            work, as a rescue dog. An ideal family pet, it became the most popular dog breed in 
            the US.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value=" Labrador" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 3 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Mudhol Hound.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Mudhol Hound</h5>
          <p class="card-text" style="height: auto;">The Mudhol hound is one of the most healthy dogs to have around and no particular
            health issues. Their lineage and breeding has made sure that they can combat the
            Indian weather conditions.</p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Mudhol Hound" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div><br><br>

        <!-- Card No. 4 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Pug.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Pug</h5>
          <p class="card-text" style="height: auto;"> A bit
            mischievous but beloved by owners, this breed is ideal for laid-back homes and those
            who like to dote on their pet. But pugs come with common health challenges too.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Pug" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 5 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Pomeranian.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Pomeranian</h5>
          <p class="card-text" style="height: auto;">Pomeranians come in a wonderful array of colors. A rich red is most commonly
            associated with the breed, but everything from black to white to sable and shades in
            between are acceptable.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Pomeranian" hidden>
            <input type="text" name="price" value="1000" hidden>
            <input type="submit" name="submit" value="Buy" class="btn btn-primary">
          </form>
          </div>
        </div>

        <!-- Card No. 6 -->
        <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="width: 25%; display: inline-block; margin: 2%;">
          <img src="Golden Retriever.jpg" class="card-img-top" alt="Pet Image" style="height: 200px;">
          <div class="card-body">
          <h5 class="card-title">Golden Retriever</h5>
          <p class="card-text" style="height: auto;">Golden retrievers are smart, loyal dogs that are ideal family companions. With
            their gentle nature, they are considered one
            of the most popular breeds in America.
            </p>
          <form action="order.php" method="post">
            <input type="text" name="petName" value="Golden Retriever" hidden>
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