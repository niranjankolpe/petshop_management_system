<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php

    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "pet_shop_management_system";

    $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    /*if($connection){
        echo "<center><h1>Connection Successful</h1></center><br>";
    }
    else{
        echo "<center><h1>Connection Failed</h1></center><br>". mysqli_connect_error();
    }*/

    $name = $_POST['name'];
    $username = $_POST['username'];
    $pet_name = $_POST['petName'];
    $price = $_POST['price'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobileNumber'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO orders (name, username, pet_name, price, email, mobile_number, comments) VALUES ('$name', '$username', '$pet_name', '$price', '$email', '$mobile_number', '$comments')";

    $result = mysqli_query($connection, $sql);

    /*if($result){
        echo "<center><h1>Data Inserted Successfully</h1></center><br>";
    }
    else{
        echo "<center><h1>Data Insertion Failed</h1><br><h2>Error: " . mysqli_error($connection) . "</h2></center><br>";
    }*/

    mysqli_close($connection);

    echo '<center><br><br><h1>Your order has been placed successfully!</h1><br>';
    echo '<h2>Thank you @' . $username . ' for using our platform!</h2><br><br>';
    echo '<big>You may collect your pet at our shop location<br><b>Pet Shop Management System, ABC Road, Mumbai</b></big></center><br><br>';
    ?><br>
    <center><a href="index.php" style="width: 8%;" target="_self" class="btn btn-primary">OK</a></center>
    
</body>
</html>