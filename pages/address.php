<?php
require_once '../components/connect_db.php';

$sql = "SELECT a.id, e.last_name,e.first_name, a.street, a.city, a.state, a.zip 
        FROM address a 
        INNER JOIN employee e 
        ON a.employeeid = e.id";

$result = mysqli_query($conn, $sql);
$addresses = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<div class='emp'>
  <h1>Address</h1>
  <table>
  <?php
  echo "<table>";
  echo "<tr>
        <th>ID</th>
        <th>Employee Name</th>
       <th>Address</th>
       <th>Zip</th>
        <th>Actions</th>
      </tr>";

  // Loop through the array and display each employee in a table row
  foreach ($addresses as $address) {
    echo "<tr>
          <td class='centered'>" . $address['id'] . "</td>
          <td>" . $address['last_name'] . ", ".$address['first_name']."</td>
          <td>" . $address['street'] . ", ".$address['city'].", ".$address['state']."</td>
        <td>".$address['zip']."</td>
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