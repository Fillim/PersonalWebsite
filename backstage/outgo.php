<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>֧������</title>
<style type="text/css">
<!--
.STYLE10 {color: #CC6633; }
-->
</style>
</head>

<body>
<script src="JS/function.js"></script>
<script language="javascript">
function checkdata1(zcsj){
	var str=zcsj;
	 //��JavaScript�У�������ʽֻ��ʹ��"/"��ͷ�ͽ���������ʹ��˫����
	var Expression=/(\d{4}-)(\d{2}-)(\d{2})$/;  //ƥ���ַ����е�ָ��λ����(\d{2})$������2�����ֽ�β
	var objExp=new RegExp(Expression);
	if(objExp.test(str)==true){
		return true;
	}else{
		return false;
	}
}	
</script>
 <script language="javascript">
			 
			   function chkinput(form){				
			    
				 if(form.zcms.value==""){				
				   alert("������֧��������");   		
				   form.zcms.focus();					
				   return(false);
				 }
				 
				 if(form.zcje.value==""){
				 
				   alert("������֧����");   
				   form.zcje.focus();
				   return(false);
				 
				 }
				  if(isNaN(form.zcje.value)){
				    alert("��������Ч�Ľ�");  
					 form.zcje.focus();
				   return(false);
				   }
				 
				 if(form.zcsj.value==""){
				  alert("����������ʱ�䣡");   
				   form.zcsj.focus(); 
				   return(false);
				   }
				if(!checkdata1(form.zcsj.value)||form.zcsj.value.length!=10){
				alert("������Ļ�����ʽ����!");
				form.zcsj.focus();
				return(false);
				}
				if(CheckDate(form.zcsj.value)){
				alert("�������������ڲ���ȷ���磺2007-12-01��\n ��ע������!");
				form.zcsj.focus();
				return false;
				}
				return(true);							
			     
			   }
			  
			  </script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form action="chkoutgo.php" method="post" name="form" id="form">
    <tr>
      <td width="493" valign="top"><table width="482" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="37" colspan="2"><div align="center" class="STYLE10">���֧��</div></td>
          </tr>
        <tr>
          <td width="161" height="35"><div align="right" class="STYLE10">֧��������</div></td>
          <td width="321"><span class="STYLE10">
            <input type="text" name="zcms" id="zcms" />
          ���벻Ҫ����20�����֣�</span></td>
        </tr>
        <tr>
          <td height="38"><div align="right" class="STYLE10">���</div></td>
          <td><span class="STYLE10">
            <select name="select" size="1" id="select">
              <option>��ʳ</option>
              <option>ѧϰ</option>
              <option>�ճ�����</option>
              <option>�罻ͨѶ</option>
              <option>����װ��</option>
              <option>����</option>
              <option selected="selected">��ѡ��</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td height="38"><div align="right" class="STYLE10">֧����</div></td>
          <td><span class="STYLE10">
            <input name="zcje" type="text" id="zcje" size="10" />
Ԫ��������ݱ���Ϊ���֣��磺1000��</span></td>
        </tr>
        <tr>
          <td height="39"><div align="right" class="STYLE10">֧��ʱ�䣺</div></td>
          <td><span class="STYLE10">
            <input name="zcsj" type="text" id="zcsj" size="10" />
����ʽΪ��2011-06-03��</span></td>
        </tr>
        <tr>
          <td height="41" colspan="2"><label for="Submit"></label>
            <div align="center">
              <input type="submit" name="Submit" value="�ύ" id="Submit" onclick="return chkinput(form)" />
            </div></td>
          </tr>
        
      </table>
      <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
</body>
</html>
