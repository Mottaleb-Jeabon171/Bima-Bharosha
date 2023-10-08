<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
<div>
                 <label for="exampleInputEmail1" class="form-label" style="font-weight: bold; font-size: 14px; ">Name Of Insurance Company</label>
                  <span style="color: red; font-size: 13px; line-height: 18px;">*</span>
                <select class="form-select" aria-label="Default select example" style="margin-bottom: 20px;" name="company_name" id="company_name" required>
                 
                  <option>Select</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                <option value="3">Three</option>
               </select>
</div>


<div>
  <p id="test"></p>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


<script>
    $(document).ready(function() {
      $('#company_name').on('change', function() {
        var company_name = $(this).val();
        // var parts = staffName2.split('_'); // Split the string based on the hyphen separator
        // var staff_id = parts[0]; // Assign the first part to staff_id variable
        // var staffName1 = parts[1]; // Assign the second part to staffName variable

        console.log(company_name);

        if (company_name !== 'none') {
          $.ajax({
            url: 'viewcomplain_ajax.php',
            type: 'POST',
            data: {
              company_name: company_name
            },
            success: function(response) {
              console.log(response);

              // Access individual values
              var name = response.name;
              console.log(name);
              // var mobile_number = response.mobile_number;
              // console.log(mobile_number);

              // var lunch = response.lunch;
              // var salary = response.salary;
              // var monthly_salary = response.monthly_salary;

              // // Process the values as needed
              // console.log('Breakfast: ' + breakfast);
              // console.log('Lunch: ' + lunch);
              // console.log('Dinner: ' + salary);
              $('#test').text(name);
              // $('#eating_meal').val(lunch);
              // if (salary == 0) {
              //   $('#salary').val(monthly_salary);
              // } else {
              //   $('#day_salary').val(salary);
              // }



              // Further processing or manipulation of the response
            },

            error: function(xhr, status, error) {
              console.log('Error:', error);
            }
          });
        } else {
          $('#bonus').empty();
          $('#salary').empty();
        }
      });
    });
  </script>
</body>
</html>