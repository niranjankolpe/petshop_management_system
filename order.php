<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order | Pet Shop Management System</title>
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

    <!-- Order Form -->
    <div class="container">
            <?php
              if(isset($_SESSION['user_id'])){
                echo '<div class="container text-center"><h1>Order Details</h1></div>';

                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['name'];

                $db_hostname = "127.0.0.1";
                $db_username = "root";
                $db_password = "";
                $db_name = "pet_shop_management_system";
                $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
                $sql = "SELECT * FROM user_accounts WHERE id='$user_id' AND  name='$user_name'";
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                mysqli_close($connection);

                echo 'Selected: <h4>' . $_POST['petName'] . '</h4><br>';
                echo 'Price: <h4>' . $_POST['price'] . '</h4><br>';
                
                echo '<form action="order_success.php" method="post" onsubmit="return confirm(Confirm Order?)">

                <input type="text" name="petName"  value="' . $_POST['petName'] . '" hidden>
                <input type="text" name="price"    value="' . $_POST['price'] . '"   hidden>
                <input type="text" name="username" value="' . $row['username'] . '"  hidden>

                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input class="form-control" type="text" name="name" aria-label="default input example">
                </div>

                <!-- Input Email address -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                </div>

                <!-- Input Mobile number -->
                <div class="mb-3">
                    <label for="mobileNumber" class="form-label">Mobile number</label>
                    <input class="form-control" type="text" name="mobileNumber" aria-label="default input example">
                </div>

                <!-- Input Feedback -->
                <div class="mb-3">
                  <label for="comments" class="form-label">Comments (Optional)</label>
                  <textarea class="form-control" name="comments"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary">Submit</button>

                </form>';
              }
              else{
                echo "<div class='container text-center'><br><br><h2>You are not logged in!</h2>";
                echo "<br><br><a href='login.php'><button class='btn btn-primary'>Go to Login page</button></a></div>";
              }
            ?>
    </div><br>
    <!-- Order Form End -->

    <!-- Footer -->
    <footer class="container mt-auto" style="position: fixed; bottom: 0%;">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p class="text-muted">© 2022–2023 Pet Shop Management System</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>