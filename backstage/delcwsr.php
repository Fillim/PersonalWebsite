<?php
include_once("conn/conn.php");
$id=$_GET["del_id"];
if(mysql_query("delete from tb_income where id='".$id."'",$conn)){
   echo "<script>alert('该收入删除成功！');window.location.href='index.php?link=".urlencode("添加收入")."';</script>";
}else{
  echo "<script>alert('该收入删除失败！');history.back();</script>";
}
?>