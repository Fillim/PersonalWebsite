<?php
include_once("conn/conn.php");
$id=$_GET["id"];
$sql=mysql_query("select * from tb_jour where id='".$id."'");
$info=mysql_fetch_array($sql);
if(isset($_POST["Submit"])){
	$wzzt=trim($_POST['wzzt']);
	$sj=$_POST['time'];
	$lb=$_POST['rjfl'];
	$wznr=$_POST['wznr'];
	$sql="update tb_jour set wzzt='".$wzzt."',time='".$sj."',rjfl='".$lb."',wznr='".$wznr."' where id='".$_POST['id']."'";
	if(mysql_query($sql,$conn)){
    	echo "<script>alert('�ռǸ��ĳɹ���');window.opener.location.reload();window.close();</script>";
  	}else{
    	echo "<script>alert('�ռǸ���ʧ�ܣ�');history.back();</script>";    
  	}
 	exit;
}
?>
<style type="text/css">
<!--
.STYLE11 {color: #FF6600}
.STYLE12 {color: #FF9900; }
-->
</style>
<script language="javascript">
			 
			   function chkinput(form){				
			    
				 if(form.wzzt.value==""){				
				   alert("�������������⣡");   		
				   form.wzzt.focus();					
				   return(false);
				 }
			
				   
				  if(form.time.value==""){
				 
				   alert("�����뷢��ʱ�䣡");   
				   form.time.focus(); return(false);
				   }
				 if(form.wznr.value==""){
				 
				   alert("�������ռ����ݣ�");   
				   form.wznr.focus(); return(false);
				   }
				   
				
			   return(true);							
			   }
			  
			  </script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="">
  
  
    <tr>
      <td width="493" valign="top"><label for="textarea"></label>
        <table width="515" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF99FF">
          <tr>
            <td width="73" bgcolor="#33FFFF"><div align="right">�������⣺</div></td>
            <td width="426" bgcolor="#33FFFF"><label for="textfield"></label>
            <input type="text" name="wzzt" id="wzzt" value="<?php echo $info['wzzt'];?>"></td>
          </tr>
          <tr>
            <td bgcolor="#33FFFF"><div align="right">���飺</div></td>
            <td bgcolor="#33FFFF"><?php echo $info['xq'];?></td>
          </tr>
          <tr>
            <td bgcolor="#33FFFF"><div align="right">���ࣺ</div></td>
            <td bgcolor="#33FFFF">

              <select name="rjfl" id="rjfl">
               <option value="<?php echo $info['rjfl'];?>" selected="selected"><?php echo $info['rjfl'];?></option>
              <option value="����">����</option>
              <option value="����">����</option>
              <option value="���">���</option>
              <option value="����">����</option>
              <option value="ʵʱ">ʵʱ</option>
              <option value="�Ӽ�">�Ӽ�</option>
		    </select>            </td>
          </tr>
          <tr>
            <td bgcolor="#33FFFF"><div align="right">����ʱ�䣺</div></td>
            <td bgcolor="#33FFFF"><label for="textfield"></label>
            <input type="text" name="time" id="time" value="<?php echo $info['time'];?>"></td>
          </tr>
          <tr>
            <td height="235" colspan="2" bgcolor="#33FFFF"><label for="textarea"></label>
            <label for="textfield"></label>
            <textarea name="wznr" cols="70" rows="20" id="wznr" ><?php echo $info['wznr'];?></textarea></td>
          </tr>
          <tr>
            <td height="28" colspan="2" bgcolor="#FFFFFF">
              <div align="center">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <input type="submit" name="Submit" value="�༭" id="Submit" onclick="return chkinput(form1)">
				&nbsp;&nbsp;&nbsp;
                
                <input type="reset" name="Submit2" value="����" id="label">
</div>
              <label for="label"></label>
            <div align="center"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
