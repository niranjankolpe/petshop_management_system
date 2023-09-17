<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Pet Shop Management System</title>
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

    <?php

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pet_shop_management_system";

    $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    echo "<div class='container text-center'>";
    echo "<br><h1>Pet Shop Management System</h1><br><br>";

    echo "<h3>Orders Report</h3><br>";
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($connection, $sql);
    echo "<table class='center'>";
    echo "<tr><th>Sr. No.</th><th>Customer Name</th><th>Username</th><th>Pet Purchased</th><th>Price</th><th>Email</th><th>Mobile</th><th>Comments</th><th>Order Time</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['username'] . "</td><td>" . $row['pet_name'] . "</td><td>" . $row['price'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile_number'] . "</td><td>" . $row['comments'] . "</td><td>" . $row['order_time'] ."</td></tr>";
    }
    echo "</table><br><br><br>";

    echo "<h3>User Accounts Report</h3><br>";
    $sql = "SELECT * FROM user_accounts";
    $result = mysqli_query($connection, $sql);
    echo "<table class='center'>";
    echo "<tr><th>Sr. No.</th><th>Customer Name</th><th>Username</th><th>Password</th><th>Email</th><th>Mobile</th><th>SignUp Time</th></tr>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>" . $row['email'] . "</td><td>" . $row['mobile_number'] . "</td><td>" . $row['signup_time'] ."</td></tr>";
    }
    echo "</table>";

    echo "</div><br><br>";

    mysqli_close($connection);
    ?>

    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>