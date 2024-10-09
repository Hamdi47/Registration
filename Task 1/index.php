<?php

include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <!-- Link to Bootstrap CSS for styling -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa;"> <!-- Light background color for the body -->

  <!-- Main container to hold the form -->
  <div class="container">
    <!-- Form container with background, padding, and centered alignment -->
    <div class="form-container" 
         style="background-color: #ffffff; padding: 30px; border-radius: 10px; 
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1); max-width: 600px; margin: 50px auto;">
      
      <!-- Form header with centered text -->
      <h1 style="text-align: center; margin-bottom: 20px; color: #343a40;">Registration Form</h1>
      
      <!-- Start of the form -->
      <form method="post">
        
        <!-- Name input field -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <!-- Name input styled with border-radius for rounded corners -->
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" style="border-radius: 5px;">
        </div>
        
        <!-- Age input field -->
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <!-- Age input styled with border-radius for rounded corners -->
          <input type="number" class="form-control" id="age" name="age" placeholder="Enter your age" style="border-radius: 5px;">
        </div>
        
        <!-- Gender dropdown field -->
        <div class="mb-3">
          <label for="gender" class="form-label">Gender</label>
          <!-- Gender dropdown styled with rounded corners -->
          <select name="gender" id="gender" class="form-control" style="border-radius: 5px;">
            <!-- Disabled default option -->
            <option value="" disabled selected>Select gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
          </select>
        </div>
        
        <!-- Course selection dropdown -->
        <div class="mb-3">
          <label for="course" class="form-label">Course</label>
          <!-- Course dropdown styled with rounded corners -->
          <select name="course" id="course" class="form-control" style="border-radius: 5px;">
            <!-- Disabled default option -->
            <option value="" disabled selected>Select the course</option>
            <option value="BS CS">BS CS</option>
            <option value="BS IT">BS IT</option>
            <option value="BS SE">BS SE</option>
          </select>
        </div>
        
        <!-- Submit button -->
        <input type="submit" name="submit" class="btn btn-primary" 
               style="margin-top: 20px; width: 100%; padding: 10px; font-weight: bold;" value="Submit">
      </form>
    </div> <!-- End of form container -->
  </div> <!-- End of main container -->
  <?php

  if(isset($_POST['submit']))
  {
    $na = $_POST['name'];
    $age = $_POST['age'];
    $gen = $_POST['gender'];
    $crs = $_POST['course'];

    $query = "INSERT INTO `students`(`name`, `age`, `gender`, `course`) VALUES ('$na','$age','$gen','$crs')";

    $result = mysqli_query($conn, $query);
    if ($result){
      echo "Data Inserted Successfully";
    } else {
      echo "Unable to enter data";
    }
  }
  ?>
</body>
</html>
