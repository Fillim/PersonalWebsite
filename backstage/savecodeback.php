<?php
session_start();		//初始化session变量
include("conn/conn.php");	//连接数据库
if(isset($_POST['submit']) && $_POST['submit']=="提交")	{	//对提交按钮进行判断
	if($_POST['usernc']!="" ){		//判断用户昵称是否为空			
		$check1="select user from tb_reg where user='".$_POST['usernc']."'";	//在数据库查询提交的用户昵称
		$result1=mysql_query($check1,$conn);
		$row=mysql_num_rows($result1);
		if($row<1){		//如果数据库中没有提交的用户昵称则给出提示
			echo "<script language='javascript'>alert('用户名不存在'); history.back();</script>";	
		}
		if($_POST['mb']!="" ){		
			$check2="select mbwt from tb_reg where  mbwt='".$_POST['mb']."'";		
			$result2=mysql_query($check2,$conn);	
			$row2=mysql_num_rows($result2);
			if($row2<1){			
				echo "<script language='javascript'>alert('密保问题不存在'); history.back();</script>";		
			}
			if($_POST['mbda']!="" ){		
				$check3="select mmda from tb_reg where  mmda='".$_POST['mbda']."'";		
				$result3=mysql_query($check3,$conn);
				$row3=mysql_num_rows($result3);
				if($row3<1){									
					echo "<script language='javascript'>alert('密保答案不正确'); history.back();</script>";		
				}else{
					echo "<script>alert('重新修改密码');window.location.href='codeback_a.php?use=".$_POST['usernc']."';</script>";	
				}
			}
		}
	}		
}
?>
