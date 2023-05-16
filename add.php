
<?php

include 'includes/db.inc.php';


$room1 = $_GET['room1'];
$room2 = $_GET['room2'];
$room3 = $_GET['room3'];




if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE room_switch_tb SET room1 = '$room1',  room2 = '$room2', room3 = '$room3'  WHERE id=1";


if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
 echo "Error updating record: " . $conn->error;
 }



$conn->close();

?>