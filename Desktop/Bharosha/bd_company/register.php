<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bharosha";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// include('../dbconnect.php');

//   if(isset($_REQUEST['ExecutiveSignup'])){
//     // Checking for Empty Fields
//     if(($_REQUEST['ExecutiveName'] == "") || ($_REQUEST['ExecutiveEmail'] == "") || ($_REQUEST['ExecutivePassword'] == "")){
//       $regmsg = '<div class="alert alert-warning mt-2" role="alert"> All Fields are Required </div>';
//     } else {
//       $sql = "SELECT e_email FROM Executivelogin_tb WHERE e_email='".$_REQUEST['ExecutiveEmail']."'";
//       $result = $conn->query($sql);
//       if($result->num_rows == 1){
//         $regmsg = '<div class="alert alert-warning mt-2" role="alert"> Email ID Already Registered </div>';
//       } else {
//         // Assigning User Values to Variable
        // $ngoName = $_REQUEST['ngoName'];
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $sql = "INSERT INTO user_data(name, email, password) VALUES ('$name', '$email', '$password')";
        if($conn->query($sql) == TRUE){
          $regmsg = '<div class="alert alert-success mt-2" role="alert"> Account Succefully Created </div>';
        } else {
          $regmsg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account </div>';
        }
    }
//       }
//     }
//   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>

<div class="container pt-5" id="registration">
    <h2 class="text-center">Create an Account as User</h2>
    <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
            <form action="" class="shadow-lg p-4" method="POST">
          
              <!--  <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">NGO Name</label><input
                        type="text" class="form-control" placeholder="Name" name="ngoName">
                </div> -->
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="name" class="pl-2 font-weight-bold">Executive Name</label><input
                        type="text" class="form-control" placeholder="Name" name="name" pattern="[a-zA-Z\s]+" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input
                        type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9_%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <!--Add text-white below if want text color white-->
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">New
                        Password</label><input type="password" class="form-control" placeholder="Password"
                        name="password" required>
                </div>
                <button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold"
                    name="ExecutiveSignup">Sign Up</button>
                <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data
                    Policy and Cookie Policy.</em>
                <div class="text-center">
                    <p style="font-size:12px;">Already Have an Account?</p>
                </div>
                <div class="text-center"><a class="btn btn-success shadow-sm font-weight-bold"
                        href="ExecutiveLogin.php">Login</a></div>
                <?
                // php if(isset($regmsg)) {echo $regmsg; } 
                ?>
            </form>
        </div>
    </div>
</div>

<script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>