<?php
session_start();
include("conn/conn.php");		//�������ݿ��ļ�
if(isset($_POST['submit']) && $_POST['submit']=="�ύ")	{
	if($_POST['user']!="" ){	//�ж��û��ǳ��Ƿ�Ϊ��
		$sql="update tb_reg set password='".md5($_POST['passx'])."' where user='".$_POST['user']."'";		//��������		
		$result=mysql_query($sql,$conn);
		if($result){
			echo "<script language='javascript'>alert('�����޸ĳɹ�'); window.location.href='enter.php';</script>";	
		}else{
			echo "<script language='javascript'>alert('�����޸�ʧ��'); history.back();</script>";	
		}
	}
}
?>
