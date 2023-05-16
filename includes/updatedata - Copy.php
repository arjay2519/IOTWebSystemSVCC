<?php
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
    case 'electricity1_turn_on':
        doElectricity1TurnOn();
        break;
    case 'electricity1_turn_off':
        doElectricity1TurnOff();
        break;
    case 'electricity2_turn_on':
        doElectricity2TurnOn();
        break;
    case 'electricity2_turn_off':
        doElectricity2TurnOff();
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
    function statusChecker($status){
        if($status == '1'){
            return "on";
        }else{
            return "off";
        }
    }

    function doElectricity1TurnOn(){
        // $query_check_on = mysqli_query($GLOBALS['conn'],"SELECT * FROM room_tb WHERE electricity1 = '1'");
        // if(mysqli_num_rows($query_check_on) > 0){
        //     echo "ALREADY ON";
        // }
        // else
        // {
            $id = $_POST['id'];
            $query = "UPDATE room_tb SET electricity1='1' WHERE id='$id' ";
            $query_run = mysqli_query($GLOBALS['conn'], $query);
            $query_checker = "SELECT * FROM room_tb WHERE id='$id'";
            $query_checker_run = mysqli_query($GLOBALS['conn'], $query_checker);
            $array = mysqli_fetch_array($query_checker_run);
            if($query_run)
            {
                $status = statusChecker($array['electricity1']);
                echo $status;
                // echo 'success';
            }
            else
            {
                echo 'failed';
            }
        // }

    }

    function doElectricity1TurnOff(){
        $id = $_POST['id'];
        $query = "UPDATE room_tb SET electricity1='0' WHERE id='$id' ";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        $query_checker = "SELECT * FROM room_tb WHERE id='$id'";
        $query_checker_run = mysqli_query($GLOBALS['conn'], $query_checker);
        $array = mysqli_fetch_array($query_checker_run);
        if($query_run)
        {
            $status = statusChecker($array['electricity1']);
            echo $status;
            // echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }
    function doElectricity2TurnOn(){
        $id = $_POST['id'];
        $query = "UPDATE room_tb SET electricity2='1' WHERE id='$id' ";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        $query_checker = "SELECT * FROM room_tb WHERE id='$id'";
        $query_checker_run = mysqli_query($GLOBALS['conn'], $query_checker);
        $array = mysqli_fetch_array($query_checker_run);
        if($query_run)
        {
            $status = statusChecker($array['electelectricityricity2']);
            echo $status;
            // echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }

    function doElectricity2TurnOff(){
        $id = $_POST['id'];
        $query = "UPDATE room_tb SET electricity2='0' WHERE id='$id' ";
        $query_run = mysqli_query($GLOBALS['conn'], $query);
        $query_checker = "SELECT * FROM room_tb WHERE id='$id'";
        $query_checker_run = mysqli_query($GLOBALS['conn'], $query_checker);
        $array = mysqli_fetch_array($query_checker_run);
        if($query_run)
        {
            $status = statusChecker($array['electricity2']);
            echo $status;
            // echo 'success';
        }
        else
        {
            echo 'failed';
        }
    }
?>