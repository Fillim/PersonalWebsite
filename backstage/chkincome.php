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
			echo"<script>alert('�����������ܳ���10������');history.back();</script>";
			exit;
		}
		if(mysql_query("insert into tb_income(srms,srje,srsj,year,month,lb) values('$ms','$je','$sj','$year','$month','$lb')",$conn)){
			echo"<script>alert('������ӳɹ�!');history.back();</script>";	
	}else{
			echo"<script>alert('�������ʧ��!');history.back();</script>";	
			exit;
	   }
?>

