<?php
error_reporting(0);
include_once 'db.inc.php';
// $url = $_GET['url'];
$action = $_GET['action'];
switch ($action) {
    case 'add_schedule':
        doAddSchedule();
        break;
	case 'update_schedule':
	    doUpdateSchedule();
        break;
    case 'delete_schedule':
        doDeleteSchedule();
        break;
    case 'user_register':
        doUserRegister();
        break;
    case 'instructor_register':
        doInstructorRegister();
        break;
    case 'instructor_delete':
        doInstructorDelete();
	   break;
    case 'delete_all_sched':
        doDeleteAllSchedule();
        break;
    case 'delete_all_instructor':
        doDeleteAllInstructor();
        break;
    case 'electricity_turn_on':
        doElectricityTurnOn();
        break;
    case 'electricity_turn_off':
        doElectricityTurnOff();
        break;
}
    function doAddSchedule(){
        //$id = $_POST['add_id'];
        $instructor_uid = $_POST['add_instructor'];
        $room = $_POST['room'];
        $day = $_POST['day'];
        $subject = $_POST['add_subject'];
        $timein_hrs = $_POST['timein_hrs'];
        $timein_min = $_POST['timein_min'];
        $timeout_hrs = $_POST['timeout_hrs'];
        $timeout_min = $_POST['timeout_min'];
        $add_instructor = $_POST['instructor']; 
        $uid = $instructor_uid;
        $query = "INSERT INTO sched_tb (day,subject,time_in_hrs,time_in_min,time_out_hrs,time_out_min,room,instructor_name,UID) VALUES ('$day','$subject','$timein_hrs','$timein_min','$timeout_hrs','$timeout_min','$room','$add_instructor','$uid')";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }

    }

    function doUpdateSchedule(){
        $id = $_POST['update_id'];
        $instructor_uid = $_POST['update_instructor'];
        $subject = $_POST['update_subject'];
        $time_in_hrs = $_POST['time_in_hrs'];
        $time_in_min = $_POST['time_in_min'];
        $time_out_hrs = $_POST['time_out_hrs'];
        $time_out_min = $_POST['time_out_min'];
        $update_instructor = $_POST['updateinstructor'];
        $uid = $instructor_uid;
        $query = "UPDATE sched_tb SET subject='$subject',time_in_hrs='$time_in_hrs', time_in_min='$time_in_min', time_out_hrs='$time_out_hrs', time_out_min='$time_out_min', instructor_name='$update_instructor', UID='$uid' WHERE id='$id' ";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            $data = array(
                'status'=>'success',
               
            );
        
            echo json_encode($data);
        }
        else
        {
            $data = array(
                'status'=>'failed',
              
            );
            echo json_encode($data);
        }
    }

    function doDeleteSchedule(){
        $id = $_POST['id'];
        $query = "DELETE FROM sched_tb WHERE id = ".$id;
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }

    function doUserRegister(){
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $query = "INSERT INTO user_tb (role,name,username,password) VALUES ('$role','$name','$username','$password')";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }

    function doInstructorRegister(){
        $instructor = $_POST['instructor_name'];
        $query = "INSERT INTO instructor_tb (instructor_name) VALUES ('$instructor')";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }

    function doInstructorDelete(){
        $uid = $_POST['uid'];
        $query = "DELETE FROM instructor_tb WHERE uid = '$uid'";
        $query2 = "DELETE FROM sched_tb WHERE UID = '$uid'";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        $query_run2 = mysqli_query($GLOBALS['conn'], $query2);
        if($query_run)
        {
            $data = array(
                'status'=>'success',
               
            );
        
            echo json_encode($data);
        }
        else
        {
            $data = array(
                'status'=>'failed',
              
            );
            echo json_encode($data);
        }
    }

    function doDeleteAllSchedule(){
        $query = "DELETE FROM `sched_tb`";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }

    }

    function doDeleteAllInstructor(){
        $query = "DELETE FROM `instructor_tb`";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }
    
    function doElectricityTurnOn(){
        $id = $_POST['id']; 
        $room = 'room'.$id;
        echo "room: ".$id;
        $query_switch_checker = mysqli_query($GLOBALS['conn'], "SELECT * FROM room_switch_tb");
        if(mysqli_num_rows($query_switch_checker) > 0){
            while($row = $query_switch_checker->fetch_assoc()){
             $value = $row[$room];

             echo "asd:". $value;
          
            }

        }
        else
        {
               
        }

        if($value == 0){
            $data= array(
                'status'=> '1',
              
            );
            echo json_encode($data);
            // $status = "true";
          

        }
        if($value == 1){
            $query = "UPDATE room_tb SET electricity='1' WHERE id='$id' ";
            $query_run = mysqli_query($GLOBALS['conn'], $query);
            if($query_run)
            {
                $data = array(
                    'status'=> '0',
                  
                );
                echo json_encode($data);

                // $status = "failed";

                

            }
            else
            {
                echo 'failed';

            }
        }
        // while($value == 1){
        //     $start_time = date('Y-m-d H:i:s');; // get the start time
        // }
    }

    function doElectricityTurnOff(){
        $id = $_POST['id'];
        $query = "UPDATE room_tb SET electricity='0' WHERE id='$id' ";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        // $end_time = date('Y-m-d H:i:s');
        // saveEndTime($end_time); // save the end time (you would need to define this function)
        if($query_run)
        {
            echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }
    // function saveEndTime($end_time) {
    //       $query = "UPDATE room_tb SET end_time='$end_time' WHERE id='1'";
    //       $query_run = mysqli_query($GLOBALS['conn'], $query);
    //       if($query_run)
    //         {
    //             echo 'success';
    //         }
    //         else
    //         {
    //             echo 'failed';
    //         }
    //     }
?>