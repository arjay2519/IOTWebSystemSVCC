
<?php

include 'includes/db.inc.php';

date_default_timezone_set("Asia/Manila");
$time = date("Hi");
$current_time = intval($time);
$check = 0;
//$code = $_GET["code"];
$room = $_GET["CB2-201"];
// $sql = "SELECT *  FROM sched_tb  where UID = $code";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {

//   while($row = $result->fetch_assoc()) 
//   {
//     $teacher_tap =  $row["teacher"];
//   }

// }


$sql = "SELECT * FROM room_tb";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $roomid = $row["id"];
    // $timein = intval($row["time_in_hrs"]. $row["time_in_min"]);
    // $time_out = intval($row["time_out_hrs"]. $row["time_out_min"]);
    if ($roomid  == $room)
    {

        if($row['status'] == '1' )
        {
            echo '1';
        }else{
            echo '0';
        }


    }
  }

}