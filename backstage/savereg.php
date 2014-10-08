<?php
session_start;						//初始化session变量
include_once("conn/conn.php");		//包含数据库文件
	$user=trim($_POST['usernc']);	//去除表单提交用户名的空格
	$pwd=md5($_POST['userpwd']);	//对表单提交的密码进行加密
	$qrpass=md5($_POST['userpwd1']);
	$zcms=trim($_POST['truename']);
	$sex=$_POST['sex'];
	$mb=trim($_POST['mb']);
	$mbda=trim($_POST['mbda']);
if(isset($_POST['submit']) || $_POST['submit']="注册"){		//判断注册按钮
	if(mysql_query("insert into tb_reg(user,password,qrpass,zsuser,sex,mbwt,mmda) values('$user','$pwd','$qrpass','$zcms','$sex','$mb','$mbda')",$conn)){		//将表单中提交的数据存储到数据表中
			echo"<script>alert('注册成功!');window.location.href='enter.php';</script>";	//注册成功后，将跳转到登录页面
	}else{
			echo"<script language='javascript'>alert('对不起，注册失败!');history.back();</script>";	//如果添加操作失败，则给出提示
	}
}
?>

