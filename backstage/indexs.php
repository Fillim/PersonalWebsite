<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>首页</title>
</head>

<body>
<table width="515" border="0" cellpadding="0" cellspacing="0">


		  <tr>
            <td></td>
          </tr>
          <tr>
            <td>          <?php
setlocale(LC_TIME,"chs");						
$weekday = strftime("%A");				
switch ($weekday){							
	case "星期一":							
		echo '<img src="images/1.png" width="500" height="33">';
	break;
	case "星期二":								
		echo '<img src="images/2.png" width="500" height="33">';
	break;
	case "星期三":								
		echo '<img src="images/3.png" width="500" height="33">';
	break;
	case "星期四":								
		echo '<img src="images/4.png" width="500" height="33">';
	break;
	case "星期五":								
		echo '<img src="images/5.png" width="500" height="33">';
	break;
	case "星期六":								
		echo '<img src="images/6.png" width="500" height="33">';
	break;
	default:									
		echo '<img src="images/7.png" width="500" height="33">';
}
include("lookdiary.php");
?></td>
          </tr>
        </table>
</body>
</html>
