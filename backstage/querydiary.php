<style type="text/css">
<!--
.STYLE16 {color: #000000}
.STYLE17 {color: #FF3366}
-->
</style>
<table width="515" height="336" border="0" cellpadding="0" cellspacing="0">
	 <script language="javascript">
	   function chkinput_search(form){
	     if(form.type.value==""){
		   alert('��ѡ���ѯ������');
		   form.type.focus();
		   return(false);
		 }
		  if(form.keyword.value==""){
		   alert('�������ѯ�ؼ��֣�');
		   form.keyword.focus();
		   return(false);
		 }
		 return(true);
	   
	   } 
	 </script>
  <form name="form1" method="post" action="" onsubmit="return chkinput_search(this)">
   
    <tr>
      <td width="493" valign="top"><label for="textarea"></label>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="515" height="26"><div align="center" class="STYLE17">��ѯ�ռ�</div></td>
          </tr>
          <tr>
            <td height="24"><div align="center" class="STYLE17">��ѡ����ҷ�ʽ��
                <select name="type" >
                  <option value="">��ѡ��</option>
                  <option value="1">����</option>
                  <option value="2">����</option>
                  <option value="3">����</option>
                </select>
                <input name="keyword" type="text"  size="15">
                <input type="submit" name="Submit" value="��ѯ" id="Submit">
            </div>
              <span class="STYLE17">
              <label for="select"></label>
              <label for="textfield"></label>
              <label for="Submit"></label>
              </span>
              <div align="center" class="STYLE17"></div></td>
          </tr>
        </table>
		  <?php
	     include_once("conn/conn.php");
	   	 if($_POST["Submit"]!=""){
	     $type=$_POST["type"];
	     $keyword=$_POST["keyword"];
		 if($type==1){
		  $sql=mysql_query("select * from tb_jour where wzzt like '%$keyword%' order by id desc limit 2");
		 }elseif($type==2){
		  $sql=mysql_query("select * from tb_jour where wznr like '%$keyword%' order by id desc limit 2");
		 }elseif($type==3){
		  $sql=mysql_query("select * from tb_jour where rjfl like '%$keyword%' order by id desc limit 2"); 
		 }
		 $info=mysql_fetch_array($sql);
		 if($info==false){
		  echo "<br><br><div align=center>�Բ���û�в��ҵ���Ҫ���ҵ����ݣ�</div>";
		 }else{
		   do{
	  ?>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="405"><span class="STYLE16">�������⣺<?php echo str_ireplace($keyword,"<font color='#FF0000'>".$keyword."</font>",$info['wzzt']);?></span></td>
			
            <td width="110"><span class="STYLE16">���ࣺ<?php echo str_ireplace($keyword,"<font color='#FF0000'>".$keyword."</font>",$info['rjfl']);?></span></td>
          </tr>
          <tr>
            <td colspan="2"><span class="STYLE16"><?php 
			//echo str_ireplace($keyword,"<font color='#FF0000'>".$keyword."</font>",$info['wznr']);			
			$len=iconv_strpos($info['wznr'],$keyword,'0','gbk');
			if(($len-20)<0){
				$lens=0;
			}else{
				$lens=$len-20;
			}
			$str=iconv_substr($info['wznr'],$lens,100,'gbk');
			echo str_ireplace($keyword,"<font color='#FF0000'>".$keyword."</font>",$str);?></span></td>
          </tr>
          <tr>
            <td colspan="2"><div align="right"><a href="#" onclick="javascript:window.open('quan.php?checks_id=<?php echo $info['id'];?>','','width=535,height=470');">|�鿴ȫ��|</div></a></td>
	
          </tr>
        </table>   
		  <?php
	     }while($info=mysql_fetch_array($sql));
		 } 
	   }
	 ?>     
        <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
