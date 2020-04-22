<?php
// $serverName = "MSI\SQLEXPRESS"; //serverName\instanceName
// $connectionInfo = array( "Database"=>"db_learn", "UID"=>"sena", "PWD"=>"sena");
// $conn = sqlsrv_connect( $serverName, $connectionInfo);


$conn = new PDO("sqlsrv:Server=MSI\SQLEXPRESS;Database=db_learn", "sena", "sena");


?>		