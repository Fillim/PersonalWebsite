<style type="text/css">
<!--
.STYLE9 {color: #FF6633}
.STYLE10 {color: #FF0000}
-->
</style>
<script language="javascript">
function check_form(form1){
		if(form1.topic.value==""){
			alert("文章主题不能为空！");form1.topic.focus();return false;
		}
		
		if(form1.wznr.value=="")	{
			alert("内容不能为空!");form1.wznr.focus();return false;
		}
		if(form1.checkcode.value==""){
			alert("验证码不能为空！");form1.checkcode.focus();return false;
		}
		if(form1.checkcode.value!=num){
			alert("您输入的验证码不正确，重新输入！");form1.checkcode.focus();return false;
		}
}

</script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="chkappenddiary.php">
    <tr>
      <td width="493" valign="top"><table width="515" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="28" colspan="6"><div align="center" class="STYLE10">发表日记</div></td>
          </tr>
        <tr>
          <td width="102"><div align="right" class="STYLE10">文章主题：</div></td>
          <td colspan="5"><span class="STYLE10">
            <label for="textfield"></label>
            <input name="topic" type="text" id="textfield" size="40">
          </span></td>
        </tr>
        <tr>
          <td><div align="right" class="STYLE10">分类：</div></td>
          <td colspan="5"><span class="STYLE10">
            <label for="select"></label>
            <select name="fl" size="1" id="select">
              <option>请选择</option>
              <option value="工作">工作</option>
              <option value="心情">心情</option>
              <option value="情感">情感</option>
              <option value="热评">热评</option>
              <option value="实时">实时</option>
              <option value="杂记">杂记</option>
            </select>
          </span></td>
        </tr>
        <tr>
          <td rowspan="2"><div align="right" class="STYLE10">您现在的心情：</div></td>
          <td width="76" height="14"><span class="STYLE10">
            <input name="check" type="radio" id="1" value="&lt;img src='images/xq/1.gif'&gt;" checked="checked">
            <label for="check"><img src="images/xq/1.gif" width="20" height="20"></label>
          </span></td>
          <td width="76"><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/2.gif'&gt;" id="2">
            <img src="images/xq/2.gif" width="20" height="20"></span></td>
          <td width="76"><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/3.gif'&gt;" id="3">
            <img src="images/xq/3.gif" width="20" height="20"></span></td>
          <td width="89"><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/4.gif'&gt;" id="4">
            <img src="images/xq/4.gif" width="20" height="20"></span></td>
          <td width="96"><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/5.gif'&gt;" id="5">
            <img src="images/xq/5.gif" width="20" height="20"></span></td>
        </tr>
        <tr>
          <td><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/6.gif'&gt;" id="6">
            <img src="images/xq/6.gif" width="20" height="20"></span></td>
          <td><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/7.gif'&gt;" id="7">
            <img src="images/xq/7.gif" width="20" height="20"></span></td>
          <td><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/8.gif'&gt;" id="8">
            <img src="images/xq/8.gif" width="20" height="20"></span></td>
          <td><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/9.gif'&gt;" id="9">
            <img src="images/xq/9.gif" width="38" height="26"></span></td>
          <td><span class="STYLE10">
            <input type="radio" name="check" value="&lt;img src='images/xq/10.gif'&gt;" id="10">
            <img src="images/xq/10.gif" width="25" height="20"></span></td>
        </tr>
        <tr>
          <td height="23" colspan="6"><span class="STYLE9">
            <textarea name="wznr" cols="70" rows="10" id="textarea"></textarea>
          </span></td>
          </tr>
      </table>
        <label for="textarea"></label>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="95" height="23"><div align="right" class="STYLE10">验证码：</div></td>
            <td width="210"><span class="STYLE10">
              <label for="Submit"></label>
              <label for="radio10"></label>            
              <label for="label"></label>
              <input name="checkcode" type="text" id="checkcode" size="12">
              <input type="hidden" name="createcheckcode" value="">
			  <script language="JavaScript" type="text/javascript">
									var num1=Math.round(Math.random()*10000000);
									var num=num1.toString().substr(0,4);
									document.form1.createcheckcode.value=num;
									document.write("<img name=codeimg4 src='checks.php?num="+num+"'>");
								  </script>
            </span></td>
            <td width="210">&nbsp;</td>
          </tr>
          <tr>
            <td height="23" colspan="3"><div align="center">
              <input type="image" name="imageField" src="images/11.png" onclick=" return check_form(form1)" /><input type="image" name="imageField2" src="images/22.png" onclick="form.reset();return false;"/>
            </div></td>
          </tr>
        </table></td>
    </tr>
  </form>
</table>
