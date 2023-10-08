<?php
// include('../dbconnect.php');
// session_start();

// if(!isset($_SESSION['is_Executivelogin'])){
//   if(isset($_REQUEST['ExecutiveEmail'])){
//     $ExecutiveEmail = mysqli_real_escape_string($conn,trim($_REQUEST['ExecutiveEmail']));
//     $ExecutivePassword = mysqli_real_escape_string($conn,trim($_REQUEST['ExecutivePassword']));
//     $sql = "SELECT e_email, e_pass FROM executivelogin_tb WHERE e_email='".$ExecutiveEmail."' AND e_pass='".$ExecutivePassword."' limit 1";
//     $result = $conn->query($sql);
    
//     if($result->num_rows == 1){
//       $_SESSION['is_Executivelogin'] = true;
//       $_SESSION['ExecutiveEmail'] = $ExecutiveEmail;
//       $_SESSION['ExecutivePassword'] = $ExecutivePassword;
//       // Redirecting to RequesterProfile page on Correct Email and Pass
//       echo "<script> location.href='ExecutiveDashboard.php'; </script>";
//       exit;
//     }

//     else {
//       $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
//     }
//   }
// } 
// else {
//   echo "<script> location.href='ExecutiveDashboard.php'; </script>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
    .custom-margin {
        margin-top: 8vh;
    }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="mb-3 text-center mt-5" style="font-size: 30px;">
        <i class="fas fa-pills"></i>
        <span>Bima Bharosha</span>
    </div>
    <p class="text-center" style="font-size: 20px;"><i class="fas fa-users text-danger"></i> <span>Login as User</span>
    </p>
    <div class="container-fluid mb-5">
        <div class="row justify-content-center custom-margin">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user"></i><label for="email" class="pl-2 font-weight-bold">Email</label><input
                            type="email" class="form-control" placeholder="Email" name="ExecutiveEmail"pattern="[a-z0-9_%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                        <!--Add text-white below if want text color white-->
                        <small class="form-text">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key"></i><label for="pass" class="pl-2 font-weight-bold">Password</label><input
                            type="password" class="form-control" placeholder="Password" name="ExecutivePassword"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"required>
                    </div>
                    <button type="submit"
                        class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Login</button>
                    <?php if(isset($msg)) {echo $msg; } ?>
                </form>
                <div class="text-center"><a class="btn btn-info mt-3 shadow-sm font-weight-bold"
                        href="../index.php">Back
                        to Home</a></div>
                <div class="text-center"><a class="btn btn-success mt-3 shadow-sm font-weight-bold"
                        href="../User/register.php">Create an Account Here...</a></div>
            </div>
        </div>
    </div>

    <!-- Boostrap JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>