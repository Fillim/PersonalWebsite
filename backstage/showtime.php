<?php
header('Content-Type: text/xml; charset=gb2312');
include("conn/conn.php");
$dates=date("Y-m-d H:i:s");		//获取当前时间
$result=0;
$sql=mysql_query("select * from tb_clock");
while($myrow=mysql_fetch_array($sql)){
	if($myrow['control']==1){
		if($myrow['tsfs']=="1"){
			$every=substr($dates,8,5);
			$control=substr($myrow['clocknow'],8,5);
			if($every==$control){
				$result=$myrow['id'];
			}else{
				$result='0';
			}
		}else{
			$every=substr($dates,11,2);
			$control=substr($myrow['clocknow'],11,2);
			if($every==$control){
				$result=$myrow['id'];
			}else{
				$result=0;
			}
		}		
	}else{
			 $result=0;	
	}	
}
echo $result;
?>