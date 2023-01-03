<?php
// Connect to the database
require_once '../components/connect_db.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the file path from the form
  $file_path = "C:\xampp\htdocs\employee-management\assets\img\avatar.jpg";

  // Write a SQL UPDATE statement to insert the image into the database
  $sql = "UPDATE employee
          SET profile_picture = LOAD_FILE('$file_path')
          WHERE id = 1";

  // Execute the query
  mysqli_query($conn, $sql);
  echo "<script>console.log('nasudna')</script>";
  
}
// $sql1 = "SELECT * FROM employee WHERE id = 1";

// $result = mysqli_query($conn, $sql1);

// // Fetch the record from the result set
// $record = mysqli_fetch_assoc($result);

// // Get the MIME type and file extension of the image
// $mime_type = mime_content_type($record['profile_picture']);
// $file_extension = pathinfo($record['file_name'], PATHINFO_EXTENSION);

// Set the content type header
// header("Content-Type: $mime_type");
echo "This is";
?>

<!-- HTML form to collect the file path -->
<form method="post">
  <label for="file_path">File Path:</label><br>
  <input type="text" id="file_path" name="file_path"><br>
  <input type="submit" value="Submit" name="submit">
</form>

<!-- <div>
  <button type="button" onclick="openModalOnAvatar()">
  <img src=".
//   echo "http://localhost/employee-management/assets/img/avatar.jpg"; }
//  ." alt="Avatar" class='avatar'>
  </button>

  </div> -->
<style>
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}</style>