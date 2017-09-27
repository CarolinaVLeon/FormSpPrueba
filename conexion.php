<?php

function conexionSQL()
{
	$serverName = "(local)\SQLExpress"; 
    $connectionInfo = array( "Database"=>"FormPrub");
    $conn = sqlsrv_connect( $serverName, $connectionInfo);

    //echo $connectionInfo;
//if( $conn ) {
//     echo "Conexión establecida.<br />";
//}else{
//     echo "Conexión no se pudo establecer.<br />";
//     die( print_r( sqlsrv_errors(), true));
//}
return $conn;
}
?>
