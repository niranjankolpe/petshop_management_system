<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp | Pet Shop Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pet_shop_management_system";

    $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobileNumber'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user_accounts (name, username, email, mobile_number, password) VALUES ('$name', '$username', '$email', '$mobile_number', '$password')";

    $result = mysqli_query($connection, $sql);
    if($result){
        echo "<br><br><div class='container text-center'><br><br><h2>" . $name . " your account has been created successfully!</h2></div>";
        echo "<br><div class='container text-center'><a href='login.php'><button class='btn btn-primary'>Go to Login Page</button></a></div>";
    }
    else{
        echo "<div class='container text-center'><br><br><h2>Error occured!<br>Account NOT created!</h2></div>";
    }

    mysqli_close($connection);
    ?>

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