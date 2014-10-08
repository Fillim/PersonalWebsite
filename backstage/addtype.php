<?php
include_once("conn/conn.php");
$id=$_GET["checks_id"];
$tables=$_GET["type"];
$sql=mysql_query("select * from $tables where id='".$id."'");
$info=mysql_fetch_array($sql);
if(isset($_POST["Submit"])){
	$ms=trim($_POST['srms']);
	$je=$_POST['seje'];
	$sj=$_POST['srsj'];
	$year=substr($sj,0,4);
	$month=substr($sj,5,6);
	$lb=$_POST['select'];
	if(mysql_query("update tb_income set srms='$ms',srje='$je',srsj='$sj' ,lb='$lb',year='$year',month='$month' where id='".$_POST["id"]."'",$conn)){
    	echo "<script>alert('收入更改成功！');window.opener.location.href='index.php?link=".urlencode("财务管理")."';window.close();</script>";
  	}else{
    	echo "<script>alert('收入更改失败！');history.back();</script>";    
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
				   alert("请输入收入描述！");   		
				   form.srms.focus();					
				   return(false);
				 }
				 if(form.seje.value==""){
				  alert("请输入收入金额！");   
				   form.seje.focus();
				   return(false);
				   }
				   if(isNaN(form.seje.value)){
				    alert("请输入有效的金额！");  
					 form.seje.focus();
				   return(false);
				   }
				
				  if(form.srsj.value==""){
				 
				   alert("请输入收入时间！");   
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
      <td width="493" valign="top"><table width="490" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF6666">
        <tr>
          <td height="50" colspan="2" bgcolor="#CCFF66"><div align="center" class="STYLE7">
            <p class="STYLE8">编辑收入</p>
          </div></td>
        </tr>
        <tr>
          <td width="163" height="32" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">收入描述：</div>
                <span class="STYLE7">
                <label for="textfield"></label>
                </span>
            <div align="center" class="STYLE7"></div></td>
          <td width="327" valign="bottom" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input type="text" name="srms" id="srms" value="<?php echo $info['srms'];?>">
            （请不要超过20个汉字）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">收入金额： </div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input name="seje" type="text" id="seje" size="10" value="<?php echo $info['srje'];?>">
            元（添加内容必须为数字，如：1000）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right">类别：</div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><label for="select"></label>
                <label for="textfield"></label>
               
                <select name="select" size="1" id="select">
				 <option value="<?php echo $info['lb'];?>" selected="selected"><?php echo $info['lb'];?></option>
                  <option value="汇款">汇款</option>
                  <option value="奖金">奖金</option>
                  <option value="补助">补助</option>
                  <option value="工资">工资</option>
                  <option value="其他">其他</option>
            </select></td>
			  
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">收入时间：</div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><span class="STYLE7">
                <div align="left">
                  <input name="srsj" type="text" id="srsj" size="10" value="<?php echo $info['srsj'];?>">
            (日期格式为：2007-12-01) </div></td>
        </tr>
        <tr>
          <td height="53" colspan="2" bgcolor="#FFFFFF"><label for="Submit"></label>
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