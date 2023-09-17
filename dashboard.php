<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Pet Shop Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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

    <div class="container text-center">
        <?php
            if(isset($_SESSION['user_id'])){
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['name'];
                $user_username = $_SESSION['user_username'];

                //$user_id = $_COOKIE['user_id'];
                //$user_name = $_COOKIE['name'];

                echo "<br><h2>Dashboard</h2><br><h5>Hii " . $user_name . "</h5><br>";

                $db_hostname = "127.0.0.1";
                $db_username = "root";
                $db_password = "";
                $db_name = "pet_shop_management_system";

                $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

                $sql = "SELECT * FROM user_accounts WHERE username='$user_username'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                echo "<table>";
                echo "<tr><th>Name</th><td>" . $row['name'] . "</td></tr>";
                echo "<tr><th>Username</th><td>" . $row['username'] . "</td></tr>";
                echo "<tr><th>Email</th><td>" . $row['email'] . "</td></tr>";
                echo "<tr><th>Mobile No</th><td>" . $row['mobile_number'] . "</td></tr>";
                echo "</table><br><br>";

                echo "<h3>Your Orders</h3><br>";
                $sql = "SELECT * FROM orders WHERE username='$user_username'";
                $result = mysqli_query($connection, $sql);
                if($result){
                    echo "<table class='center'>";
                    echo "<tr><th>Customer Name</th><th>Pet Purchased</th><th>Price</th><th>Email</th><th>Mobile</th><th>Comments</th><th>Order Time</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr><td>" . $row['name'] . "</td><td>" . $row['pet_name'] . "</td><td>" . $row['price'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile_number'] . "</td><td>" . $row['comments'] . "</td><td>" . $row['order_time'] ."</td></tr>";
                    }
                    echo "</table><br>";
                }
                else{
                    echo "No orders yet";
                }

                mysqli_close($connection);

                echo "<br><br><a href='logout.php'><button class='btn btn-primary'>Logout</button></a>";
            }
            else{
                echo "<h2>You are not logged in!</h2>";
                echo "<br><br><a href='login.php'><button class='btn btn-primary'>Go to Login page</button></a>";
            }
        ?>
    </div>

    <br><br>
    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
      <p class="float-end"><a href="#">Back to top</a></p>
      <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>