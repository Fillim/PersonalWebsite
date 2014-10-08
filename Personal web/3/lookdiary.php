<html>
<link href="css/style.css" type="text/css" rel="stylesheet">
<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<style type="text/css">
<!--
.STYLE11 {
    margin:0px;
	padding:20px 20px 10px 20px;
	font-size:34px;
	color:#4169E1;
    text-shadow:1px 1px 1px #fff;
     font-family: Georgia, serif;
    font-style: italic;
	text-align:left;
	font-weight:400;
    text-align:center;
}
.STYLE12 { display:block;
	font-size: 14px;
    font-family: Georgia, serif;
    font-style: italic;
	color:#b2891b;
	padding-top:10px;}
	.STYLE17 { display:block;
	font-size: 14px;
    font-family: Georgia, serif;
    font-style: italic;
	color:#212121;
	padding-top:10px;}
	.STYLE13 { display:block;
	font-size: 20px;
    font-family: Georgia, serif;
    font-style: italic;
	color:#b2891b;
	padding-top:10px;}
.STYLE14 {color: #000000}
.STYLE15 {color: #0099FF;
font-style:italic;
font-family: Georgia, serif;
font-size: 20px;

}
 #image{
 	
    margin-left: 90px;
 }
 #interval{
 	height: 80px;
 	width: 1060px;
 	margin-left: 90px;
 	background-color: #fff;

 }#interval1{
 	height: 80px;
 	width: 1060px;
 	margin-left: 90px;
 	background-color: #ccc;

 }#interval2{
 	height: 100px;
 	width: 1060px;
 	margin-left: 90px;
 	background-color: #fff;

 }
  #main{
    height: 720px;
    width: 1060px;
    background: #fff;
    margin-left: 90px;

    
 }
  #container{
    height: 1450px;
    background: #ccc;
 }
-->
</style>


<div id="container">
	<div id="interval1"></div>
	<div id="interval2"></div>
 <div id="image" >  <img width="1060" height="326" alt="" src="wpr-header.png"></div>
<div id="interval"></div>
<div id="main">
<table align="center"width="515" border="0" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="">
      <tr>
      <td width="493" valign="baseline"><table width="515" border="0" cellpadding="0" cellspacing="0">
       
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
	echo "<div align=center>对不起，暂无日记！</div>";
}else{
	$pagesize=3;
	if($total%$pagesize==0){
		$pagecount=intval($total/$pagesize);
	}else{
		$pagecount=ceil($total/$pagesize);
	}
	$sql=mysql_query("select * from tb_jour order by time desc limit ".($page-1)*$pagesize.",$pagesize  ",$conn);
	while($info=mysql_fetch_array($sql)){
?>
          <tr>
            <td width="434" valign="middle"><span class="STYLE11"><?php echo $info['wzzt'];?></span></td>
            <td width="81" height="23" valign="middle"><div align="center"></div></td>
          </tr>
          <tr>
            <td width="434" valign="middle" class="STYLE12"><?php echo $info['time'];?></td>
          </tr>
          <tr valign="middle">
            <td colspan="2"><span class="STYLE13">
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
				
				   window.open("updiary.php?id="+x,"newframe","top=100,left=200,width=1277,height=799,scrollbars=yes,toolbar=yes,location=yes");
				  
				}
			  
			  </script>
            <td colspan="2"><div align="right" style=" border-bottom: 1px #CCCCCC dashed;"><a href="javascript:openeditwindow(<?php echo $info['id'];?>)"> <span  style="color:#ca4d26;"><span class="STYLE17">more...</span> </span></a> </div></td>
          </tr>
		 <?php
		}
		}
		?>
        </table>
		
        <p align="right" class="STYLE15">Total&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $total;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tips&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Page&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $page;?>&nbsp;/&nbsp;<?php echo $pagecount;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page>1) 
		  
		   echo $page-1;
		  else
		   echo 1;  
		   ?>" class="a1">LAST</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"]?>?page=<?php 
		 if($page<$pagecount) 
		  
		   echo $page+1;
		  else
		   echo $pagecount;  
		   ?>" class="a1">NEXT&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ?>?page=<?php echo $pagecount;?>" class="a1"></a></p></td>
    </tr>
  </form>
</table>
</div>
</div>
 <div class="menu" id="fd">
	<div class="box" style="display:none;">
		<a class="t1" href="../index.html"></a>
		<a class="t2" href="../1/index.html"></a>
		<a class="t3" href="../2/index.html"></a>
		<a class="t4" href="../3/lookdiary.php"></a>
		<a class="t5" href="https://github.com/LemonStudio"></a>
		<a class="t6" href="../index.html"></a>
	</div>
    </div>
</html>