<style type="text/css">
<!--
.STYLE5 {font-size: 12px; color: #66CC99; }
.STYLE6 {color: #3366FF}
.STYLE7 {color: #66CC66}
.STYLE8 {color: #FF0000}
-->
</style>
<script language="javascript">
function bgsd(){
	var sc=document.getElementById('music').value;	//ʹ��getElementById����������ָ�����������Ľڵ�
	if (bgsud.src==""){		//���bgsound��ǵ�src����Ϊ�գ���Ϊ�ñ��ָ����������
    	bgsud.src=sc;
		document.getElementById('subm').value="ֹͣ";
  	}else{					//���bgsound��ǵ�src���Բ�Ϊ�գ���src���Ը������
	  	document.getElementById('subm').value="����";
    	bgsud.src="";
  	}
}
</script>
<bgsound src="" loop="-1" id="bgsud"></bgsound>
<?php
include_once("conn/conn.php");
$sql=mysql_query("select * from tb_clock");
$info=mysql_fetch_array($sql);
?>                                                                                
<table width="515" height="302" border="0" cellpadding="0" cellspacing="0">
  <form action="setclock.php" method="post" name="form" id="form">
        <tr>
      <td width="493" height="302" valign="top"><p align="center" class="STYLE5">�������� &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="javascript:window.open('zzclock.php','','');">����ִ��</a></p>
	    <table width="515" border="0">
          <tr>
            <td><div align="center" class="STYLE6">��ǰʱ�䣺 <script type=text/javascript>
		document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
		setInterval("labtime.innerText=new Date().toLocaleString()",1000)
		</script></div></td>
          </tr>
        </table>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="189" height="28" valign="middle" bgcolor="#FFFFFF"><p align="right" class="STYLE7">�������ڣ�</p></td>
            <td width="326" valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="select"></label>
              <select name="year" size="1" id="year">
                <script language="JavaScript" type="text/javascript"><!--
for(i=1900;i<2050;i++)
document.write('<option>'+i)
//--></script>
              </select>
              ��
              <select name="month" id="month">
                <script language="JavaScript" type="text/javascript"><!--
for(i=1;i<13;i++) document.write
('<option>'+i)
//--></script>
              </select>
              ��
              <select name="day" id="day">
			  <SCRIPT language=JavaScript><!--
for(i=1;i<31;i++) document.write
('<option>'+i)
//--></SCRIPT>
              </select>
            ��</span></td>
          </tr>
          <tr>
            <td height="24" valign="middle" bgcolor="#FFFFFF"><p align="right" class="STYLE7">����ʱ�䣺</p></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="select"></label>
                            <select name="hour" id="select4">
							<SCRIPT language=JavaScript><!--
for(i=0;i<24;i++) document.write
('<option>'+i)
//--></SCRIPT>
              </select>
              ʱ
<select name="minute" id="minute">
              <SCRIPT language=JavaScript><!--
for(i=0;i<60;i++) document.write
('<option>'+i)
//--></SCRIPT>  
              </select>
              ��
              <select name="second" id="second">
			    <SCRIPT language=JavaScript><!--
for(i=0;i<60;i++) document.write
('<option>'+i)
//--></SCRIPT>  
              </select>
            ��</span></td>
          </tr>

          <tr>
            <td height="27" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">����������</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="label"></label>
              <select name="music" size="1" id="music">
                <option value="music/bg.mp3">ŭ�ŵ�����</option>
                <option value="music/dh.mp3">��</option>
              </select>
              <input type="button" name="subm" value="����" id="subm" onclick="javascript:bgsd()" />
            </span></td>
          </tr>
          <tr>
            <td height="23" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">�������⣺</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="textfield"></label>
              <label for="label3"></label>
              <select name="zht" size="1" id="label3">
			  <option>��ѡ����������</option>
			 <?php 
			  include_once("conn/conn.php");
			  $sql=mysql_query("select * from tb_motif order by createtime desc",$conn);
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			  echo"<option>������������</option>";
			  }else{
			  do{
			  echo"<option value=".$info['zhut'].">".$info['zhut']."</option>";
			  }
			  while($info=mysql_fetch_array($sql));
			  }
			  ?>
              </select>
            </span></td>
          </tr>
          <tr>
            <td height="25" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">���ѷ�ʽ��</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <input type="radio" name="fs" value="����һ��" id="repeat1"/>
              <label for="radiobutton">����һ��
              <input type="radio" name="fs" value="ÿ������" id="repeat1"  checked="checked"/>
            ÿ������            </label>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="label2"></label>
              </span>
              <div align="center" class="STYLE7">
                <input type="submit" name="Submit2" value="������ʱ����" id="label2" />
            </div></td>
          </tr>
        </table>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="74"><p>��ܰ��ʾ��</p>
            </td>
            <td width="425">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right">1��</div></td>
            <td>����ر�ҳ�棬���ӽ��޷����塣</td>
          </tr>
          <tr>
            <td><div align="right">2��</div></td>
            <td>�ٴδ�ҳ�棬��ǰ�趨��������Ȼ��Ч��</td>
          </tr>
          <tr>
            <td><div align="right">3��</div></td>
            <td>��Ҫ�����������������Ա�������ʾ������</td>
          </tr>
          <tr>
            <td><div align="right">4��</div></td>
            <td>������������ʱ��Ϊ׼������У�Ժñ���ʱ�䡣</td>
          </tr>
        </table>
        </td>
    </tr>
  </form>
</table>
