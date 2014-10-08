<style type="text/css">
<!--
.STYLE2 {color: #66CC66}
.STYLE5 {color: #66CC66; font-size: 12px; }
.STYLE6 {color: #66FFCC}
.STYLE7 {color: #66CC99; }
-->
</style>

  <script language="javascript">
		     function chkinput(form){
			  if(form.zt.value==""){
			    alert("请输入事物主题！");
			    form.zt.focus();
				return(false);
			  }
			    return(true);							
			     
			   }
	</script>
      <table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="31" colspan="3"><span class="STYLE5">添加事物主题</span></td>
  </tr>
		 <form name="form" method="post" action="chkmotif.php" onSubmit="return chkinput(this)">
	        <tr>
          <td width="177" height="62"><div align="right" class="STYLE2">添加事物主题：</div></td>
          <td width="173">
            <div align="left">
              <input type="text" name="zt" id="zt">
              </div></td><td width="165">
            <input type="submit" name="submit" value="提交" id="submit">
	        </tr>
        <tr>
          <td colspan="3">&nbsp;</td>
        </tr>
		      </form>
      </table>
  