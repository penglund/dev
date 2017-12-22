	<?php

// Loads the mssql connection script
include('dbconn.php'); // connection is stored in the $conn variable

$query = "SELECT * FROM contacts WHERE Name = 'penglund'";
$stmt = sqlsrv_query($conn,$query);
if($stmt==false)
{
	echo "Error to retrive the information";
	die(print_r(sqlsrv_errors(),TRUE));
}

$row=sqlsrv_fetch_array($stmt);

echo "The query succeeded : ".$row['Name'];

?>