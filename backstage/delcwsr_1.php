<?php
include_once("conn/conn.php");
$id=$_GET["dels_id"];
if(mysql_query("delete from tb_outgo where id='".$id."'",$conn)){
   echo "<script>alert('该收入删除成功！');window.location.href='index.php?link=".urlencode("添加支出")."';</script>";
}else{
  echo "<script>alert('该收入删除失败！');history.back();</script>";
}
?>