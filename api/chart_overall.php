<?php
header('Content-Type: application/json');

require_once('config.php');
$servername = DBHOST;
$username = DBUSER;
$password = DBPWD;
$dbname = DBNAME;
// Create connection
$conn_logodb = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn_logodb->connect_error) {
    die("Connection failed: " . $conn_logodb->connect_error);
}

// for ($x = 1; $x <= 12; $x++) {
//     echo "The number is: $x <br>";
//   }

//   for ($i = 1; $i <= 12; $i++) {
//     $months[] = date("Y-m%", strtotime( date( 'Y-m-01' )." -$i months"));
//     print_r($months);
// }

//if( isset($_GET['all']) ) {

  $toDay = date('j');
  $toMonth = date('m');
  $toYear = date('Y');
//echo date('Y');
for ($x22 = 1; $x22 <= $toDay; $x22++) {
    //echo "The number is: $x <br>";

    $sqlQuery = "SELECT SUM(payment_amount) as tsales FROM `payment` WHERE YEAR(`create_at`) = $toYear AND MONTH(`create_at`) = $toMonth AND DAY(`create_at`) = $x22";
    //echo $sqlQuery."<br>";
    $result_lead = $conn_logodb->query($sqlQuery);
    //$result = mysqli_query($conn,$sqlQuery);
    $row_lead = $result_lead->fetch_array(MYSQLI_ASSOC);
    //echo "Sales for the Month of: ".$months[$x]." is: ".$row_lead['tsales']."<br>";
    
    $unencoded22[] = array(
        'id' => $x22,
        'day' => $x22 . "-" .date("M"),   //$months[$x],
        'sales' => isset($row_lead['tsales']) ? $row_lead['tsales']:'0'
    );


  }
  //echo json_encode($unencoded);
  //echo json_encode(['current' => $unencoded22]);
//exit();

//}

$month = time();
for ($i = 1; $i <= 12; $i++) {
  $month = strtotime('last month', $month);
  $months[] = date("m", $month).', '.date("Y", $month);
}
//print_r($months);

$unencodedArray = [];
for ($x = 0; $x <= 11; $x++) {
    $newmonth = explode(",",$months[$x]);
    $sqlQuery = "SELECT SUM(payment_amount) as tsales FROM `payment` WHERE YEAR(`create_at`) = $newmonth[1] AND MONTH(`create_at`) = $newmonth[0]";
    //echo $sqlQuery."<br>";
    $result_lead = $conn_logodb->query($sqlQuery);
    //$result = mysqli_query($conn,$sqlQuery);
    $row_lead = $result_lead->fetch_array(MYSQLI_ASSOC);
    //echo "Sales for the Month of: ".$months[$x]." is: ".$row_lead['tsales']."<br>";
    
    $unencoded[] = array(
        'id' => $x,
        'month' => substr(date("F", mktime(0, 0, 0, $newmonth[0], 10)), 0, 3).','.$newmonth[1],   //$months[$x],
        'sales' => isset($row_lead['tsales']) ? $row_lead['tsales']:'0'
    );
    //array_merge($unencodedArray,$unencoded);
  }
  
  //print_r($unencoded);

//$sqlQuery = "SELECT SUM(payment_amount) as tsales FROM `payment` WHERE YEAR(`create_at`) = 2021 AND MONTH(`create_at`) = 9";

// $result = mysqli_query($conn,$sqlQuery);

// $data = array();
// foreach ($result as $row) {
// 	$data[] = $row;
// }

// mysqli_close($conn);

//echo json_encode($unencoded);
echo json_encode( ['current' => $unencoded22, 'monthly' => $unencoded] )
?>