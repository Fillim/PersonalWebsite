<?php
session_start();		//��ʼ��session����
include("conn/conn.php");	//�������ݿ�
if(isset($_POST['submit']) && $_POST['submit']=="�ύ")	{	//���ύ��ť�����ж�
	if($_POST['usernc']!="" ){		//�ж��û��ǳ��Ƿ�Ϊ��			
		$check1="select user from tb_reg where user='".$_POST['usernc']."'";	//�����ݿ��ѯ�ύ���û��ǳ�
		$result1=mysql_query($check1,$conn);
		$row=mysql_num_rows($result1);
		if($row<1){		//������ݿ���û���ύ���û��ǳ��������ʾ
			echo "<script language='javascript'>alert('�û���������'); history.back();</script>";	
		}
		if($_POST['mb']!="" ){		
			$check2="select mbwt from tb_reg where  mbwt='".$_POST['mb']."'";		
			$result2=mysql_query($check2,$conn);	
			$row2=mysql_num_rows($result2);
			if($row2<1){			
				echo "<script language='javascript'>alert('�ܱ����ⲻ����'); history.back();</script>";		
			}
			if($_POST['mbda']!="" ){		
				$check3="select mmda from tb_reg where  mmda='".$_POST['mbda']."'";		
				$result3=mysql_query($check3,$conn);
				$row3=mysql_num_rows($result3);
				if($row3<1){									
					echo "<script language='javascript'>alert('�ܱ��𰸲���ȷ'); history.back();</script>";		
				}else{
					echo "<script>alert('�����޸�����');window.location.href='codeback_a.php?use=".$_POST['usernc']."';</script>";	
				}
			}
		}
	}		
}
?>
