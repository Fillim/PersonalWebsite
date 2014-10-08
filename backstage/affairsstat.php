<style type="text/css">
<!--
.STYLE14 {color: #FF3333}
.STYLE17 {font-size: 14px}
.STYLE18 {color: #6666FF}
-->
</style>
 <form name="form" method="post" action="" >
<table width="515" border="0" cellpadding="0" cellspacing="0">
 
    <tr>
      <td width="493" valign="top">
	  
	  <table width="515" border="0" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF">
        <tr>
          <td height="30" bordercolor="#FF9933"><div align="center" class="STYLE14 STYLE17">财务统计</div>
            <div align="center" class="STYLE14">
              <div align="center">
              <select name="select" size="1" id="select">
                <option selected="selected" value="">请选择</option>
                <div align="center">
                <script language="JavaScript" type="text/javascript">
			  for(i=1900;i<2050;i++)
			  document.write('<option>'+i)
			  </script>
                </div>
                </select>
              年收入支出报表
              <input type="submit" name="Submit" value="提交" id="Submit" />
            </div>            
            <div align="center"></div></td>
          </tr>
        </table>
	    
			 <?php
 include_once("conn/conn.php");
if(isset($_POST['select'])){
	$year=$_POST['select'];
?>
	    <table width="513" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="120" height="25" bordercolor="#FF9933"><div align="center" class="STYLE18">月份</div></td>
            <td width="120" bordercolor="#FF9933"><div align="center" class="STYLE18">收入</div></td>
            <td width="122" bordercolor="#FF9933"><div align="center" class="STYLE18">支出</div></td>
            <td width="123" bordercolor="#FF9933"><div align="center" class="STYLE18">余额</div></td>
          	<?php
	 $sql=mysql_query("select distinct month from tb_income where year='".$year."' order by month ",$conn);
	 while($info=mysql_fetch_array($sql)){
	 $month=substr($info['month'],0,2);
	?>  
          <tr>
            <td bordercolor="#FF9933"><div align="center" class="STYLE18"><?php echo substr($info['month'],0,2);?></div></td>
            <td bordercolor="#FF9933">
			  <div align="center" class="STYLE18">
			    <?php 
	 $sr=mysql_query("select sum(srje) as sr from tb_income where year='".$year."' and month like '$month%'",$conn);		
	$info_sr=mysql_fetch_array($sr);

			if($info_sr['sr']==false){
				echo "0";
			}else{
				echo $info_sr['sr'];
			}
			?>
	        </div></td>
            <td bordercolor="#FF9933">
			  <div align="center" class="STYLE18">
			    <?php
	 $zc=mysql_query("select sum(zcje) as zc from tb_outgo where year='".$year."' and month like '$month%'",$conn);	
	$info_zc=mysql_fetch_array($zc);
			
			if($info_zc['zc']==false){
				echo "0";
			}else{
				echo $info_zc['zc'];
			}
			?>
	        </div></td>
            <td bordercolor="#FF9933">
			  <div align="center" class="STYLE18">
			    <?php 
			if($info_sr['sr']-$info_zc['zc']==false){
			echo "0";
			}else{
			echo $info_sr['sr']-$info_zc['zc'];}?>
	        </div></td>
          </tr>
		  <?php
	   }
	 	?>
        </table>
	    <div align="right" class="STYLE14">
	      <?php
	 	$sql2=mysql_query("select sum(srje)as sr from tb_income where year='".$year."' ",$conn);
	 	$sql3=mysql_query("select sum(zcje)as zc from tb_outgo where year='".$year."'",$conn);
	 	$info2=mysql_fetch_array($sql2);
	 	$info3=mysql_fetch_array($sql3);
	?>
	      <?php echo $_POST['select'];?>年总收入 
	      <?php 
			if($info2['sr']==false){
				echo "0";
			}else{
				echo $info2['sr'];
				}?> 
	      元 支出
	      <?php 
			if($info3['zc']==false){
				echo "0";
			}else{
				echo $info3['zc'];
				}?>  
	      元 剩余
	      <?php 
			if($info2['sr']-$info3['zc']==false){
				echo "0";
			}else{
				echo $info2['sr']-$info3['zc'];
				}?> 
	      元 
	      <?php }?>
      </div></td>
</table>
</form>