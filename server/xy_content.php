<?php
	header("Content-Type: text/html; charset=utf-8");
	include 'sql/db_connector_S6.php';
	$sql = "select content from t_content where fid=27"; //返回学院简介
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$jianjie[$i]= $row;
		$i=$i+1;
	}
    /*
	$sql = "select content from t_content where fid=10"; //返回学院简介
	$dbo->query($sql);
	
	while($row = $dbo->read())
	{
		$jianjie[$i]= $row;
		$i++;
	}
	*/
	//print_r ($jianjie)
	exit(json_encode($jianjie));
    //$result=json_encode($t_channel);
    //$callback=$_POST['callback'];
    //echo $callback."($result)";
?>