<?php
$conn=mysql_connect("localhost","root","") or die ("connect mysql false");			//�������ݿ������
mysql_select_db("db_diary",$conn)or die ("connect database false");					//����ָ�������ݿ�
mysql_query("set names gb2312");						//�����ݿ��б����ʽ����ת������������������������
?>


