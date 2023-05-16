
<?php

include 'includes/db.inc.php';



$sql = "SELECT * FROM room_tb WHERE id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    echo $row["electricity"]. ",";

  }
}
?>