<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pet Shop Management System</title>
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
                    if(isset($_SESSION['user_id'])){
                      $user_id = $_SESSION['user_id'];
                      $user_name = $_SESSION['name'];

                      echo '<li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
                      echo $user_name;
                      echo "</a>";
                      echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="dashboard.php">Dashboard</a></li>
                      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                      <li hidden><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul></li>';
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

    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            session_start();

            $db_hostname = "127.0.0.1";
            $db_username = "root";
            $db_password = "";
            $db_name = "pet_shop_management_system";
        
            $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM user_accounts WHERE username='$username' AND password='$password'";

            $result = mysqli_query($connection, $sql);
            $row = mysqli_fetch_assoc($result);
            
            if($row){
                $_SESSION['user_id']  = $row['id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['user_username'] = $row['username'];
                //setcookie("user_id",   $row['id'],   time() + 3600);
                //setcookie("user_name", $row['name'], time() + 3600);
                echo "<div class='container text-center'><br><br><h2>@" . $username . "<br><br>Logged in successfully!</h2></div>";
            }
            else{
                echo "<div class='container text-center'><br><br><h2>Error occured!<br>Login unsuccessful!</h2></div>";
                mysqli_close($connection);
                session_destroy();
                exit;
            }

            echo "<br><div class='container text-center'><a href='dashboard.php'><button class='btn btn-primary'>Go to Dashboard</button></a></div>";

            mysqli_close($connection);
        }
        else{
            echo '<center><br><h2>Login</h2><br><br></center>
            <form action="login.php" method="post">
            <!-- Input Username -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input class="form-control" type="text" name="username" aria-label="default input example" required>
            </div>
            <!-- Input Password -->
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" aria-label="default input example" required>
            </div>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form><br><br>
        <p>Note: If you forgot your password, email us at admin@sahyadripetshop.com</p>';
        }
        ?> 
    </div><br><br>

    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>