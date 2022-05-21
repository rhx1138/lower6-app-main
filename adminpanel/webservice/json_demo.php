<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = $_REQUEST["x"];


//echo $obj;
$result=json_encode($obj);
echo $result;
//print_r($obj);
?>