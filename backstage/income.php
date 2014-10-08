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
	 //在JavaScript中，正则表达式只能使用"/"开头和结束，不能使用双引号
	var Expression=/(\d{4}-)(\d{2}-)(\d{2})$/;  //匹配字符串中的指定位数，(\d{2})$表明以2个数字结尾
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
				   form.srsj.focus(); 
				   return(false);
				   }
				if(!checkdata1(form1.srsj.value)||form1.srsj.value.length!=10){
				alert("您输入的基本格式不对!");form1.srsj.focus();
				return(false);
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
  <form name="form1" method="post" action="chkincome.php">
    <tr>
      <td width="493" valign="top"><table width="513">
        <tr>
          <td height="50" colspan="2"><div align="center" class="STYLE7">
            <p class="STYLE8">添加收入</p>
            </div></td>
        </tr>
        <tr>
          <td width="156" height="32" valign="bottom"><div align="right" class="STYLE7">收入描述：</div>
            <span class="STYLE7">
            <label for="textfield"></label>
            </span>
            <div align="center" class="STYLE7"></div></td>
          <td width="344" valign="bottom">
            <div align="left" class="STYLE7">
              <input type="text" name="srms" id="srms">
            （请不要超过20个汉字）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right" class="STYLE7">收入金额：            </div></td>
          <td height="34" valign="bottom">
            <div align="left" class="STYLE7">
              <input name="seje" type="text" id="seje" size="10">
            元（添加内容必须为数字，如：1000）</div></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right">类别：</div></td>
          <td height="34" valign="bottom"><label for="select"></label>
            <select name="select" size="1" id="select">
              <option>汇款</option>
              <option>奖金</option>
              <option>补助</option>
              <option>工资</option>
              <option>其他</option>
              <option selected="selected">请选择</option>
            </select></td>
        </tr>
        <tr>
          <td height="34" valign="bottom"><div align="right" class="STYLE7">收入时间：</div></td>
          <td height="34" valign="bottom"><span class="STYLE7">
            <div align="left">
              <input name="srsj" type="text" id="srsj" size="10">
            (日期格式为：2007-12-01)            </div></td>
        </tr>
        <tr>
          <td height="53" colspan="2"><label for="Submit"></label>
            <div align="center">
              <input type="submit" name="Submit" value="添加" id="Submit" onclick="return chkinput(form1)">
            </div></td>
        </tr>
      </table></td>
    </tr>
  </form>
</table>

