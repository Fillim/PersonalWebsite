<?php
session_start;
include_once("conn/conn.php");
		$zhu=trim($_POST["zt"]);
		$sql=mysql_query("select zhut from tb_motif where zhut='".$zhu."'",$conn);
		$info=mysql_fetch_array($sql);
		if($info){
			echo"<script>alert('添加失败，事物主题已经存在!');history.back();</script>";
			exit;
		}
		if(strlen($zhu)>12){
			echo"<script>alert('主题字数不能超过6汉字');history.back();</script>";
			exit;
		}
	$createtime=date("Y-m-d H:i:s");
	if(mysql_query("insert into tb_motif(zhut,createtime) values('$zhu','$createtime')",$conn)){
			echo"<script>alert('事物主题添加成功!');window.location.href='index.php?link=".urlencode("设置闹钟")."';</script>";
	}else{
			echo"<script>alert('事物主题添加失败!');history.back();</script>";	
			exit;
	   }
?>






  