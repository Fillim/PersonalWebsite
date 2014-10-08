<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style type="text/css">
<!--
.STYLE14 {color: #FF0000}
.STYLE15 {color: #FF0000; font-size: 14px; }
-->
</style>
</head>

<body>
    <script language="javascript">
			 
			   function chkinput(form){				
			    
				 if(form.jmm.value==""){				
				   alert("请输入原密码！");   		
				   form.jmm.focus();					
				   return(false);
				 }
				 
				 if(form.xmm.value==""){
				 
				   alert("请输入新密码！");   
				   form.xmm.focus();
				   return(false);
				 
				 }
				 
				  if(form.qxmm.value==""){
				 
				   alert("请确认新密码！");   
				   form.qxmm.focus();
				   return(false);
				 
				 }
				 if(form.xmm.value!=form.qxmm.value){
				 
				   alert("新密码与确认密码不同！");   
				   form.qxmm.focus();
				   return(false); 
				 
				 }
				 
				 if(form.xmm.value.length<6){
				 
				   alert("密码长度应大于6位！");   
				   form.xmm.focus();
				   return(false); 
				 
				 }
				 
				 
			      return(true);							
			     
			   }
			  
			  </script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form action="chkquerymotif.php" method="post" name="form" id="form" onsubmit="return chkinput(this)">
    <tr>
      <td width="493" valign="middle"><table width="515" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="53" colspan="2" valign="middle" bordercolor="#FF9966"><p align="center" class="STYLE15">修改密码</p>            </td>
          </tr>
        <tr>
          <td width="258" height="38" bordercolor="#FF9966"><div align="right" class="STYLE15">用户名：</div></td>
          <td width="257" bordercolor="#FF9966"><span class="STYLE15">
            <label for="textfield"></label>
            <input name="usernc" type="text" id="usernc" size="13" />
          </span></td>
        </tr>
        <tr>
          <td height="34" bordercolor="#FF9966"><div align="right" class="STYLE15">旧密码：</div></td>
          <td bordercolor="#FF9966"><span class="STYLE15">
            <input name="jmm" type="password" id="jmm" size="13" />
          </span></td>
        </tr>
        <tr>
          <td height="35" bordercolor="#FF9966"><div align="right"><span class="STYLE15">新密码：</span></div></td>
          <td bordercolor="#FF9966"><input name="xmm" type="password" id="xmm" size="13" /></td>
        </tr>
        <tr>
          <td height="35" bordercolor="#FF9966"><div align="right" class="STYLE15">确认新密码：</div></td>
          <td bordercolor="#FF9966"><input name="qxmm" type="password" id="qxmm" size="13" /></td>
        </tr>
        <tr>
          <td height="33" bordercolor="#FF9966"><label for="Submit"></label>
            <div align="right">
              <input type="submit" name="Submit" value="确认" id="Submit" />
&nbsp;&nbsp;            </div></td>
          <td bordercolor="#FF9966"><label for="label"></label>
            &nbsp; &nbsp;&nbsp;
            <input type="submit" name="Submit2" value="重置" id="label" /></td>
        </tr>
      </table></td>
    </tr>
  </form>
</table>
</body>
</html>
