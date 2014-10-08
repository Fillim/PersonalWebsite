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
                  <td background="images/dh_back_1.gif">&nbsp;<span class="STYLE4">&nbsp;<span class="STYLE3">&nbsp;新密码设置</span></span></td>
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
			 
			   function chk()
  {
     if(document.form.passx.value==""){
	 alert('请输入新密码！');
	 return false;
	 }
	 if(document.form.passx.value!=document.form.qpass.value){
	 alert('对不起两次密码不一致！');
	 return false;
	 }
	 return true;
  }
			  
			  </script>
                <form name="form" method="post" action="savecodeback_a.php" onSubmit="return chk()">
                  <tr>
                    <td width="185"><div align="right" class="STYLE6">填写新密码：</div></td>
                    <td width="295" colspan="2"><div align="left"><span class="STYLE6">
                      <input name="passx" type="password" class="inputcss" id="passx" size="25">
                      <input name="user" type="hidden" id="user" value="<?php echo $_GET['use'];?>">
                    </span></div></td>
                  </tr>
                  <tr>
                    <td height="30"><div align="right" class="STYLE6">确认新密码：</div></td>
                    <td height="30" colspan="2"><span class="STYLE6">
                      
                      <div align="left">
                        <input name="qpass" type="password" class="inputcss" id="qpass" size="25">                         
                        </div></td>
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