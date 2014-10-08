<?php
include_once("conn/conn.php");
if(isset($_POST['Submit2'])){
	$ye=$_POST['year'];         
	$mon=$_POST['month'];         
	$da=$_POST['day'];           
	$ho=$_POST['hour'];            
	$min=$_POST['minute'];            
	$sec=$_POST['second'];           
	$txfs=$_POST['fs'];
	$yy=$_POST['music'];           
	$txzt=$_POST['zht'];               
	$nowes=$ye."-".$mon."-".$da." ".$ho.":".$min.":".$sec;          
	$nowe=date("Y-m-d H:i:s",strtotime($nowes));
	$sql="insert into tb_clock (clocknow,music,tsnr,tsfs,control) values ('".$nowe."','".$yy."','".$txzt."','".$txfs."','1')";
	if(mysql_query($sql)){
		echo"<script>alert('闹钟设置成功!');history.back();</script>";	
	}else{
		echo"<script>alert('闹钟设置失败!');history.back();</script>";	
	}
}
?>