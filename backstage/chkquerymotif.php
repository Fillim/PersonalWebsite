<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸����봦��ҳ</title>
</head>

<body>
<?php
include_once("conn/conn.php");		//�������ݿ��ļ�
$uer=trim($_POST['usernc']);		//ʹ��trim()����ȥ�����ύ���û����ո�
$oldpwd=md5($_POST['jmm']);			//ʹ��md5�������ԭ������м���
$new=md5($_POST['xmm']);
$qnew=md5($_POST['qxmm']);
$sql="select id,user from tb_reg where user='".$uer."' and password='".$oldpwd."'";		//ʹ��select����ѯ�û���������
$result=mysql_query($sql,$conn);
$info=mysql_fetch_object($result);	//��ȡ��ѯ�����
if(is_object($info)){		//Ӧ��is_object()��������ѯ�Ľ�����Ƿ�Ϊ����
	if(mysql_query("update tb_reg set password='".md5($new)."',qrpass='".md5($qnew)."' where user='".$uer."'")){	//ʹ��update����������
		echo "<script>alert('������ĳɹ�!');window.location.href='index.php';</script>";
	}else{
		echo "<script>alert('�������ʧ��!');history.back();</script>";
	}
}else{
	echo "<script>alert('ԭ������������!');history.back();</script>";
}
?>
</body>
</html>
