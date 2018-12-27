<?php
function db_connect()
{
try
	{
		$pdo=new PDO("mysql:host=localhost; dbname=db7;","root","");
		return $pdo;
	}
catch(expression $e)
	{
	return false;
	}
	
}
function expense($eamount,$ediscription,$e_bill,$e_date,$e_to)	
 {
		if($dbo=db_connect())
 {
					 $stmt=$dbo->prepare("insert into expenses(eamount,ediscription,e_bill,e_date,e_to) 	values($eamount,'$ediscription','$e_bill','$e_date','$e_to')");
						  $stmt->execute();
						  if($stmt->rowcount()>0)
						  {
						  		echo "value inserted";
						  }
	 } 
	  else
	  {
	  	return false;
	  }

}
function exp1()	
{
		if($dbo=db_connect())
 		{
 		$stmt=$dbo->prepare("select * from expenses");
	  $stmt->execute();
	  return $stmt->fetchAll();
		}
}
?>
