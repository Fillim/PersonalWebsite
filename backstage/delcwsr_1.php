<?php
include_once("conn/conn.php");
$id=$_GET["dels_id"];
if(mysql_query("delete from tb_outgo where id='".$id."'",$conn)){
   echo "<script>alert('������ɾ���ɹ���');window.location.href='index.php?link=".urlencode("���֧��")."';</script>";
}else{
  echo "<script>alert('������ɾ��ʧ�ܣ�');history.back();</script>";
}
?>