<?php
include_once("conn/conn.php");
$id=$_GET["checks_id"];
$sql=mysql_query("select * from tb_jour where id='".$id."'");
$info=mysql_fetch_array($sql);
?>
<table width="515" border="1" cellpadding="1" cellspacing="1" bgcolor="#FF9933">
  <tr>
    <td width="118" bordercolor="#FFFFFF" bgcolor="#FFFF66"><div align="right">文章主题：</div></td>
    <td width="384" bordercolor="#FFFFFF" bgcolor="#FFFF66"><label for="textfield"></label>
    <input name="wzzt" type="text" id="wzzt" value="<?php echo $info['wzzt'];?>" size="40"></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><div align="right">心情：</div></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><label for="label2"></label>
        <label for="textfield"></label>
        <label for="label2"></label>
    <?php echo $info['xq'];?></td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><div align="right">分类：</div></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><label for="select"></label>
        <label for="label3"></label>
        <select name="rjfl" id="rjfl">
          <option value="<?php echo $info['rjfl'];?>" selected="selected"><?php echo $info['rjfl'];?></option>
          <option value="工作">工作</option>
          <option value="心情">心情</option>
          <option value="情感">情感</option>
          <option value="热评">热评</option>
          <option value="实时">实时</option>
          <option value="杂记">杂记</option>
    </select>    </td>
  </tr>
  <tr>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><div align="right">发表时间：</div></td>
    <td bordercolor="#FFFFFF" bgcolor="#FFFF66"><label for="textfield"></label>
    <input type="text" name="time" id="time" value="<?php echo $info['time'];?>"></td>
  </tr>
  <tr>
    <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFF66"><label for="textarea"></label>
        <label for="textfield"></label>
      <label for="Submit"></label>
      <form id="form1" name="form1" method="post" action="">
        <textarea name="textarea" cols="70" rows="20"><?php echo $info['wznr'];?></textarea>
      </form>
      <label for="label"></label></td>
  </tr>
</table>
