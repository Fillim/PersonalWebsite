<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改密码处理页</title>
</head>

<body>
<?php
include_once("conn/conn.php");		//包含数据库文件
$uer=trim($_POST['usernc']);		//使用trim()函数去除掉提交的用户名空格
$oldpwd=md5($_POST['jmm']);			//使用md5对输入的原密码进行加密
$new=md5($_POST['xmm']);
$qnew=md5($_POST['qxmm']);
$sql="select id,user from tb_reg where user='".$uer."' and password='".$oldpwd."'";		//使用select语句查询用户名及密码
$result=mysql_query($sql,$conn);
$info=mysql_fetch_object($result);	//获取查询结果集
if(is_object($info)){		//应用is_object()函数检测查询的结果集是否为对象
	if(mysql_query("update tb_reg set password='".md5($new)."',qrpass='".md5($qnew)."' where user='".$uer."'")){	//使用update语句更新密码
		echo "<script>alert('密码更改成功!');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('密码更改失败!');history.back();</script>";
	}
}else{
	echo "<script>alert('原密码输入有误!');history.back();</script>";
}
?>
</body>
</html>
