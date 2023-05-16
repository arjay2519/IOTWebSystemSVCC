<?php
include('db.inc.php');
// $room_query = "SELECT room FROM room_tb WHERE electricity1==='1' || electricity1==='0' || electricity2==='1' || electricity2==='0'";
// $room_result = $room_query;
// $room = $room_result;
$output= array();
$sql = "SELECT * FROM room_switch_tb";


$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);
$columns = array(
	0 => 'id',
	1 => 'room1',
	2 => 'room2',
	3 => 'room3',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE id like '%".$search_value."%'";
    $sql .= " OR room1 like '%".$search_value."%'";
	$sql .= " OR room2 like '%".$search_value."%'";
	$sql .= " OR room3 like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY id asc";
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
    $subarray = array();
    $subarray[] = $row['id'];
    $subarray[] = $row['room1'];
    $subarray[] = $row['room2'];
    $subarray[] = $row['room3'];
    $data[] = $subarray;

}

$output = array(
    'data' => $data,
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_all_rows,
    'recordsFiltered' => $filtered_rows,
);
echo json_encode($output);
