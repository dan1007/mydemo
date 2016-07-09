<?php
	require("mysql_util.php" );
	$p=$_GET["p"];
	$s=$_GET["s"];
	$p=($p-1)*$s;
	mySqlSelect("SELECT id,name,chengbenjia,gongyingshang,riqi FROM qicai LIMIT $p,$s",function($r){
	$arr=[];
	while($d=mysql_fetch_array($r)){
	$q="";
	$q->id=$d["id"];
	$q->name=$d["name"];
	$q->price=$d["chengbenjia"];
	$q->gname=$d["gongyingshang"];
	$q->qdate=$d["riqi"];
	$arr[]=$q;
	}
	echo json_encode($arr);
	})
?>