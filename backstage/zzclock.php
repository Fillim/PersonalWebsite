<style type="text/css">
<!--
.STYLE5 {font-size: 12px; color: #66CC99; }
.STYLE6 {color: #3366FF}
.STYLE7 {color: #66CC66}
-->
</style>
<table width="600" height="302" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="600" height="302" valign="top"><table width="600" border="1" cellpadding="1" cellspacing="1" bgcolor="#6666FF">
        <tr>
          <td height="28" colspan="6" bordercolor="#FFFFFF" bgcolor="#00FFFF"><div align="center">����ִ�е�����</div></td>
          </tr>
		   <tr>
          <td width="45" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">���</div></td>
          <td width="120" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">��������ʱ��</div></td>
          <td width="145" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">����</div></td>
          <td width="169" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">��������</div></td>
          <td width="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">���ѷ�ʽ</div></td>
          <td width="28" bordercolor="#FFFFFF" bgcolor="#FFFFFF">����</td>
        </tr>
<?php
include_once("conn/conn.php");
$sql=mysql_query("select * from tb_clock");
$info=mysql_fetch_array($sql);
if($info==false){
?>
        <tr>
          <td colspan="6" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">û������ִ�е����ӣ�</div></td>
        </tr>
<?php }else{
do{?>
       
        <tr>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['id'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['clocknow'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['music'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['tsnr'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['tsfs'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="del_clock.php?del_id=<?php echo $info['id'];?>">ɾ��</a></td>
        </tr>
		  <?php
	   }while($info=mysql_fetch_array($sql));
	 
	 }
?> 
      </table>      
      <p align="center" class="STYLE5">&nbsp;</p>
      </td>
    </tr>
</table>
