<?php
include('db.inc.php');
$room = $_GET['room'];

$output= array();
$sql = "SELECT * FROM sched_tb";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'id',
	1 => 'subject',
	2 => 'time_in_hrs',
	3 => 'time_out_hrs',
	4 => 'instructor_name',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE id like '%".$search_value."%'";
	$sql .= " OR subject like '%".$search_value."%'";
    $sql .= " OR time_in_hrs like '%".$search_value."%'";
	$sql .= " OR time_in_min like '%".$search_value."%'";
    $sql .= " OR time_out_hrs like '%".$search_value."%'";
	$sql .= " OR time_out_min like '%".$search_value."%'";
	$sql .= " OR instructor_name like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}

$query = mysqli_query($conn,$sql);
$count_all_rows = mysqli_num_rows($query);

$data = array();

$run_query = mysqli_query($conn,$sql);
$filtered_rows = mysqli_num_rows($run_query);
while($row = mysqli_fetch_assoc($run_query))
{
    if($row['day'] == 'wednesday' && $row['room'] == $room)
    {
        $subarray = array();
        $subarray[] = $row['id'];
        $subarray[] = $row['subject'];
        $subarray[] = $row['time_in_hrs'].':'.$row['time_in_min'];
        $subarray[] = $row['time_out_hrs'].':'.$row['time_out_min'];
        $subarray[] = $row['instructor_name'];
        $subarray[] = '<a data-toggle="modal" data-target="#updateModal" class="btn btn-sm btn-warning text-dark updateBtn">Edit</a>
        <a id="'.$row['id'].'" class="btn btn-sm btn-danger scheduleDelBtn">Delete</a>';
        $data[] = $subarray;
    }
}


     


$output = array(
    'data' => $data,
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_all_rows,
    'recordsFiltered' => $filtered_rows,
);
echo json_encode($output);
