<?php
session_start();			//��ʼSESSION����
include("conn/conn.php");	//�������ݿ��ļ�
if(isset($_POST['Submit']) && $_POST['Submit']=="��¼")	{		//�жϵ�¼��ť	
	$check="select user from tb_reg where user='".$_POST['username']."'and password='".$_POST['pass']."'";		//����ύ�������Ƿ���������ݿ�֮��
	$result=mysql_query($check,$conn);						
	$info=mysql_num_rows($result);	
	$_SESSION['user']=$_POST['username'];	
	$_SESSION['password']=$_POST['pass'];							
       	echo "<script>alert('��¼�ɹ�'); window.location.href='index.php';</script>";
}else{
		echo "<script language='javascript'>alert('��¼ʧ�ܣ�����������û�������ȷ'); history.back();</script>";		
}
?>
 