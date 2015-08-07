<?php
    //echo $_GET["id"];
	$id=$_POST["id"];
	header("Content-Type: text/html; charset=utf-8");
	include '../sql/db_connector_S6.php';
	$sql = "select * from t_channel where fid=".$id." order by `order` asc";      //返回对应id的二级栏目
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$channel[$i++]=array("title"=>$row[3]);
		
	}
	//print_r($channel);
	exit(json_encode($channel));
?>