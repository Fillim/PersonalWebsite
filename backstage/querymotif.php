<style type="text/css">
<!--
.STYLE2 {color: #66CC66}
.STYLE5 {color: #66CC66; font-size: 12px; }
-->
</style>

  <script language="javascript">
		     function chkinput(form){
			  if(form.cxzt.value==""){
			    alert("�������ѯ�Ĺؼ��֣�");
			    form.cxzt.focus();
				return(false);
			  }
			    return(true);							
			     
			   }
	</script>
      <table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="31" colspan="3"><span class="STYLE5">��ѯ��������</span></td>
  </tr>
		 <form name="form" method="post" action="" onSubmit="return chkinput(this)">
	        <tr>
          <td width="177" height="62"><div align="right" class="STYLE2">��ѯ�ؼ��֣�</div></td>
          <td width="173">
            <div align="left">
              <input type="text" name="cxzt" id="zt">
              </div></td><td width="165">
            <input type="submit" name="submit" value="����" id="submit">
	        </tr>
        <tr>
          <td colspan="3" valign="top">
 <?php if(isset($_POST['submit']) && $_POST['submit']=="����"){
	?>
		  <table width="464" border="0" cellpadding="0" cellspacing="0">
		  <?php 
include("conn/conn.php");
$cxzt=$_POST['cxzt'];
$sql=mysql_query("select * from tb_motif where zhut like '%".trim($cxzt)."%'");
$info=mysql_num_rows($sql);
if($info==false){  
?> 
				  <tr>
				    <td colspan="3"><div align="center"><?php echo"����������Ϣ�����ڣ���ʹ�����ƵĹؼ��ֽ��м�����"?></div></td>
		    </tr>
				  
            
<?php }else{
	while($info=mysql_fetch_array($sql)){?>
         <tr>
              <td width="149"><div align="center" class="STYLE8 STYLE2">��������</div></td>
              <td width="223"><div align="center" class="STYLE8 STYLE2">���ʱ��</div></td>
              <td width="92"><div align="center" class="STYLE8 STYLE2">���⴦��</div></td>
            </tr>
		 <tr>
             <td width="149"><div align="center" class="STYLE8"><?php echo $info['zhut'];?></div></td>
              <td width="223"><div align="center" class="STYLE8"><?php echo $info['createtime'];?></div></td>
              <td width="92"><div align="center" class="STYLE8"><a href="javascript:if(window.confirm('ȷ��ɾ������������ô��')==true){window.location.href='delezhut.php?del_id=<?php echo $info['id']; ?>';}">ɾ��</a></div></td>
            </tr>
			<?php
		}
		
		
}
?>				
          </table>
		  <?php }?>
		  </td>
        </tr>
		      </form>
      </table>
  