<style type="text/css">
<!--
.STYLE9 {color: #66CC99}
-->
</style>
<script language="javascript">
	   function chkinput_search(){
	     if(formes.type.value==""){
		   alert('��ѡ���ѯ������');
		   formes.type.focus();
		   return(false);
		 }
		  if(formes.key.value==""){
		   alert('�������ѯ�ؼ��֣�');
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
          <td colspan="6" bordercolor="#FFFFFF"><div align="center" class="STYLE9">�������</div>            <div align="center" class="STYLE9">
              <input name="check" type="radio" id="check" value="tb_income" checked="checked">
              ����
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" name="check" value="tb_outgo" id="check">
            ֧��</div>            <div align="center" class="STYLE9">��ѡ����ҷ�ʽ��
              <select name="type" size="1" id="select">
                <option value="">��ѡ��</option>
                <option value="1">ʱ��</option>
                <option value="2">���</option>
                </select>
              <input name="key" type="text" id="textfield" size="15">
              <input type="submit" name="Submit" value="��ѯ" id="Submit">
              </div></td>
          </tr>
        
		  	      <?php
if(isset($_POST['check']) && $_POST['check']=="tb_income" && $_POST['Submit']!=""){
?>

<tr>
          <td width="67" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">������</div></td>
          <td width="69" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">�������</div></td>
          <td width="194" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">��������</div></td>
          <td width="102" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">����ʱ��</div></td>
          <td colspan="2" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9">��������</div></td>
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
            <td colspan="6" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><span class="STYLE9"><?php echo "<br><br><div align=center>�Բ���û�в��ҵ���Ҫ���ҵ����ݣ�</div>";?></span> </td>
         
		  <?php }else{
		   		do{?>
          <tr>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srje'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['lb'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srms'];?></div></td>
          <td bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><?php echo $info['srsj'];?></div></td>
		  <td width="36" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><a href="#" onclick="javascript:window.open('addtype.php?checks_id=<?php echo $info['id'];?>&type=<?php echo $_POST['check'];?> ','','width=510,height=265');">�޸�</a></div></td>
		
		     
          <td width="33" bordercolor="#FFFFFF" bgcolor="#FFFFFF"><div align="center" class="STYLE9"><a href="delcwsr.php?del_id=<?php echo $info['id'];?>">ɾ��</a></div></td>
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
                    <td width="81" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">֧�����</div></td>
                    <td width="81" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">֧�����</div></td>
                    <td width="147" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">֧������</div></td>
                    <td width="104" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">֧��ʱ��</div></td>
                    <td colspan="2" bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center">��������</div></td>
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
            <td colspan="6" bordercolor="#3399FF" bgcolor="#FFFFFF"><span class="STYLE9"><?php echo "<br><br><div align=center>�Բ���û�в��ҵ���Ҫ���ҵ����ݣ�</div>";?></span> </td>
		  <?php 	}else{
		   		do{?>
                  <tr bordercolor="#0000FF" bgcolor="#FFFFFF">
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcje'];?>
                    </div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['lb'];?></div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcms'];?></div></td>
                    <td bordercolor="#3399FF" bgcolor="#FFFFFF"><div align="center"><?php echo $infos['zcsj'];?></div></td>
                    <td width="30" bordercolor="#3399FF" bgcolor="#FFFFFF"><a href="#" onclick="javascript:window.open('zctype.php?check_id=<?php echo $infos['id'];?>&type=<?php echo $_POST['check'];?>','','width=510,height=265');">�޸�</a></td>
				  <td width="32" bordercolor="#3399FF" bgcolor="#FFFFFF"><a href="delcwsr_1.php?dels_id=<?php echo $infos['id'];?>">ɾ��</a></td>
				
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
