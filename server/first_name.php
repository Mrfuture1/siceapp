<?php
	header("Content-Type: text/html; charset=utf-8");
	//include '../siceapp/sql/db_connector_S6.php';
	include '../sql/db_connector_S6.php';
	$sql = "select * from t_channel where fid=0 order by `order` asc"; //返回一级栏目，按升序排列
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$t_channel[$i]=array("id"=>$row[0],"title"=>$row[3]);
		$i=$i+1;
	}
    //echo json_encode($t_channel);
	//print_r($t_channel);
	exit(json_encode($t_channel));
    //$result=json_encode($t_channel);
    //$callback=$_POST['callback'];
    //echo $callback."($result)";
?>