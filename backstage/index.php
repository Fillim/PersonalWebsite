<?php
session_start();
if(isset($_SESSION['user']) && isset($_SESSION['password'])){	

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="CSS/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.STYLE1 {color: #00FF33}
.STYLE2 {color: #FF0033}
-->
</style>
</head>
<script type="text/javascript" src="js/xmlHttpRequest.js"></script>
<script type="text/javascript">
timer = window.setInterval("ShowTime()",1000); 
function ShowTime(){
	xmlHttp.open("post","showtime.php", true);
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4){
			tet = xmlHttp.responseText;
			if(tet!=0){
				alert('�������ѣ�');
				window.location.href='control.php?ids='+tet;
				
			}
		}
	}
	xmlHttp.send(null);
}
</script>
<body>

<?php
include_once("top.php");
?>
<table width="778" height="402" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td width="200" valign="top"><table id="__01" width="200" height="402" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3"><img src="images/zuo_01.gif" width="200" height="21" alt="" /></td>
	</tr>
	<tr>
		<td rowspan="6">
			<img src="images/zuo_02.gif" width="16" height="187" alt=""></td>
		<td width="93" height="25" valign="middle" background="images/zuo_03.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('����')" class="shadow">��ҳ����</a></span></div></td>
		<td width="91" height="187" rowspan="6" align="left" background="images/zuo_04.gif"><div align="center" class="shadow" id="submenu" > &nbsp;</div>
		  <p>
		    <script language="javascript">
function Fsubmenu(value){
	switch (value){
		case "����":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("�����������");?>'>�����������</a><br><a href='index.php?link=<?php echo urlencode("��ѯ��������");?>'>��ѯ��������</a><br><a href='index.php?link=<?php echo urlencode("��������");?>'>��������</a>";
			break;			
		case "���":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("�������");?>'>�������</a><br><a href='index.php?link=<?php echo urlencode("���֧��");?>'>���֧��</a><br><a href='index.php?link=<?php echo urlencode("�������");?>'>�������</a><br><a href='index.php?link=<?php echo urlencode("�����ѯ");?>'>�����ѯ</a><br><a href='index.php?link=<?php echo urlencode("����ͳ��");?>'>����ͳ��</a>";
			break;					
		case "�ռ�":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("����ռ�");?>'>����ռ�</a><br><a href='index.php?link=<?php echo urlencode("�鿴�ռ�");?>'>�鿴�ռ�</a><br><a href='index.php?link=<?php echo urlencode("��ѯ�ռ�");?>'>��ѯ�ռ�</a><br><a href='index.php?link=<?php echo urlencode("ɾ���ռ�");?>'>ɾ���ռ�</a>";
			break;	
		case "����":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("�޸�����");?>'>�޸�����</a>";
			break;						
		}
}
          </script>
	      &nbsp;</p></td>
	</tr>
	<tr>
		<td width="93" height="28" background="images/zuo_05.gif"><div align="center"><span class="STYLE1"><a href="#"onmousemove="Fsubmenu('���')" class="shadow">�������</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="29" background="images/zuo_06.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('�ռ�')" class="shadow">�ҵ��ռ�</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="31" background="images/zuo_07.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('����')" class="shadow">�����ռǱ�</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="23" background="images/zuo_08.gif"><div align="center" class="STYLE1"><a href="logout.php">�˳�</a></div></td>
	</tr>
	<tr>
		<td>
			<img src="images/zuo_09.gif" width="93" height="51" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/zuo_10.gif" width="200" height="194" alt=""></td>
	</tr>
</table></td>
    <td width="578"  valign="top" >
	<table id="__01" width="578" height="402" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="29" colspan="3"><table width="578" height="29" border="0" cellpadding="0" cellspacing="0" background="images/y_01.gif">
          <tr>
            <td width="169"><div align="center" class="STYLE2"> <div align="center"><span class="STYLE1">DATE:</span>
                <script language=JavaScript>
   today=new Date();
   function initArray(){
   this.length=initArray.arguments.length
   for(var i=0;i<this.length;i++)
   this[i+1]=initArray.arguments[i]  }
   var d=new initArray(
     "������",
     "����һ",
     "���ڶ�",
     "������",
     "������",
     "������",
     "������");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: ����'> ",
     today.getYear(),"��",
     today.getMonth()+1,"��",
     today.getDate(),"��",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
                  </script>
              </div></div></td>
            <td width="409" valign="top"><marquee direction='left' style=" color:#FF3300"scrollamount='2' scrolldelay='100'onmouseout='this.start()' onmouseover='this.stop()'>
&nbsp;&nbsp;<img src="images/run.gif" width="19" height="18">&nbsp;&nbsp;�ǵ�Ҫ���Ĺ�ÿһ�죡
            </marquee></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td>
			<img src="images/y_02.gif" width="22" height="357" alt=""></td>
		<td width="515" height="357" valign="top" background="images/beij.jpg">
		
		<?php 
		if(isset($_GET['link'])){
			$link=$_GET['link'];
		}else{
			$link="��ҳ";
		}
		switch($link){
			case "�����������":			
        		include "motif.php";			
    		break;	
			case "��ѯ��������":			
        		include "querymotif.php";			
    		break;				
		    case "��������":
        		include "clock.php";
    		break;
			case "�������":
        		include "income.php";
    		break;
			case "���֧��":
        		include "outgo.php";
    		break;
			case "�������":
        		include "cwgl.php";
    		break;
			case "�����ѯ":
        		include "affairsquery.php";
    		break;
			case "����ͳ��":
        		include "affairsstat.php";
    		break;
			case "����ռ�":
        		include "appenddiary.php";
    		break;
			case "�鿴�ռ�":
        		include "lookdiary.php";
    		break;
			case "��ѯ�ռ�":
        		include "querydiary.php";
    		break;
			case "ɾ���ռ�":
        		include "deldiary.php";
    		break;
			case "�޸�����":
        		include "amendcode.php";
    		break;
			default:
				include "indexs.php";
		}
		?>
		</td>
		<td>
			<img src="images/y_04.gif" width="41" height="357" alt=""></td>
	</tr>
	<tr>
		<td colspan="3">
			<img src="images/y_05.gif" width="578" height="16" alt=""></td>
	</tr>
</table>	</td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>

</body>
</html>
<?php
}else{
include('enter.php');
}
?>