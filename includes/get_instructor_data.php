<?php
include('db.inc.php');

$output= array();
$sql = "SELECT * FROM instructor_tb";

$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);

$columns = array(
	0 => 'uid',
	1 => 'instructor_name',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE uid like '%".$search_value."%'";
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
	$sql .= " ORDER BY uid desc";
}

if($_POST['length'] != -1)
{
	$start = $_POST['start'];
	$length = $_POST['length'];
	$sql .= " LIMIT  ".$start.", ".$length;
}	


$data = array();

$run_query = mysqli_query($conn,$sql);
$filtered_rows = mysqli_num_rows($run_query);
while($row = mysqli_fetch_assoc($run_query))
{
    $subarray = array();
    $subarray[] = $row['uid'];
    $subarray[] = $row['instructor_name'];
    $subarray[] = '<a uid="'.$row['uid'].'" class="btn btn-sm btn-danger instructorDelBtn">Delete</a>';
    $data[] = $subarray;

}

$output = array(
    'data' => $data,
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $total_all_rows,
    'recordsFiltered' => $filtered_rows,
);
echo json_encode($output);



