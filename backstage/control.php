<?php 
include("conn/conn.php");	//�������ݿ��ļ�
$myrow=mysql_query("select * from tb_clock where id='".$_GET['ids']."'",$conn);		//ͨ����ȡ�����򴫵ݵ�id��ֵ����ѯ���������Ϣ
$result=mysql_fetch_array($myrow);
?>
<bgsound src="<?php echo $result['music'];?>" loop="1" id="bgsud"></bgsound>	
<?php
if(isset($_POST['id'])){	//�Բ�ѯ��id�����ж�
$result=mysql_query("update tb_clock set control='0' where id='".$_POST['id']."'",$conn);	
if($result){
	echo "<script>alert('���ѹر�');window.location.href='index.php';</script>";
}else{
	echo "false";
	}
}

?>
<style type="text/css">
<!--
.STYLE1 {color: #3333FF}
-->
</style>

<form id="form1" name="form1" method="post" action="control.php">
<table id="__01" width="255" height="221" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="images/n_01.gif" width="255" height="104" alt=""></td>
	</tr>
	<tr>
		<td width="255" height="76" colspan="3" background="images/n_02.gif"><div align="center" class="STYLE1"><?php echo $result['tsnr'];?>&nbsp;
		  </div>
	    <div align="center"></div></td>
	</tr>
	<tr>
		<td>
			<img src="images/n_03.gif" width="102" height="41" alt=""></td>
		<td><input type="image" name="imageField" src="images/n_04.gif" onclick="" /></td>
		<td>
			<img src="images/n_05.gif" width="87" height="41" alt=""></td>
	</tr>
</table>
  <input type="hidden" name="id" id="id" value="<?php echo $_GET['ids'];?>" />
</form>
