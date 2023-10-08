<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bharosha";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
//  if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//  }

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $mobile_number = $_POST["mobile_number"];
  $email = $_POST["email"];
  $code = $_POST["code"];
  $district = $_POST["district"];
  $state = $_POST["state"];
  $com_aginst = $_POST["com_aginst"];
  $company_name = $_POST["company_name"];
  $policy_type = $_POST["policy_type"];
  $complaint_type = $_POST["complaint_type"];
  $complaint_descr = $_POST["complaint_descr"];
  $identifier_type = $_POST["identifier_type"];
  // $flexRadioDefault = $_POST["flexRadioDefault"];
  // $flexRadioDefault1 = $_POST["flexRadioDefault1"];
  // $flexRadioDefault2 = $_POST["flexRadioDefault2"];
  // $flexRadioDefault3 = $_POST["flexRadioDefault3"];
  $long_field = $_POST["long_field"];
  $text_area = $_POST["text_area"];
  


  $test = $_FILES['file'];
  // print_r($test);
  $filename = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $size = $_FILES['file']['size'];
  //destination
  $dest = 'documents' . $filename;

  //extension
  $extn = pathinfo($filename, PATHINFO_EXTENSION);



  if (!in_array($extn, ['jpg', 'png', 'PNG', 'pdf', 'zip', 'docx'])) {
    // echo "You file extension must be .zip, .pdf, .jpg, .docx, .png";
  } elseif ($_FILES['file']['size'] > 10000000) { // file shouldn't be larger than 1Megabyte
    // echo "File too large!";
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong>File too large! Max file size 10 MB.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  } else {
    // move the uploaded (temporary) file to the specified dest
    if (move_uploaded_file($fileTmpName, $dest)) {
      //  $sql = "INSERT INTO 
      $sql_file = "INSERT INTO tb_data (filename)
      VALUES ('$filename')";

      if ($conn->query($sql_file) === TRUE) {
        // echo "File inserted successfully.";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    } else {
      // echo "Failed to upload file.";
    }
  }
  //  $sql = "INSERT INTO 
  $sql = "INSERT INTO tb_data (name, mobile_number, email, code, district, state, com_aginst, company_name, policy_type, complaint_type, complaint_descr, identifier_type, long_field, text_area,filename)
  VALUES ('$name', '$mobile_number', '$email', '$code', '$district', '$state', '$com_aginst', '$company_name', '$policy_type', '$complaint_type', '$complaint_descr', '$identifier_type', '$long_field', '$text_area','$filename')";

// $sql = "INSERT INTO tb_data (name, mobile_number, email, code, district, state, long_field, text_area,filename)
// VALUES ('$name', '$mobile_number', '$email', '$code', '$district', '$state','$long_field', '$text_area', '$filename')";

  if ($conn->query($sql) === TRUE) {
    // echo "Data inserted successfully.";
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success! </strong> Your entry hasbeen submitted successfully!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  } else {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error! </strong>We are facing some technical issues and entry was not submitted successfully! We regret the inconvinience caused!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }

  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bima Bharos</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
  <header class="container">
    <h1 style="margin-bottom: 5px; font-weight: 1000; color: rgb(39,23,108);font-size: 40px;margin-top: 10px;">Bima Bharosa</h1>
    <h2 style="font-size: 20px; margin-bottom: 5px; font-weight: 300;">An Integrated Grievance Management Portal</h2>
    <h3 style=" padding-bottom: 10px; font-size: 15px;
    margin-bottom: 15px; font-weight: 200;">(Earlier Known as IGMS)</h3>
    <header>



      <Main>
        <p style="font-size: 18px; color: black;">New Complaint Registration</p>
        <p style="font-size: 13px; color: #FF0000; line-height: 18px;">* marked fields are mandatory</p>


        <div class="container" style="font-size: 12px !important; background: #F5F6F9; border: 1px solid grey;">
          <form action="" method="post" enctype="multipart/form-data">
            <div>

              <h4 style="margin-top: 20px; padding-left: 0px; font-size: 20px; background-color: #006DD5; padding: 12px; color: #fff;font-size: 18px; line-height: 24px; margin-bottom: 0px;">Details</h4>

              <div class="row" style="margin-top:20px;">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;" >Name</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <input type="text" class="form-control" name="name" pattern="[a-zA-Z\s]+" required>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Mobile Number</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <input type="number" class="form-control" name="mobile_number" required>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;" >E-mail of Complainant</label>
                  <input type="email" class="form-control" name="email" pattern="[a-z0-9_%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                </div>
              </div>

            </div>

            <div>

              <h4 style="margin-top: 50px; padding-left: 40px; font-size: 20px; background-color: #006DD5; padding: 12px; color: #fff;font-size: 18px; line-height: 24px; margin-bottom: 0px;">Address Details</h4>

              <div class="row" style=" margin-top:20px;">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Pin Code <span style="font-size: 10px !important"> <span style="color: red; font-size: 13px; line-height: 18px;">* </span>Enter Atleast 4 digit</span></label>
                  <input type="text" class="form-control" name="code" pattern=".*\d{4,}.*" title="Please enter at least 4 digits" required>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">District</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <input type="text" class="form-control" name="district" pattern="[a-zA-Z-\s]+" required>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">State</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <input type="text" class="form-control" name="state" pattern="[a-zA-Z-\s]+" required>
                </div>
              </div>

            </div>


            <div>

              <h4 style="margin-top: 50px; padding-left: 40px; font-size: 20px; background-color: #006DD5; padding: 12px; color: #fff;font-size: 18px; line-height: 24px; margin-bottom: 0px; ">Insurance Company And Policy Details</h4>

              <div class="row" style=" margin-top:20px;">
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Complaint Against</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <select class="form-select" aria-label="Default select example" name="com_aginst" required>
                    <option style="color: grey;">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>

                <p style="padding-top: 10px; font-weight: bold; font-size: 14px;">Kindly note, some of the insurance companies merged with other existing insurance companies. If you have a complaint against a company which is not available in the below dropdown, then click here to check alternate company. Help?</p>
                
               <div>
                 <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px; ">Name Of Insurance Company</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                <select class="form-select" aria-label="Default select example" style="margin-bottom: 20px;" name="company_name" required>
                 
                  <option>Select</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                <option value="3">Three</option>
               </select>
</div>
               

                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Policy Type</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <select class="form-select" aria-label="Default select example" name="policy_type" required>
                    <option  style="color: grey;">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Complaint Type</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                  <select class="form-select" aria-label="Default select example" name="complaint_type" required>
                    <option  style="color: grey;">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col">
                  <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px;">Complaint Description Type</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>

                  <select class="form-select" aria-label="Default select example" name="complaint_descr" required>
                    
                    <option  style="color: grey;">Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>

            </div>


            <div>

              <h4 style="margin-top: 50px; padding-left: 40px; font-size: 20px; background-color: #006DD5; 
              padding: 12px; color: #fff;font-size: 18px; line-height: 24px; margin-bottom: 0px;">Policy Details</h4>

              <h6 style="margin-top: 20px;" style="font-weight: bold; font-size: 14px;">Indentifier Type <span style="color: red; font-size: 13px; line-height: 18px;">*</span></h6>
              

              <div class="row" style=" margin-top:20px;">
                <div class="col">
                  <input class="form-check-input" type="radio" name="identifier_type" value="Policy Number">
                  <label class="form-check-label" for="flexRadioDefault1" style="font-weight: bold; font-size: 14px;">
                    Policy Number
                  </label>
                </div>
                <div class="col">
                  <input class="form-check-input" type="radio" name="identifier_type" value="Proposal Number">
                  <label class="form-check-label" for="flexRadioDefault2" style="font-weight: bold; font-size: 14px;">
                    Proposal Number
                  </label>
                </div>
                <div class="col">
                  <input class="form-check-input" type="radio" name="identifier_type" value="Certificate Number">
                  <label class="form-check-label" for="flexRadioDefault3" style="font-weight: bold; font-size: 14px;">
                    Certificate Number
                  </label>
                </div>
                <div class="col">
                  <input class="form-check-input" type="radio" name="identifier_type" value="Claim Number">
                  <label class="form-check-label" for="flexRadioDefault4" style="font-weight: bold; font-size: 14px;">
                    Claim Number
                  </label>
                </div>
              </div>
              <p style="margin-top: 20px; font-weight: bold; font-size: 14px;">Policy / Proposal Number / Certificate of Insurance Number (In case of Group Insurance) /Claim Number (Mandatory for claim related complaints) <span style="color: red; font-size: 13px; line-height: 18px;">*</span></p>

              <div class="mb-3" style="margin-top:20px;">
                <label for=" disabledTextInput" class="form-label"></label>
                <input type="number" name="long_field" id="disabledTextInput" class="form-control" placeholder="">
              </div>


            </div>


            <div>

              <h4 style="margin-top: 50px; padding-left: 40px; font-size: 20px; background-color: #006DD5; padding: 12px; color: #fff;font-size: 18px; line-height: 24px; margin-bottom: 0px;">Complaint Description</h4>

              <div class="row" style=" margin-top:20px;">
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label" style="font-weight: bold; font-size: 14px;" name="textarea">Complaint Details <span style="font-size: 12px! important; color: red;"> (Max 4000 characters allowed)(Special characters which are not allowed ~ ! @ # $ ^ & ; " ' [])</span></label>
                  <textarea class="form-control" name="text_area" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="formFileLg" class="form-label" style="font-weight: bold; font-weight: bold; font-size: 14px;">
                    Upload Attachment</label>
                  <input class="form-control form-control-lg" id="formFileLg" name="file" type="file">
                  <p style="font-weight: bold; font-size: 14px; margin-top: 5px;">- Upload only PDF,JPG,JPEG and PNG files</p>
                  <p style="font-weight: bold; font-size: 14px; margin-top: 3px; !important">- Max file size 10 MB</p>
                  <div style="margin-left: 365px; padding-top: 20px; ">
                  <input type="submit" style="margin-right: 4px; width: 100px;" class="btn btn-primary" value="Register">
                    <!-- <button type="submit" class="btn btn-primary" style="margin-right: 4px; width: 100px;" name="button">Register</button> -->
                    <button type="button" class="btn btn-light" style="width: 100px;">Back</button>
                  </div>
                </div>





              </div>
          </form>
        </div>












      </Main>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>

</html>