 <?php
 
 if(isset($_POST['filterBtn']))
{
    $gens = $_POST['gens'];
    $sql_select = "SELECT * FROM registration_tb LIKE '%".$gens."%'";
    $stmt = $conn->query($sql_select);
    $registrants = $stmt->fetchAll();
    if(count($registrants) > 0) {
      echo "<h2>People who are registered:</h2>";
      echo "<table>";
      echo "<tr><th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>Gender</th>";
      echo "<th>Date</th></tr>";
      foreach($registrants as $registrant) {
        echo "<tr><td>".$registrant['name']."</td>";
        echo "<td>".$registrant['email']."</td>";
        echo "<td>".$registrant['gender']."</td>";
        echo "<td>".$registrant['date']."</td></tr>";
        }
        echo "</table>";
    } else {
      echo "<h3>No one is currently registered.</h3>";
    }
    
}
 else {
     $sql_select = "SELECT * FROM registration_tb";
     $stmt = $conn->query($sql_select);
    $registrants = $stmt->fetchAll();
    if(count($registrants) > 0) {
      echo "<h2>People who are registered:</h2>";
      echo "<table>";
      echo "<tr><th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>Gender</th>";
      echo "<th>Date</th></tr>";
      foreach($registrants as $registrant) {
        echo "<tr><td>".$registrant['name']."</td>";
        echo "<td>".$registrant['email']."</td>";
        echo "<td>".$registrant['gender']."</td>";
        echo "<td>".$registrant['date']."</td></tr>";
        }
        echo "</table>";
    } else {
      echo "<h3>No one is currently registered.</h3>";
    }
}

?>