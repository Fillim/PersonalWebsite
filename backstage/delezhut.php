<?php
include_once("conn/conn.php");
if(mysql_query("delete from tb_motif  where id='".$_GET["del_id"]."'",$conn)){
  echo "<script>alert('��������ɾ���ɹ���');;window.location.href='index.php?link=".urlencode("��ѯ��������")."';</script>";
}else{
  echo "<script>alert('��������ɾ��ʧ�ܣ�');history.back();</script>";
}
?>