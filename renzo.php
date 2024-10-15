<?php
include('Templates/databaseConnection.php');

if (isset($_POST['submit'])) {
    $username      = $_POST['username'];
    $password      = $_POST['password'];
    $email         = $_POST['email'];
    $contactNumber = $_POST['contactNumber'];
    $address       = $_POST['address'];

    // Using prepared statements for better security
    $sql = "INSERT INTO signup (username, password, email, contactNumber, address) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    
    // Bind the parameters
    $stmt->bind_param("sssss", $username, $password, $email, $contactNumber, $address);
    
    // Execute the query and check for success
    if ($stmt->execute()) {
        "Signup successful!";
    } else {
        "Error: " . $stmt->error;
    }
    
    $stmt->close();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="Templates/bootstrap.min.css"> 
    <link rel="stylesheet" href="Templates/all.min.css">
    <style>
        html,body {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container-fluid {
            width: 100vh;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <form action="" method="POST" id="signupForm"></form>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="border: 2px solid gray;">
                    <div class="card-header">
                        <div class="row d-flex">
                            <h1 class="text-center">User Signup</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="username"><i class="fa-solid fa-user"></i> Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" form="signupForm" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password"><i class="fa-solid fa-lock"></i> Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" form="signupForm" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" form="signupForm" required>
                            </div>
                            <div class="col-md-6">
                                <label for="contactNumber"><i class="fa-solid fa-phone"></i> Contact Number</label>
                                <input type="tel" class="form-control" name="contactNumber" id="contactNumber" placeholder="Enter your contact number" form="signupForm" pattern="0[9][0-9]{9}" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="address"><i class="fa-solid fa-house"></i> Home Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter your address" form="signupForm" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success" name="submit" id="submit" form="signupForm">Submit</button>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="Templates/bootstrap.bundle.js"></script>
    <script src="Templates/all.min.js"></script>
  </body>
</html>
