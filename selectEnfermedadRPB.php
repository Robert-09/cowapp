<?php
include('functions.php');
//$tipo = $_GET['txtTi'];
$array = array();	
if($resultset=getSQLResultSet("SELECT * FROM enfermedadrpb")){
	
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		$e = array();
                $e['idenfermedadRPB'] = $row[0];
                $e['pregunta'] = $row[1];
                array_push($array,$e);
	}
        echo json_encode($array);
}
?>


