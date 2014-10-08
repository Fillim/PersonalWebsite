<style type="text/css">
<!--
.STYLE9 {color: #66CC99}
-->
</style>
<script language="javascript">
	   function chkinput_search(){
	     if(formes.type.value==""){
		   alert('请选择查询条件！');
		   formes.type.focus();
		   return(false);
		 }
		  if(formes.key.value==""){
		   alert('请输入查询关键字！');
		   formes.key.focus();
		   return(false);
		 }
		 return(true);
	   
	   } 
</script>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
  <form name="formes" method="post" action="" onSubmit="return chkinput_search()">
    <tr>
      <td width="493" valign="top"><table width="515" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFCC66">
        <tr>
          <td colspan="6" bordercolor="#FFFFFF"><div align="center" class="STYLE9">财务管理</div>            <div align="center" class="STYLE9">
              <input name="check" type="radio" id="check" value="tb_income" checked="checked">
              收入
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="check" value="tb_outgo" id="check">
            支出</div>            <div align="center" class="STYLE9">请选择查找方式：
              <select name="type" size="1" id="select">
                <option value="">请选择</option>
                <option value="1">时间</option>
                <option value="2">类别</option>
                </select>
              <input name="key" type="text" id="textfield" size="15">
              <input type="submit" name="Submit" value="查询" id="Submit">
              </div></td>
          </tr>
        
		  	      <?php
if(isset($_POST['check']) && $_POST['check']=="tb_income" && $_POST['Submit']!=""){
?>

<tr>
          <td width="67" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">收入金额</div></td>
          <td width="69" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">收入类别</div></td>
          <td width="194" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">收入描述</div></td>
          <td width="102" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">收入时间</div></td>
          <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">操作设置</div></td>
        </tr>
		 <?php
		  		include_once("conn/conn.php");
				$type=$_POST['type'];
				$key=$_POST['key'];
				if($type==1){
		        $sql=mysql_query("select * from tb_income where srsj like '%".$key."%' order by id limit 8",$conn);
				}elseif($type==2){
		      	$sql=mysql_query("select * from tb_income where lb like '%".$key."%'order by id limit 8",$conn);
				}
				$info=mysql_fetch_array($sql);
				if($info==false){
				  ?>
		   <tr>
            <td colspan="6" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="STYLE9"><?php echo "<br><br><div align=center>对不起，没有查找到您要查找的内容！</div>";?></span> </td>
         
		  <?php }else{
		   		do{?>
          <tr>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srje'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['lb'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srms'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srsj'];?></div></td>
		  <td width="36" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><a href="#" onclick="javascript:window.open('addtype.php?checks_id=<?php echo $info['id'];?>&type=<?php echo $_POST['check'];?> ','','width=510,height=265');">修改</a></div></td>
		
		     
          <td width="33" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><a href="delcwsr.php?del_id=<?php echo $info['id'];?>">删除</a></div></td>
        </tr>
		 <?php
	   }while($info=mysql_fetch_array($sql));
	 
	 }
	
	 ?>
		  <?php
}
?> 
      </table>
<?php
if(isset($_POST['check']) && $_POST['check']=="tb_outgo" && $_POST['Submit']!=""){
?>
	            <table width="515" border="1" cellpadding="1" cellspacing="1" bordercolor="#33CCFF" bgcolor="#FFFFFF">
                  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
                    <td width="81" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">支出金额</div></td>
                    <td width="81" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">支出类别</div></td>
                    <td width="147" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">支出描述</div></td>
                    <td width="104" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">支出时间</div></td>
                    <td colspan="2" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">操作设置</div></td>
                  </tr>
				  <?php
		  		include_once("conn/conn.php");
				$type=$_POST['type'];
				$key=$_POST['key'];
				if($type==1){
		       	$sqls=mysql_query("select * from tb_outgo where zcsj like '%".$key."%'order by id  desc limit 8",$conn);
		       	}elseif($type==2){
				$sqls=mysql_query("select * from tb_outgo where lb like '%".$key."%'order by id desc limit 8",$conn);
		  		}
				$infos=mysql_fetch_array($sqls);
		 		if($infos==false){
		  			
		 			  
		  ?>
		  <tr>
            <td colspan="6" bordercolor="#3399FF" bgcolor="#FFFFFF"><span class="STYLE9"><?php echo "<br><br><div align=center>对不起，没有查找到您要查找的内容！</div>";?></span> </td>
		  <?php 	}else{
		   		do{?>
                  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcje'];?>
                    </div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['lb'];?></div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcms'];?></div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcsj'];?></div></td>
                    <td width="30" bordercolor="#3399FF" bgcolor="#FFFFFF"><a href="#" onclick="javascript:window.open('zctype.php?check_id=<?php echo $infos['id'];?>&type=<?php echo $_POST['check'];?>','','width=510,height=265');">修改</a></td>
				  <td width="32" bordercolor="#3399FF" bgcolor="#FFFFFF"><a href="delcwsr_1.php?dels_id=<?php echo $infos['id'];?>">删除</a></td>
				
                  </tr>
				   <?php
	   }while($infos=mysql_fetch_array($sqls));
	 
	 }
	
?> 
 
</table>
	<?php
}
?> 
  </form>
</table>
