<?php
session_start;
include_once("conn/conn.php");

	if (is_file("./filterwords.txt")){			//判断给定文件名是否为一个正常的文件
	    $filter_word = file("./filterwords.txt");		//把整个文件读入一个数组中
		$str=$_POST['wznr'];
		for($i=0;$i<count($filter_word);$i++){			//应用For循环语句对敏感词进行判断
		   if(preg_match("/".trim($filter_word[$i])."/i",$str)){		//应用正则表达式，判断传递的留言信息中是否含有敏感词
			  echo "<script> alert('日记中包含敏感词！');history.back(-1);</script>";
			  exit;
			}
		}
	}
		$zt=trim($_POST['topic']);
		if(strlen($zt)>40){
			echo"<script>alert('主题字数不能超过20汉字');history.back();</script>";
			exit;
		}
		$fl=$_POST['fl'];
		$mood=$_POST['check'];
		$nr=$_POST['wznr'];
		$mm=$_POST['mm'];
		$datetime=date("Y-m-d H:i:s");
		if(strlen($zt)>30){
			echo"<script>alert('主题字数不能超过15个汉字');history.back();</script>";
			exit;
		}


		if(mysql_query("insert into tb_jour(wzzt,rjfl,wznr,time)values('$zt','$fl','$nr','$datetime')",$conn)){
			echo"<script>alert('日记添加成功!');history.back();</script>";	
	}else{
			echo"<script>alert('日记添加失败!');history.back();</script>";	
			exit;
	   }

?>



	
	
	
	
