<?php
include('db.inc.php');
$room_query = "SELECT room FROM room_tb WHERE electricity1==='1' || electricity1==='0' || electricity2==='1' || electricity2==='0'";
$room_result = $room_query;
$room = $room_result;
$output= array();
$sql = "SELECT * FROM room_tb";



$totalQuery = mysqli_query($conn,$sql);
$total_all_rows = mysqli_num_rows($totalQuery);
$columns = array(
	0 => 'id',
	1 => 'room',
	2 => 'brand',
	3 => 'date_of_purchase',
);

if(isset($_POST['search']['value']))
{
	$search_value = $_POST['search']['value'];
	$sql .= " WHERE id like '%".$search_value."%'";
    $sql .= " OR room like '%".$search_value."%'";
    $sql .= " OR brand like '%".$search_value."%'";
	$sql .= " OR date_of_purchase like '%".$search_value."%'";
}

if(isset($_POST['order']))
{
	$column_name = $_POST['order'][0]['column'];
	$order = $_POST['order'][0]['dir'];
	$sql .= " ORDER BY ".$columns[$column_name]." ".$order."";
}
else
{
	$sql .= " ORDER BY room asc";
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
    $subarray[] = $row['room'];
    // $subarray[] = $row['brand'];
    if($row['brand'] == "Carrier"){
    	$subarray[] = "<p id='tooltip'><span id='tooltipText'>Carrier is one of the Philippines most established and leading providers of airconditioning solutions.</span><span>Carrier</span></p>";
    }else{
    	$subarray[] = $row['brand'];
    }
    $subarray[] = $row['date_of_purchase'];
    // $subarray[] = $row['electricity'];
    if($row['electricity'] == "1"){
    	$subarray[] = '<a id="'.$row['id'].'"class="electricityBtnOff"><button class="btn btn-danger">OFF</button></a>';
    }else{
    	$subarray[] = '<a id="'.$row['id'].'"class="electricityBtnOn"><button class="btn btn-success">ON</button></a>';
    }
    $data[] = $subarray;

}

$output = array(
    'data' => $data,
    'draw' => intval($_POST['draw']),
    'recordsTotal' => $count_all_rows,
    'recordsFiltered' => $filtered_rows,
);
echo json_encode($output);
