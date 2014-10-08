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
      <table width="554" height="167" border="0" align="right" cellpadding="0" cellspacing="1" bgcolor="#FCD424">
        <tr>
          <td width="552" height="165" valign="top" bgcolor="#FFFFFF">
            
            <div align="right">
              <table width="550" height="24" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td background="images/dh_back_1.gif">&nbsp;<span class="STYLE4">&nbsp;<span class="STYLE3">&nbsp;密码找回</span></span></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="1"></td>
                </tr>
              </table>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
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
              <p>&nbsp;</p>
              <table width="480" border="0" align="center" cellpadding="0" cellspacing="0">
                  
                  
                <script language="javascript">
			 
			   function chkinput(form){				
			    
				 if(form.usernc.value==""){				
				   alert("请输入用户昵称！");   		
				   form.usernc.focus();					
				   return(false);
				 }	 	 
				if(form.mb.value==""){
				   alert("请输入密保问题！");
				   form.mb.focus();
				   return(false);
				 } 
					 
				 if(form.mbwt.value==""){
				   alert("请输入密保答案！");
				   form.mbda.focus();
				   return(false);
				 } 
			      return(true);							
			     
			   }
			  
			  </script>
                <form name="form" method="post" action="savecodeback.php" onSubmit="return chkinput(this)">
                  <tr>
                    <td width="185" height="30"><div align="right" class="STYLE6">用户昵称：</div></td>
                    <td width="295" height="30" colspan="2"><span class="STYLE6">&nbsp;
                        <input type="text" name="usernc" size="25" class="inputcss">
                    </span></td>
                  </tr>
                  <tr>
                    <td width="185"><div align="right" class="STYLE6">密保问题：</div></td>
                    <td colspan="2"><span class="STYLE6">&nbsp;
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
                        <p>&nbsp;                        </p>
                        <p>
  <input name="submit" type="submit" class="buttoncss" value="提交" />
  &nbsp;&nbsp;&nbsp;
                          <input name="reset" type="reset" class="buttoncss" value="重写" />
                        </p>
                        <p>&nbsp;</p>
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