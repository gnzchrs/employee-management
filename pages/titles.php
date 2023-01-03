<?php
require_once '../components/connect_db.php';

$sql = "SELECT * FROM `job_title`";

$result = mysqli_query($conn, $sql);
$titles = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class='emp'>
  <h1>Job Titles</h1>
  <?php
  echo "<table>";
  echo "<tr>
        <th>ID</th>
        <th>Job Title</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>";

  // Loop through the array and display each employee in a table row
  foreach ($titles as $job) {
    echo "<tr>
          <td class='centered'>" . $job['id'] . "</td>
          <td>" . $job['title'] . "</td>
          <td>".$job['description']."</td>
        </tr>";
  }

  echo "</table>";

  // Close the database connection
  mysqli_close($conn);
  ?>
</div>


<style>
  h1 {
    font-family: 'Poppins-Bold';
    text-align: center;
    margin: 15px;
  }

  .emp {
    padding: 10px
  }

  th,
  td {
    font-family: 'Poppins-Regular'
  }

  table {
    border-radius: 20px;
    padding: 15px;
    box-shadow: 0px 18.332px 25.800px -11.664px rgba(0, 0, 0, 0.2), 0px 40px 63.320px 5.000px rgba(0, 0, 0, 0.14), 0px 15.000px 76.640px 13.332px rgba(0, 0, 0, 0.12);
  margin:20px;
  }
.centered{
  text-align:center;
}
  th {
    width: 150px;
    height: 100px;
    font-size: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15)
    ;
  }

  td {
    height: 30px;
    padding: 15px;
  }
</style>