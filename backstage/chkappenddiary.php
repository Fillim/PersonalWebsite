<?php
session_start;
include_once("conn/conn.php");

	if (is_file("./filterwords.txt")){			//�жϸ����ļ����Ƿ�Ϊһ���������ļ�
	    $filter_word = file("./filterwords.txt");		//�������ļ�����һ��������
		$str=$_POST['wznr'];
		for($i=0;$i<count($filter_word);$i++){			//Ӧ��Forѭ���������дʽ����ж�
		   if(preg_match("/".trim($filter_word[$i])."/i",$str)){		//Ӧ��������ʽ���жϴ��ݵ�������Ϣ���Ƿ������д�
			  echo "<script> alert('�ռ��а������дʣ�');history.back(-1);</script>";
			  exit;
			}
		}
	}
		$zt=trim($_POST['topic']);
		if(strlen($zt)>40){
			echo"<script>alert('�����������ܳ���20����');history.back();</script>";
			exit;
		}
		$fl=$_POST['fl'];
		$mood=$_POST['check'];
		$nr=$_POST['wznr'];
		$mm=$_POST['mm'];
		$datetime=date("Y-m-d H:i:s");
		if(strlen($zt)>30){
			echo"<script>alert('�����������ܳ���15������');history.back();</script>";
			exit;
		}


		if(mysql_query("insert into tb_jour(wzzt,rjfl,wznr,time)values('$zt','$fl','$nr','$datetime')",$conn)){
			echo"<script>alert('�ռ���ӳɹ�!');history.back();</script>";	
	}else{
			echo"<script>alert('�ռ����ʧ��!');history.back();</script>";	
			exit;
	   }

?>



	
	
	
	
