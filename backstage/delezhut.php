<?php
include_once("conn/conn.php");
if(mysql_query("delete from tb_motif  where id='".$_GET["del_id"]."'",$conn)){
  echo "<script>alert('事物主题删除成功！');;window.location.href='index.php?link=".urlencode("查询事物主题")."';</script>";
}else{
  echo "<script>alert('事物主题删除失败！');history.back();</script>";
}
?>