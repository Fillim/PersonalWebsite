<style type="text/css">
<!--
.STYLE11 {color: #FF6600}
.STYLE13 {color: #0000FF}
.STYLE14 {color: #000000}
.STYLE15 {color: #0099FF}
-->
</style>
<table width="515" border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="">
      <tr>
      <td width="493" valign="baseline"><table width="515" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td bordercolor="#FFFFFF"><div align="center" class="STYLE11">�ռ��б�</div></td>
        </tr>
      </table>
	  
        <table width="515" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
		<?php
include_once("conn/conn.php");
if(!isset($_GET["page"]) || !is_numeric($_GET["page"])){
	$page=1; 
}else{
	$page=intval($_GET["page"]);
}
$sql="select count(*) as total from tb_jour";
$query=mysql_query($sql);
$infos=mysql_fetch_array($query);
$total=$infos['total'];
if($total=='0'){
	echo "<div align=center>�Բ��������ռǣ�</div>";
}else{
	$pagesize=2;
	if($total%$pagesize==0){
		$pagecount=intval($total/$pagesize);
	}else{
		$pagecount=ceil($total/$pagesize);
	}
	$sql=mysql_query("select * from tb_jour order by time desc limit ".($page-1)*$pagesize.",$pagesize  ",$conn);
	while($info=mysql_fetch_array($sql)){
?>
          <tr>
            <td width="434" valign="middle"><span class="STYLE11"><span class="STYLE13">�������⣺</span><?php echo $info['wzzt'];?></span></td>
            <td width="81" height="23" valign="middle"><div align="center"><span class="STYLE13">���飺</span><span class="STYLE11"><?php echo $info['xq'];?></span></div></td>
          </tr>
          <tr>
            <td width="434" valign="middle" class="STYLE11"><span class="STYLE13">����ʱ�䣺</span><?php echo $info['time'];?></td>
            <td height="23" valign="middle"><div align="center"><span class="STYLE13">���ࣺ</span><span class="STYLE11"><?php echo $info['rjfl'];?></span></div></td>
          </tr>
          <tr valign="middle">
            <td colspan="2"><span class="STYLE11">
			<?php 
			$zf=iconv_strlen($info['wznr'],'gb2312');
			if ($zf>120){
				echo iconv_substr($info['wznr'],0,120,'gb2312')."......";
			}else{
			echo $info['wznr'];
			}
			?></span></td>
          </tr>
          <tr valign="middle">
		   <script language="javascript">
			    function openeditwindow(x){
				
				   window.open("updiary.php?id="+x,"newframe","top=100,left=200,width=535,height=470,scrollbars=no,toolbar=yes,location=yes");
				  
				}
			  
			  </script>
            <td colspan="2"><div align="right" style=" border-bottom: 1px #CCCCCC dashed;"><a href="javascript:openeditwindow(<?php echo $info['id'];?>)"> <span  style="color:#ca4d26;">| <span class="STYLE14">�Ķ�ȫ��</span> |</span></a> </div></td>
          </tr>
		 <?php
		}
		}
		?>
        </table>
		
        <p align="right" class="STYLE15">��������&nbsp;<?php echo $total;?>&nbsp;��&nbsp;ÿҳ��ʾ&nbsp;<?php echo $pagesize;?>&nbsp;��&nbsp;��&nbsp;<?php echo $page;?>&nbsp;ҳ/��&nbsp;<?php echo $pagecount;?>&nbsp;ҳ&nbsp;&nbsp; <a href="<?php echo $_SERVER["PHP_SELF"]?>?page=1" class="a1">��ҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>" class="a1">��һҳ</a>&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>" class="a1">��һҳ&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php echo $pagecount;?>" class="a1">βҳ</a></p></td>
    </tr>
  </form>
</table>
