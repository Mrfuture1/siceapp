<?php
	header("Content-Type: text/html; charset=utf-8");
	include 'sql/db_connector_S6.php';
	$sql = "select id from t_channel where name='学院概况'";      //返回学院概况id
	$dbo->query($sql);
	while($row = $dbo->read())
	{
		$id=$row[0];
	}
	$sql = "select * from t_channel where fid=".$id." order by `order` asc";      //返回学院概况下二级标题id
	$dbo->query($sql);
	$i=0;
	while($row = $dbo->read())
	{
		$content_id[$i]=$row[0];
		$content_channel[$i]=$row[3];
		$i=$i+1;
	}
	$k=0;
	while($k<=$i)
	{
		$sql = "select * from t_content where fid=".$content_id[$k]." order by posttime desc";      //返回
	    $dbo->query($sql);
	    $j=0;
		while($row = $dbo->read())
		{
			$content[$j]=array("title"=>$row[2],"content"=>$row[1]);
			$j=$j+1;
		}
		$content_li[$content_channel[$k]]=$content;
		$k=$k+1;
	}
	//print_r($content_li);
	exit(json_encode($content_li));
?>