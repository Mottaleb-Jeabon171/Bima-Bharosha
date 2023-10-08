<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bharosha";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_name = $_POST['company_name'];
    // Prepare and execute the database query
    $sql = "SELECT * FROM tb_data WHERE  com_aginst = '$company_name'";
    $result = $conn->query($sql);
  
    // $result = $db->execute($sql, [$staff_name1, $project_name_id]);

    if ($result) {
        // Fetch the result
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $mobile_number = $row['mobile_number'];
        $email = $row['email'];
        $code = $row['code'];
        $district = $row['district'];
        $state = $row['state'];
        $com_aginst = $row['com_aginst'];
        $company_name = $row['company_name'];
        $policy_type = $row['policy_type'];
        $complaint_type = $row['complaint_type'];
        $complaint_descr = $row['complaint_descr'];
        $identifier_type = $row['identifier_type'];
        $long_field = $row['long_field'];
        $text_area = $row['text_area'];
        $filename = $row['filename'];
       
    } 
    else {
        // Handle database query error
        // $breakfast = 0;
        // $lunch = 0;
        // $salary = 0;
        // $monthly_salary = 0;
        // // Log the error or return an appropriate response
        // echo "Error fetching data from the database.";
        // exit;
    }

 

    // Create an associative array with the values
    $response = array(
        'name' => $name,
        'mobile_number' => $mobile_number,
        'email' => $email,

        'code' => $code,
        'district' => $district,
        'state' => $state,
        'com_aginst' => $com_aginst,
        'company_name' => $company_name,
        'policy_type' => $policy_type,
        'complaint_type' => $complaint_type,
        'complaint_descr' => $complaint_descr,

        'identifier_type' => $identifier_type,
        'long_field' => $long_field,
        'text_area' => $text_area,
        'filename' => $filename,

    );

    // Encode the response as JSON
    $responseJSON = json_encode($response);

    if ($responseJSON === false) {
        // JSON encoding failed
        $errorMessage = 'Error encoding JSON: ' . json_last_error_msg();
        // Log the error or return an appropriate response
        echo $errorMessage;
    } else {
        // Set the content type header
        header('Content-Type: application/json');
        // Output the JSON response
        echo $responseJSON;
    }

   
}

?>