<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�û���¼</title>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	color: #FF6633;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<script language="javascript">
	function chkinputlogin(form){		//���庯��
		if(form.username.value==""){	//�ж�username�ı��������Ƿ�Ϊ��
			alert("�������û��ǳƣ�");	//Ϊ����������ʾ
			form.user.focus();
			return(false);
		}	 
		if(form.password.value==""){
			alert("�������¼���룡");
			form.password.focus();
			return(false);
		}
	return(true);
			    
	}
</script>
<form id="form" name="form" method="post" action="saveenter.php" onSubmit="return chkinputlogin(this)">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="429" height="231" border="0" align="center" cellpadding="0" cellspacing="0" background="images/1.jpg">
    <tr>
      <td height="34" colspan="3"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    </tr>
    <tr>
      <td width="55" height="75">&nbsp;</td>
      <td width="265" valign="middle"><p align="center">�û�����
          <label>
          <input name="username" type="text" id="user" size="15" />
          </label>
          <a href="reg.php">ע���˺ţ�</a></p>
        <p align="center">�� �룺
          <label>
          <input name="pass" type="password" id="pass" size="15" />
          </label>
          <a href="codeback.php">�������룿</a></p>
        <p align="center">
          <label>
           <input type="submit" name="Submit" value="��¼" />
          </label>
           &nbsp;&nbsp;&nbsp;<input type="submit" name="Submit2" value="����" />
      </p>      </td>
      <td width="109">&nbsp;</td>
    </tr>
    <tr>
      <td height="31" colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
