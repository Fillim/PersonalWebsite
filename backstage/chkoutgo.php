<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>���봦��ҳ</title>
</head>

<body>
<?php
session_start;
include_once("conn/conn.php");
		$ms=trim($_POST['zcms']);
		$je=$_POST['zcje'];
		$sj=$_POST['zcsj'];
		$year=substr($sj,0,4);
		$month=substr($sj,5,6);
		$lb=$_POST['select'];
		if(strlen($ms)>20){
			echo"<script>alert('�����������ܳ���10������');history.back();</script>";
			exit;
		}
		if(mysql_query("insert into tb_outgo(zcms,zcje,zcsj,lb,year,month) values('$ms','$je','$sj','$lb','$year','$month')",$conn)){
			echo"<script>alert('֧����ӳɹ�!');history.back();</script>";	
	}else{
			echo"<script>alert('֧�����ʧ��!');history.back();</script>";	
			exit;
	   }
?>
</body>
</html>
