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
          <td height="28" colspan="6" bordercolor="#FFFFFF" bgcolor="#00FFFF"><div align="center">正在执行的闹钟</div></td>
          </tr>
		   <tr>
          <td width="45" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">序号</div></td>
          <td width="120" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">闹钟提醒时间</div></td>
          <td width="145" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">音乐</div></td>
          <td width="169" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">提醒内容</div></td>
          <td width="53" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">提醒方式</div></td>
          <td width="28" bordercolor="#FFFFFF" bgcolor="#FFFFFF">操作</td>
        </tr>
<?php
include_once("conn/conn.php");
$sql=mysql_query("select * from tb_clock");
$info=mysql_fetch_array($sql);
if($info==false){
?>
        <tr>
          <td colspan="6" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">没有正在执行的闹钟！</div></td>
        </tr>
<?php }else{
do{?>
       
        <tr>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['id'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['clocknow'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['music'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['tsnr'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><?php echo $info['tsfs'];?></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><a href="del_clock.php?del_id=<?php echo $info['id'];?>">删除</a></td>
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
