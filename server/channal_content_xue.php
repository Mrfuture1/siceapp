<?php
	header("Content-Type: text/html; charset=utf-8");
	//include 'file:///Macintosh HD/Users/lichunlei/include/db_connector_S6.php';
	include '../sql/db_connector_S6.php';
	$sql = "select id from t_channel where name='学院动态'";      //返回学院动态id
	$dbo->query($sql);
	while($row = $dbo->read())
	{
		$id=$row[0];
	}
	$sql = "select * from t_content where fid=".$id." order by posttime desc";      //返回学院动态下文章，按时间降序
	$dbo->query($sql);
	$i=0;
	while($i<10 & $row = $dbo->read())
	{
		$channel_content[$i]=array("title"=>$row[2],"content"=>$row[1],"id"=>$row[10]);
		$i=$i+1;
	}
	//print_r($channel_content);
	exit(json_encode($channel_content));
?>