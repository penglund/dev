	<?php
// Loads the mssql connection script
include('dbconn.php'); // connection is stored in the $conn variable

$query = "SELECT * FROM contacts";
$stmt = sqlsrv_query($conn,$query);

if($query) {
	
	while( $obj = sqlsrv_fetch_object( $query)) {
      echo $obj->Name.", ".$obj->MobileNumber."<br />";
		
		echo '<pre>';
		print_r($obj);
		echo '</pre>';
	
}


?>