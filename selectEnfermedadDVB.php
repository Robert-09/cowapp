<?php
include('https://github.com/Robert-09/cowapp.git/functions.php');
//$tipo = $_GET['txtTi'];
$array = array();	
if($resultset=getSQLResultSet("SELECT * FROM enfermedadDVB")){
	
	while ($row = $resultset->fetch_array(MYSQLI_NUM)){
		$e = array();
                $e['idenfermedadDVB'] = $row[0];
                $e['pregunta'] = $row[1];
                array_push($array,$e);
	}
        echo json_encode($array);
}
?>


