<?php
include_once("conn/conn.php");
$id=$_GET["check_id"];
$tables=$_GET["type"];
$sqls=mysql_query("select * from $tables where id='".$id."'");
$infos=mysql_fetch_array($sqls);

if(isset($_POST["Submit"])){
	$zc=trim($_POST['zcms']);
	$je=$_POST['zcje'];
	$sj=$_POST['zcsj'];
	$year=substr($sj,0,4);
	$month=substr($sj,5,6);
	$lb=$_POST['select'];
	if(mysql_query("update tb_outgo set zcms='$ms',zcje='$je',zcsj='$sj' ,lb='$lb',year='$year',month='$month' where id='".$_POST["id"]."'",$conn)){
    	echo "<script>alert('支出更改成功！');window.opener.location.href='index.php?link=".urlencode("财务管理")."';window.close();</script>";
  	}else{
    	echo "<script>alert('支出更改失败！');history.back();</script>";    
  	}
 	exit;
}
?>
<style type="text/css">
<!--
.STYLE8 {color: #3333FF}
-->
</style>
<script src="JS/function.js"></script>
   <script language="javascript">
			 
			   function chkinput(form){				
			    
				 if(form.srms.value==""){				
				   alert("请输入支出描述！");   		
				   form.srms.focus();					
				   return(false);
				 }
				 if(form.seje.value==""){
				  alert("请输入支出金额！");   
				   form.seje.focus();
				   return(false);
				   }
				   if(isNaN(form.seje.value)){
				    alert("请输入有效的金额！");  
					 form.seje.focus();
				   return(false);
				   }
				
				  if(form.srsj.value==""){
				 
				   alert("请输入支出时间！");   
				   form.srsj.focus(); return(false);
				   }
				
				if(CheckDate(form.srsj.value)){
				alert("您输入收入日期不正确（如：2007-12-01）\n 请注意闰年!");
				form.srsj.focus();
				return false;
				}
			   return(true);							
			   }
			  
			  </script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="">
    <tr>
      <td width="493" valign="top"><table width="490" border="1" cellpadding="1" cellspacing="1" bgcolor="#0033FF">
        <tr>
          <td height="50" colspan="2" bordercolor="#FFFFFF" bgcolor="#99FF33"><div align="center" class="STYLE7">
            <p class="STYLE8">编辑支出</p>
          </div></td>
        </tr>
        <tr>
          <td width="163" height="32" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="right" class="STYLE7">支出描述：</div>
                <span class="STYLE7">
                <label for="textfield"></label>
                </span>
            <div align="center" class="STYLE7"></div></td>
          <td width="327" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input type="text" name="srms" id="srms" value="<?php echo $infos['zcms'];?>">
            （请不要超过20个汉字）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="right" class="STYLE7">支出金额： </div></td>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input name="seje" type="text" id="seje" size="10" value="<?php echo $infos['zcje'];?>">
            元（添加内容必须为数字，如：1000）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="right">类别：</div></td>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label for="select"></label>
                <label for="textfield"></label>
                <input name="lb" type="text" id="textfield" size="8" value="<?php echo $infos['lb'];?>">
             <select name="select" size="1" id="select">
              <option>饮食</option>
              <option>学习</option>
              <option>日常生活</option>
              <option>社交通讯</option>
              <option>服饰装扮</option>
              <option>其他</option>
              <option selected="selected">请选择</option>
            </select></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="right" class="STYLE7">收入时间：</div></td>
          <td height="34" valign="bottom" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="STYLE7">
                <div align="left">
                  <input name="srsj" type="text" id="srsj" size="10" value="<?php echo $infos['zcsj'];?>">
            (日期格式为：2007-12-01) </div></td>
        </tr>
        <tr>
          <td height="53" colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><label for="Submit"></label>
              <div align="center">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="Submit" value="编辑" id="Submit" onclick="return chkinput(form1)"> 
                  <label for="label"></label>
                  &nbsp;&nbsp;<input type="submit" name="Submit2" value="取消" id="label">
            </div></td>
        </tr>
      </table></td>
    </tr>
  </form>
</table>