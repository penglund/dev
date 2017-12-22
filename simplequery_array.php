	<?php

// Loads the mssql connection script
include('dbconn.php'); // connection is stored in the $conn variable

$query = "SELECT * FROM contacts WHERE Name like '%%'";
$result = sqlsrv_query($conn,$query);
if($result==false)
{
	echo "Error to retrive the information";
	die(print_r(sqlsrv_errors(),TRUE));
}

$object=sqlsrv_fetch_object($result);

echo '<pre>';
  print_r($object);
echo '</pre>';

$query = "SELECT * FROM contacts WHERE Name like '%%'";
$result = sqlsrv_query($conn,$query);
if($result==false)
{
	echo "Error to retrive the information";
	die(print_r(sqlsrv_errors(),TRUE));
}


while( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_NUMERIC) ) {
      echo $row[0].", ".$row[1]."<br />";
}

?>