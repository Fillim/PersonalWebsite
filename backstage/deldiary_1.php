<?php 
include_once("conn/conn.php");		
if($_POST['conn_id']!=""){			
	for($i=0;$i<count($_POST['conn_id']);$i++){
		$result=mysql_query("delete from tb_jour where id='".$_POST['conn_id'][$i]."'",$conn);		
	}
	if($result){
		echo "<script>alert('ɾ���ɹ�!'); window.location.href='index.php?link=".urlencode("����ռ�")."';</script>";
	}
	}else{
	echo "<script>alert('��ѡ��Ҫɾ��������!'); </script>";
}
?>