	<?php
// Loads the mssql connection script
include('dbconn.php'); // connection is stored in the $conn variable

$result = "SELECT * FROM contacts WHERE Name = 'penglund'";
$stmt = sqlsrv_query($conn,$result);

$contacts = sqlsrv_fetch_object($result);

echo $contacts['Name'];






?>