<style type="text/css">
<!--
.STYLE1 {color: #CC6666}
-->
</style>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
<script language="javascript" src="js/reg.js"></script>
  <form name="form1" method="post" action="deldiary_1.php" id="form1">
  	<tr>
      <td width="493" valign="top"><label for="textarea"></label>
        <table width="515" border="1" cellpadding="1" cellspacing="1" bordercolor="#FF9966" bgcolor="#669999">
          <tr>
            <td height="30" colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE1">É¾³ýÈÕ¼Ç</div></td>
          </tr>
<?php 
include_once("conn/conn.php");
$result=mysql_query("select * from tb_jour where id limit 5",$conn);
while($myrow=mysql_fetch_array($result)){
?>
          <tr>
            <td width="35" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center">
              <input type="checkbox" name="conn_id[]" value="<?php echo $myrow['id'];?>" id="conn_id[]">
            </div>
            <label for="checkbox"></label></td>
            <td width="30" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><?php echo $myrow['id'];?></div></td>
            <td width="267" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><?php echo $myrow['wzzt'];?></div>              <div align="center"></div></td>
            <td width="160" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><?php echo $myrow['time'];?></div></td>
          </tr>
<?php 
	}
?>	
          <tr>
            <td colspan="4" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center"><img src="images/bg_19-20.jpg" onclick="checkAll(form1,status)" width="62" height="25"><img src="images/bg_14-14.jpg"  onclick="switchAll(form1,status)" width="62" height="25"><img src="images/bg_07-08.jpg" onclick="uncheckAll(form1,status)" width="62" height="25"><input type="image" name="imageField" src="images/bg_14.jpg" /></div></td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
