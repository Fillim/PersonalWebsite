<?php
session_start();			//初始SESSION变量
include("conn/conn.php");	//包含数据库文件
if(isset($_POST['Submit']) && $_POST['Submit']=="登录")	{		//判断登录按钮	
	$check="select user from tb_reg where user='".$_POST['username']."'and password='".$_POST['pass']."'";		//检测提交的数据是否存在与数据库之中
	$result=mysql_query($check,$conn);						
	$info=mysql_num_rows($result);	
	$_SESSION['user']=$_POST['username'];	
	$_SESSION['password']=$_POST['pass'];							
       	echo "<script>alert('登录成功'); window.location.href='index.php';</script>";
}else{
		echo "<script language='javascript'>alert('登录失败，密码或者是用户名不正确'); history.back();</script>";		
}
?>
 