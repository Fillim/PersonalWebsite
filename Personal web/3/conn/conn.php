<?php
$conn=mysql_connect("localhost","root","") or die ("connect mysql false");			//连接数据库服务器
mysql_select_db("db_diary",$conn)or die ("connect database false");					//连接指定的数据库
mysql_query("set names gb2312");						//对数据库中编码格式进行转换，避免出现中文乱码的问题
?>


