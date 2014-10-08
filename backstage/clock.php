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
	var sc=document.getElementById('music').value;	//使用getElementById方法来访问指定闹钟铃声的节点
	if (bgsud.src==""){		//如果bgsound标记的src属性为空，则为该标记指定闹钟铃声
    	bgsud.src=sc;
		document.getElementById('subm').value="停止";
  	}else{					//如果bgsound标记的src属性不为空，则将src属性赋予空置
	  	document.getElementById('subm').value="试听";
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
      <td width="493" height="302" valign="top"><p align="center" class="STYLE5">闹钟设置 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="javascript:window.open('zzclock.php','','');">正在执行</a></p>
	    <table width="515" border="0">
          <tr>
            <td><div align="center" class="STYLE6">当前时间： <script type=text/javascript>
		document.write("<span id='labtime' width='120px' Font-Size='9pt'></span>")
		setInterval("labtime.innerText=new Date().toLocaleString()",1000)
		</script></div></td>
          </tr>
        </table>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="189" height="28" valign="middle" bgcolor="#FFFFFF"><p align="right" class="STYLE7">提醒日期：</p></td>
            <td width="326" valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="select"></label>
              <select name="year" size="1" id="year">
                <script language="JavaScript" type="text/javascript"><!--
for(i=1900;i<2050;i++)
document.write('<option>'+i)
//--></script>
              </select>
              年
              <select name="month" id="month">
                <script language="JavaScript" type="text/javascript"><!--
for(i=1;i<13;i++) document.write
('<option>'+i)
//--></script>
              </select>
              月
              <select name="day" id="day">
			  <SCRIPT language=JavaScript><!--
for(i=1;i<31;i++) document.write
('<option>'+i)
//--></SCRIPT>
              </select>
            日</span></td>
          </tr>
          <tr>
            <td height="24" valign="middle" bgcolor="#FFFFFF"><p align="right" class="STYLE7">提醒时间：</p></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="select"></label>
                            <select name="hour" id="select4">
							<SCRIPT language=JavaScript><!--
for(i=0;i<24;i++) document.write
('<option>'+i)
//--></SCRIPT>
              </select>
              时
<select name="minute" id="minute">
              <SCRIPT language=JavaScript><!--
for(i=0;i<60;i++) document.write
('<option>'+i)
//--></SCRIPT>  
              </select>
              分
              <select name="second" id="second">
			    <SCRIPT language=JavaScript><!--
for(i=0;i<60;i++) document.write
('<option>'+i)
//--></SCRIPT>  
              </select>
            秒</span></td>
          </tr>

          <tr>
            <td height="27" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">闹钟铃声：</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="label"></label>
              <select name="music" size="1" id="music">
                <option value="music/bg.mp3">怒放的生命</option>
                <option value="music/dh.mp3">大海</option>
              </select>
              <input type="button" name="subm" value="试听" id="subm" onclick="javascript:bgsd()" />
            </span></td>
          </tr>
          <tr>
            <td height="23" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">事物主题：</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="textfield"></label>
              <label for="label3"></label>
              <select name="zht" size="1" id="label3">
			  <option>请选择事物主题</option>
			 <?php 
			  include_once("conn/conn.php");
			  $sql=mysql_query("select * from tb_motif order by createtime desc",$conn);
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			  echo"<option>暂无事物主题</option>";
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
            <td height="25" valign="middle" bgcolor="#FFFFFF"><div align="right" class="STYLE7">提醒方式：</div></td>
            <td valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <input type="radio" name="fs" value="提醒一次" id="repeat1"/>
              <label for="radiobutton">提醒一次
              <input type="radio" name="fs" value="每天提醒" id="repeat1"  checked="checked"/>
            每天提醒            </label>
            </span></td>
          </tr>
          <tr>
            <td colspan="2" valign="middle" bgcolor="#FFFFFF"><span class="STYLE7">
              <label for="label2"></label>
              </span>
              <div align="center" class="STYLE7">
                <input type="submit" name="Submit2" value="开启定时闹钟" id="label2" />
            </div></td>
          </tr>
        </table>
        <table width="515" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="74"><p>温馨提示：</p>
            </td>
            <td width="425">&nbsp;</td>
          </tr>
          <tr>
            <td><div align="right">1、</div></td>
            <td>如果关闭页面，闹钟将无法响铃。</td>
          </tr>
          <tr>
            <td><div align="right">2、</div></td>
            <td>再次打开页面，先前设定的闹钟仍然生效。</td>
          </tr>
          <tr>
            <td><div align="right">3、</div></td>
            <td>需要打开音响或佩戴耳机，以便听到提示铃声。</td>
          </tr>
          <tr>
            <td><div align="right">4、</div></td>
            <td>闹钟以您电脑时间为准，请先校对好本机时间。</td>
          </tr>
        </table>
        </td>
    </tr>
  </form>
</table>
