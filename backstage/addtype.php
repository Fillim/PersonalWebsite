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
    	echo "<script>alert('������ĳɹ���');window.opener.location.href='index.php?link=".urlencode("�������")."';window.close();</script>";
  	}else{
    	echo "<script>alert('�������ʧ�ܣ�');history.back();</script>";    
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
				   alert("����������������");   		
				   form.srms.focus();					
				   return(false);
				 }
				 if(form.seje.value==""){
				  alert("�����������");   
				   form.seje.focus();
				   return(false);
				   }
				   if(isNaN(form.seje.value)){
				    alert("��������Ч�Ľ�");  
					 form.seje.focus();
				   return(false);
				   }
				
				  if(form.srsj.value==""){
				 
				   alert("����������ʱ�䣡");   
				   form.srsj.focus(); return(false);
				   }
				
				if(CheckDate(form.srsj.value)){
				alert("�������������ڲ���ȷ���磺2007-12-01��\n ��ע������!");
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
            <p class="STYLE8">�༭����</p>
          </div></td>
        </tr>
        <tr>
          <td width="163" height="32" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">����������</div>
                <span class="STYLE7">
                <label for="textfield"></label>
                </span>
            <div align="center" class="STYLE7"></div></td>
          <td width="327" valign="bottom" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input type="text" name="srms" id="srms" value="<?php echo $info['srms'];?>">
            ���벻Ҫ����20�����֣�</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">����� </div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="left" class="STYLE7">
            <input name="seje" type="text" id="seje" size="10" value="<?php echo $info['srje'];?>">
            Ԫ��������ݱ���Ϊ���֣��磺1000��</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right">���</div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><label for="select"></label>
                <label for="textfield"></label>
               
                <select name="select" size="1" id="select">
				 <option value="<?php echo $info['lb'];?>" selected="selected"><?php echo $info['lb'];?></option>
                  <option value="���">���</option>
                  <option value="����">����</option>
                  <option value="����">����</option>
                  <option value="����">����</option>
                  <option value="����">����</option>
            </select></td>
			  
        </tr>
        <tr>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><div align="right" class="STYLE7">����ʱ�䣺</div></td>
          <td height="34" valign="bottom" bgcolor="#FFFFFF"><span class="STYLE7">
                <div align="left">
                  <input name="srsj" type="text" id="srsj" size="10" value="<?php echo $info['srsj'];?>">
            (���ڸ�ʽΪ��2007-12-01) </div></td>
        </tr>
        <tr>
          <td height="53" colspan="2" bgcolor="#FFFFFF"><label for="Submit"></label>
              <div align="center">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="Submit" value="�༭" id="Submit" onclick="return chkinput(form1)"> 
                  <label for="label"></label>
                  &nbsp;&nbsp;<input type="submit" name="Submit2" value="ȡ��" id="label">
            </div></td>
        </tr>
      </table></td>
    </tr>
  </form>
</table>