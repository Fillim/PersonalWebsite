<?php
session_start;
include_once("conn/conn.php");
		$zhu=trim($_POST["zt"]);
		$sql=mysql_query("select zhut from tb_motif where zhut='".$zhu."'",$conn);
		$info=mysql_fetch_array($sql);
		if($info){
			echo"<script>alert('���ʧ�ܣ����������Ѿ�����!');history.back();</script>";
			exit;
		}
		if(strlen($zhu)>12){
			echo"<script>alert('�����������ܳ���6����');history.back();</script>";
			exit;
		}
	$createtime=date("Y-m-d H:i:s");
	if(mysql_query("insert into tb_motif(zhut,createtime) values('$zhu','$createtime')",$conn)){
			echo"<script>alert('����������ӳɹ�!');window.location.href='index.php?link=".urlencode("��������")."';</script>";
	}else{
			echo"<script>alert('�����������ʧ��!');history.back();</script>";	
			exit;
	   }
?>






  