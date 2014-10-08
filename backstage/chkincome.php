<?php
session_start;
include_once("conn/conn.php");
		$ms=trim($_POST['srms']);
		$je=$_POST['seje'];
		$sj=$_POST['srsj'];
		$year=substr($sj,0,4);
		$month=substr($sj,5,6);
		$lb=$_POST['select'];
		if(strlen($ms)>20){
			echo"<script>alert('主题字数不能超过10个汉字');history.back();</script>";
			exit;
		}
		if(mysql_query("insert into tb_income(srms,srje,srsj,year,month,lb) values('$ms','$je','$sj','$year','$month','$lb')",$conn)){
			echo"<script>alert('收入添加成功!');history.back();</script>";	
	}else{
			echo"<script>alert('收入添加失败!');history.back();</script>";	
			exit;
	   }
?>

