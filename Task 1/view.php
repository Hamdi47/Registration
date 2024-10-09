<?php
include('connection.php')

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Table</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa;"> <!-- Light background for the page -->
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-9">
        <!-- Table container with a card-style background and shadow -->
        <div class="table-container" style="background-color: #ffffff; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);">
          <!-- Table-responsive makes the table scrollable on small screens -->
          <div class="table-responsive">
            <table class="table table-hover table-bordered" style="border-collapse: collapse; border-spacing: 0;">
              <thead style="background-color: #007bff; color: white;">
                <tr>
                  <!-- Styling for header -->
                  <th scope="col" style="padding: 12px;">#</th>
                  <th scope="col" style="padding: 12px;">Name</th>
                  <th scope="col" style="padding: 12px;">Age</th>
                  <th scope="col" style="padding: 12px;">Gender</th>
                  <th scope="col" style="padding: 12px;">Course</th>
                  <th scope="col" style="padding: 12px;">Action</th><!--Tab for delete and edit-->
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM `students`";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0) {
                  $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
                } else {
                  $students = [];
                  
                }


                ?>
                <?php if(!empty($students)): ?>
                  <?php foreach($students as $students): ?>
                    <tr>
                      <th scope="row" style="paddingP: 12px;"><?php echo $students['id'] ?></th>
                      <td style="paddin: 12px;"><?php echo $students['name'] ?></td>
                      <td style="paddin: 12px;"><?php echo $students['age'] ?></td>
                      <td style="paddin: 12px;"><?php echo $students['gender'] ?></td>
                      <td style="paddin: 12px;"><?php echo $students['course'] ?></td>
                      <td style="padding: 12px;">
                        <!-- Edit Button -->
                        <a href="edit_user.php?id=<?php echo $students['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <!-- Delete Button -->
                        <a href="delete.php?id=<?php echo $students['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php else:?>
                  <tr>
                    <td colspan="5" style="textalign: center; padding: 12px;">No Records Found</td>
                  </tr>
                <?php endif; ?>          
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
