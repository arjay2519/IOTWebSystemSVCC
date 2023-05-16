
<?php

include 'includes/db.inc.php';

date_default_timezone_set("Asia/Manila");
$time = date("Hi");
$current_time = intval($time);
$day = date("l");
$check = 0;
//$code = $_GET["code"];
$teacher_tap= $_GET["code"];
// $sql = "SELECT *  FROM sched_tb  where UID = $code";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {

//   while($row = $result->fetch_assoc()) 
//   {
//     $teacher_tap =  $row["teacher"];
//   }

// }


$sql = "SELECT * FROM sched_tb WHERE day ='$day' AND room = '1' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    $teacher = $row["UID"];


    $timein = intval($row["time_in_hrs"]. $row["time_in_min"]);
    $time_out = intval($row["time_out_hrs"]. $row["time_out_min"]);


            if ($teacher  == $teacher_tap)
            {


                if($current_time  >= $timein  && $current_time   <= $time_out )
                {
                $check+=1;

                echo $timein . ","  . $time_out .  ",";
              
                }

              

            }
  }

}

if($check > 0)
{
echo "1";
}

else
{
    echo "0" ;
}
?>