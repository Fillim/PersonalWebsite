<style type="text/css">
<!--.,
.STYLE7 {color: #3366FF; }
.STYLE8 {color: #3333FF}
-->
</style>
<script src="JS/function.js"></script>
<script language="javascript">
function checkdata1(srsj){
	var str=srsj;
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
				   form.srsj.focus(); 
				   return(false);
				   }
				if(!checkdata1(form1.srsj.value)||form1.srsj.value.length!=10){
				alert("������Ļ�����ʽ����!");form1.srsj.focus();
				return(false);
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
  <form name="form1" method="post" action="chkincome.php">
    <tr>
      <td width="493" valign="top"><table width="513">
        <tr>
          <td height="50" colspan="2"><div align="center" class="STYLE7">
            <p class="STYLE8">�������</p>
            </div></td>
        </tr>
        <tr>
          <td width="156" height="32" valign="bottom"><div align="right" class="STYLE7">����������</div>
            <span class="STYLE7">
            <label for="textfield"></label>
            </span>
            <div align="center" class="STYLE7"></div></td>
          <td width="344" valign="bottom">
            <div align="left" class="STYLE7">
              <input type="text" name="srms" id="srms">
            ���벻Ҫ����20�����֣�</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right" class="STYLE7">�����            </div></td>
          <td height="34" valign="bottom">
            <div align="left" class="STYLE7">
              <input name="seje" type="text" id="seje" size="10">
            Ԫ��������ݱ���Ϊ���֣��磺1000��</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right">���</div></td>
          <td height="34" valign="bottom"><label for="select"></label>
            <select name="select" size="1" id="select">
              <option>���</option>
              <option>����</option>
              <option>����</option>
              <option>����</option>
              <option>����</option>
              <option selected="selected">��ѡ��</option>
            </select></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right" class="STYLE7">����ʱ�䣺</div></td>
          <td height="34" valign="bottom"><span class="STYLE7">
            <div align="left">
              <input name="srsj" type="text" id="srsj" size="10">
            (���ڸ�ʽΪ��2007-12-01)            </div></td>
        </tr>
        <tr>
          <td height="53" colspan="2"><label for="Submit"></label>
            <div align="center">
              <input type="submit" name="Submit" value="���" id="Submit" onclick="return chkinput(form1)">
            </div></td>
        </tr>
      </table></td>
    </tr>
  </form>
</table>

