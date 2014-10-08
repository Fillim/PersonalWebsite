<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>支出描述</title>
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
			    
				 if(form.zcms.value==""){				
				   alert("请输入支出描述！");   		
				   form.zcms.focus();					
				   return(false);
				 }
				 
				 if(form.zcje.value==""){
				 
				   alert("请输入支出金额！");   
				   form.zcje.focus();
				   return(false);
				 
				 }
				  if(isNaN(form.zcje.value)){
				    alert("请输入有效的金额！");  
					 form.zcje.focus();
				   return(false);
				   }
				 
				 if(form.zcsj.value==""){
				  alert("请输入收入时间！");   
				   form.zcsj.focus(); 
				   return(false);
				   }
				if(!checkdata1(form.zcsj.value)||form.zcsj.value.length!=10){
				alert("您输入的基本格式不对!");
				form.zcsj.focus();
				return(false);
				}
				if(CheckDate(form.zcsj.value)){
				alert("您输入收入日期不正确（如：2007-12-01）\n 请注意闰年!");
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
          <td height="37" colspan="2"><div align="center" class="STYLE10">添加支出</div></td>
          </tr>
        <tr>
          <td width="161" height="35"><div align="right" class="STYLE10">支出描述：</div></td>
          <td width="321"><span class="STYLE10">
            <input type="text" name="zcms" id="zcms" />
          （请不要超过20个汉字）</span></td>
        </tr>
        <tr>
          <td height="38"><div align="right" class="STYLE10">类别：</div></td>
          <td><span class="STYLE10">
            <select name="select" size="1" id="select">
              <option>饮食</option>
              <option>学习</option>
              <option>日常生活</option>
              <option>社交通讯</option>
              <option>服饰装扮</option>
              <option>其他</option>
              <option selected="selected">请选择</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td height="38"><div align="right" class="STYLE10">支出金额：</div></td>
          <td><span class="STYLE10">
            <input name="zcje" type="text" id="zcje" size="10" />
元（添加内容必须为数字，如：1000）</span></td>
        </tr>
        <tr>
          <td height="39"><div align="right" class="STYLE10">支出时间：</div></td>
          <td><span class="STYLE10">
            <input name="zcsj" type="text" id="zcsj" size="10" />
（格式为：2011-06-03）</span></td>
        </tr>
        <tr>
          <td height="41" colspan="2"><label for="Submit"></label>
            <div align="center">
              <input type="submit" name="Submit" value="提交" id="Submit" onclick="return chkinput(form)" />
            </div></td>
          </tr>
        
      </table>
      <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
</body>
</html>
