<?php 
include_once("conn/conn.php");		
if($_POST['conn_id']!=""){			
	for($i=0;$i<count($_POST['conn_id']);$i++){
		$result=mysql_query("delete from tb_jour where id='".$_POST['conn_id'][$i]."'",$conn);		
	}
	if($result){
		echo "<script>alert('删除成功!'); window.location.href='index.php?link=".urlencode("添加日记")."';</script>";
	}
	}else{
	echo "<script>alert('请选择要删除的内容!'); </script>";
}
?>