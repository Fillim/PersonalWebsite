<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>财务查询</title>
<style type="text/css">
<!--
.STYLE6 {color: #3366FF}
.STYLE8 {color: #3333FF}
.STYLE9 {color: #3300CC; }
-->
</style>
<script src="js/riq.js" language="javascript"></script>
</head>
<script language="javascript">
 function chkinput(form){
   if(form.p_date1.value==""){
     alert("请输入起始日期!");
      form.p_date1.select();
	  return(false);
   }
    if(form.p_date2.value==""){
     alert("请输入终止日期!");
      form.p_date2.select();
	  return(false);
   }
   return(true);
 }
</script>
<body>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form action="" method="post" name="form" id="form"  onsubmit="return chkinput(this)">
    <tr>
      <td width="493" valign="top"><table width="515" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="34"><div align="center" class="STYLE6">财务查询</div></td>
        </tr>
        <tr>
          <td height="38"><div align="center" class="STYLE6">查询日期：
          
            <input name="p_date1" type="text" id="p_date" size="10"  readonly="readonly"/>
            <img src="images/sj.jpg" width="17" height="15" onclick="loadCalendar(form.p_date1)" />
 至

             
              <input name="p_date2" type="text" id="p_date" size="10"  readonly="readonly"/>
              <img src="images/sj.jpg" width="17" height="15"  onclick="loadCalendar(form.p_date2)"/>&nbsp;
              <input type="submit" name="Submit" value="查询" id="Submit" />
          </div>
            <span class="STYLE6">
            <label for="select"></label>
            </span><span class="STYLE6">
            <label for="Submit"></label>
            </span>
            <div align="center" class="STYLE6"></div></td>
        </tr>
      </table>
	    <p>
	      <?php
if($_POST['Submit']!="")
{
?>
  </p>
	    <table width="515" border="1" cellpadding="1" cellspacing="1" bordercolor="#FF6699">
          <tr>
            <td width="171"><div align="center" class="STYLE8">收入金额</div></td>
            <td width="172"><div align="center" class="STYLE8">支出金额</div></td>
            <td width="172"><div align="center" class="STYLE8">余额</div></td>
          </tr>
<?php
	 $from=$_POST['p_date1'];
	 $to=$_POST['p_date2'];
	 include_once("conn/conn.php");
	 $sql=mysql_query("select sum(srje) as sr from tb_income where srsj between '$from' and '$to'",$conn);
	 $sqls=mysql_query("select sum(zcje) as zc from tb_outgo where zcsj between '$from' and '$to'",$conn);
	 $info=mysql_fetch_array($sql);
	 $infos=mysql_fetch_array($sqls);
	 if($info==false && $infos==false){
?>

	 	 <tr>
            <td colspan="3"><div align="center">没有查找到您要找的内容!</div></td>
          </tr>
		    <?php
	 }else if($info==false && $infos==true){
	   do{
	 ?>
          <tr>
            <td><div align="center" class="STYLE9"></div></td>
            <td><div align="center" class="STYLE9"><?php echo $infos['zc'];?></div></td>
            <td><div align="center" class="STYLE9"><?php echo $info['sr']-$infos['zc'];?></div></td>
          </tr>
		  <?php
	   }while($info=mysql_fetch_array($sql));
	 }else{
	   do{
	 ?>
          <tr>
            <td><div align="center" class="STYLE8"><?php echo $info['sr'];?></div></td>
            <td><div align="center" class="STYLE8"><?php echo $infos['zc'];?></div></td>
            <td><div align="center" class="STYLE8"><?php echo $info['sr']-$infos['zc'];?></div></td>
          </tr>
		  <?php
	   }while($info=mysql_fetch_array($sql));
	 
	 }
	 ?> 
        </table>
		<?php
}
?> 
</form>
</table>
</body>
</html>
