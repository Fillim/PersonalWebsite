<?php
include_once("conn/conn.php");
$id=$_GET["del_id"];
if(mysql_query("delete from tb_clock where id='".$id."'",$conn)){
   echo "<script>alert('该闹铃删除成功！');window.location.href='index.php?link=".urlencode("设置闹钟")."';</script>";
}else{
  echo "<script>alert('该闹铃删除失败！');history.back();</script>";
}
?>