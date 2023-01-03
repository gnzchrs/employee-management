<?php
require_once '../components/connect_db.php';

$sql = "SELECT e.*, j.title as job_title FROM employee e
        INNER JOIN job_title j ON e.job_title_id = j.id";

$result = mysqli_query($conn, $sql);
$employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class='emp'>
  <h1>List of Employees</h1>
  <table>
  <?php
  echo "<table>";
  echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Job Title</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>";

  // Loop through the array and display each employee in a table row
  foreach ($employees as $employee) {
    echo "<tr>
          <td class='centered'>" . $employee['id'] . "</td>
          <td>" . $employee['first_name'] . "</td>
          <td>" . $employee['last_name'] . "</td>
          <td>" . $employee['job_title'] . "</td>
          <td>" . $employee['phone'] . "</td>
          <td>" . $employee['email'] . "</td>
           <td>
            <form>
              <button type='button' onclick='first()'>Click me</button> 
              <button type='button'>Click me</button>
            </form>
          </td>
        </tr>";
  }

  

  // Close the database connection
  mysqli_close($conn);
  ?>
  </table>
             
</script>
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
  }

  th {
     padding-left:20px;
    padding-right:20px;
    height: 100px;
    font-size: 20px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.15)
    ;
  }

  td {
    height: 30px;
    padding: 5px;
  }
.centered{
  text-align:center;
}
</style>