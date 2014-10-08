<?php
session_start();
include("conn/conn.php");		//包含数据库文件
if(isset($_POST['submit']) && $_POST['submit']=="提交")	{
	if($_POST['user']!="" ){	//判断用户昵称是否为空
		$sql="update tb_reg set password='".md5($_POST['passx'])."' where user='".$_POST['user']."'";		//更新密码		
		$result=mysql_query($sql,$conn);
		if($result){
			echo "<script language='javascript'>alert('密码修改成功'); window.location.href='enter.php';</script>";	
		}else{
			echo "<script language='javascript'>alert('密码修改失败'); history.back();</script>";	
		}
	}
}
?>
