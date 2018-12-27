<?php
include"helper12.php";
$eamount=$_REQUEST['amount'];
$ediscription=$_REQUEST['discription'];
$e_bill=$_REQUEST['e_bill'];
$e_date=$_REQUEST['date'];
$e_to=$_REQUEST['name'];
expense($eamount,$ediscription,$e_bill,$e_date,$e_to);	
header('location:form.php');

?>
