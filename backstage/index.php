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
				alert('闹钟提醒！');
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
		<td width="93" height="25" valign="middle" background="images/zuo_03.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('闹钟')" class="shadow">网页闹钟</a></span></div></td>
		<td width="91" height="187" rowspan="6" align="left" background="images/zuo_04.gif"><div align="center" class="shadow" id="submenu" > &nbsp;</div>
		  <p>
		    <script language="javascript">
function Fsubmenu(value){
	switch (value){
		case "闹钟":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("添加事物主题");?>'>添加事物主题</a><br><a href='index.php?link=<?php echo urlencode("查询事物主题");?>'>查询事物主题</a><br><a href='index.php?link=<?php echo urlencode("设置闹钟");?>'>设置闹钟</a>";
			break;			
		case "理财":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("添加收入");?>'>添加收入</a><br><a href='index.php?link=<?php echo urlencode("添加支出");?>'>添加支出</a><br><a href='index.php?link=<?php echo urlencode("财务管理");?>'>财务管理</a><br><a href='index.php?link=<?php echo urlencode("财务查询");?>'>账务查询</a><br><a href='index.php?link=<?php echo urlencode("财务统计");?>'>财务统计</a>";
			break;					
		case "日记":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("添加日记");?>'>添加日记</a><br><a href='index.php?link=<?php echo urlencode("查看日记");?>'>查看日记</a><br><a href='index.php?link=<?php echo urlencode("查询日记");?>'>查询日记</a><br><a href='index.php?link=<?php echo urlencode("删除日记");?>'>删除日记</a>";
			break;	
		case "管理":
			submenu.innerHTML="<a href='index.php?link=<?php echo urlencode("修改密码");?>'>修改密码</a>";
			break;						
		}
}
          </script>
	      &nbsp;</p></td>
	</tr>
	<tr>
		<td width="93" height="28" background="images/zuo_05.gif"><div align="center"><span class="STYLE1"><a href="#"onmousemove="Fsubmenu('理财')" class="shadow">理财助手</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="29" background="images/zuo_06.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('日记')" class="shadow">我的日记</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="31" background="images/zuo_07.gif"><div align="center"><span class="STYLE1"><a href="#" onMouseMove="Fsubmenu('管理')" class="shadow">管理日记本</a></span></div></td>
	</tr>
	<tr>
		<td width="93" height="23" background="images/zuo_08.gif"><div align="center" class="STYLE1"><a href="logout.php">退出</a></div></td>
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
     "星期日",
     "星期一",
     "星期二",
     "星期三",
     "星期四",
     "星期五",
     "星期六");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: 宋体'> ",
     today.getYear(),"年",
     today.getMonth()+1,"月",
     today.getDate(),"日",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
                  </script>
              </div></div></td>
            <td width="409" valign="top"><marquee direction='left' style=" color:#FF3300"scrollamount='2' scrolldelay='100'onmouseout='this.start()' onmouseover='this.stop()'>
&nbsp;&nbsp;<img src="images/run.gif" width="19" height="18">&nbsp;&nbsp;记得要开心过每一天！
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
			$link="首页";
		}
		switch($link){
			case "添加事物主题":			
        		include "motif.php";			
    		break;	
			case "查询事物主题":			
        		include "querymotif.php";			
    		break;				
		    case "设置闹钟":
        		include "clock.php";
    		break;
			case "添加收入":
        		include "income.php";
    		break;
			case "添加支出":
        		include "outgo.php";
    		break;
			case "财务管理":
        		include "cwgl.php";
    		break;
			case "财务查询":
        		include "affairsquery.php";
    		break;
			case "财务统计":
        		include "affairsstat.php";
    		break;
			case "添加日记":
        		include "appenddiary.php";
    		break;
			case "查看日记":
        		include "lookdiary.php";
    		break;
			case "查询日记":
        		include "querydiary.php";
    		break;
			case "删除日记":
        		include "deldiary.php";
    		break;
			case "修改密码":
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