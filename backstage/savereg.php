<?php
session_start;						//��ʼ��session����
include_once("conn/conn.php");		//�������ݿ��ļ�
	$user=trim($_POST['usernc']);	//ȥ�����ύ�û����Ŀո�
	$pwd=md5($_POST['userpwd']);	//�Ա��ύ��������м���
	$qrpass=md5($_POST['userpwd1']);
	$zcms=trim($_POST['truename']);
	$sex=$_POST['sex'];
	$mb=trim($_POST['mb']);
	$mbda=trim($_POST['mbda']);
if(isset($_POST['submit']) || $_POST['submit']="ע��"){		//�ж�ע�ᰴť
	if(mysql_query("insert into tb_reg(user,password,qrpass,zsuser,sex,mbwt,mmda) values('$user','$pwd','$qrpass','$zcms','$sex','$mb','$mbda')",$conn)){		//�������ύ�����ݴ洢�����ݱ���
			echo"<script>alert('ע��ɹ�!');window.location.href='enter.php';</script>";	//ע��ɹ��󣬽���ת����¼ҳ��
	}else{
			echo"<script language='javascript'>alert('�Բ���ע��ʧ��!');history.back();</script>";	//�����Ӳ���ʧ�ܣ��������ʾ
	}
}
?>

