<style type="text/css">
<!--
.STYLE1 {
	font-size: 24px;
	color: #FF6600;
}
.STYLE3 {font-size: 16px}
.STYLE4 {color: #FF6633}
.STYLE6 {color: #000000; }
-->
</style>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="552"></td>
  </tr>
  <tr>
    <td>
      <table width="562" height="456" border="0" align="right" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td width="560" height="454" valign="top" bgcolor="#FFFFFF">
            
            <div align="right">
              <table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="images/dh_back_1.gif">&nbsp;<span class="STYLE4">&nbsp;<span class="STYLE3">&nbsp;用户注册</span></span></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
              </table>
              <table width="515" height="109" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="515" height="109" valign="middle"><div align="center">
                      <p class="STYLE1">梦幻的世界欢迎你！</p>
                    </div></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1" bgcolor="#FFF09F"></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                  
                  
<script language="javascript">
	function chkinput(form){						//定义一个函数  	
		if(form.usernc.value==""){					//判断usernc文本框中的值是否为空	
			alert("请输入用户昵称！");   			//如果为空则输出"请输入用户昵称！"
			form.usernc.focus();					//返回到usernc文本框			
			return(false);
		}
		if(form.userpwd.value==""){					//判断userpwd文本框中的值是否为空	
			alert("请输入注册密码！");   			//如果为空则输出"请输入注册密码！"
			form.userpwd.focus();					//返回到userpwd文本框	
			return(false);		 
		}
		if(form.userpwd1.value==""){				//判断userpwd1文本框中的值是否为空	
			alert("请输入重复密码！");   			//如果为空则输出"请输入重复密码！"
			form.userpwd1.focus();					//返回到userpwd1文本框	
			return(false);
		}
		if(form.userpwd.value!=form.userpwd1.value){	//判断两次提交密码是否相等
			alert("密码与确认密码不同！");   		//如果不同则输出"密码与确认密码不同！"
			form.userpwd.focus();					//返回到userpwd文本框	
			return(false); 
		}
		if(form.userpwd.value.length<6){			//判断提交的密码长度是否大于6位
			alert("密码长度应大于6位！");   		//如果不大于6位，则给出提示
			form.userpwd.focus();					//返回到userpwd文本框	
			return(false); 
		} 
		if(form.truename.value==""){				//判断truename文本框中的值是否为空	
			alert("请输入真实姓名！");				//如果不同则输出"请输入真实姓名！"
			form.truename.focus();					//返回到truename文本框	
			return(false);
		}
		if(form.sex.value==""){						//判断sex文本框中的值是否为空	
			alert("请选择性别！");					//如果不同则输出"请选择性别！"
			form.sex.focus();						//返回到sex文本框
			return(false);
		}
		if(form.mb.value==""){						//判断mb文本框中的值是否为空					
			alert("请输入密保问题！");				//如果不同则输出"请输入密保问题！"
			form.mb.focus();						//返回到mb文本框
			return(false);
		} 
		if(form.mbwt.value==""){					//判断mbwt文本框中的值是否为空
			alert("请输入密保答案！");				//如果不同则输出"请输入密保答案！"
			form.mbwt.focus();						//返回到mbwt文本框
			return(false);
		} 
	return(true);								     
  }	  
</script>
                <form name="form1" method="post" action="savereg.php" onSubmit="return chkinput(this)">
                  <tr>
                    <td width="185" height="30"><div align="right" class="STYLE6">用户昵称：</div></td>
                    <td width="295" height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <input type="text" name="usernc" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td width="185" height="30"><div align="right" class="STYLE6">密&nbsp;&nbsp;码：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                       <input type="password" name="userpwd" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td width="185" height="30"><div align="right" class="STYLE6">重复密码：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                       <input type="password" name="userpwd1" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right" class="STYLE6">真实姓名：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <input type="text" name="truename" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right" class="STYLE6">性&nbsp;&nbsp;别：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <select name="sex">
                          <option value="">请选择</option>
                          <option value="男">男</option>
                          <option value="女">女</option>
                        </select>
                    </span></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right" class="STYLE6">密保问题：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <input type="text" name="mb" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right" class="STYLE6">密保答案：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <input type="text" name="mbda" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td colspan="3" valign="middle"><div align="center" class="STYLE6">
                        <p>&nbsp;  </p>
                        <p>
                          <input name="submit" type="submit" class="buttoncss" value="注册" />
                          &nbsp;&nbsp;&nbsp;
                          <input name="reset" type="reset" class="buttoncss" value="重写" />
                        </p>
                    </div></td>
                  </tr>
                </form>
              </table>
          </div></td>
        </tr>
      </table>
  </tr>
</table>
</td>
  </tr>
</table>