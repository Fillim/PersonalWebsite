<?php
include_once("conn/conn.php");
$id=$_GET["id"];
$sql=mysql_query("select * from tb_jour where id='".$id."'");
$info=mysql_fetch_array($sql);

?>
<style type="text/css">
<!--
.STYLE11 {
  margin-left: 60px;
  margin-right: 60px;
  
  padding:20px 20px 10px 20px;
  font-size:34px;
  color:#000;
    text-shadow:1px 1px 1px #fff;
     font-family: Georgia, serif;
    font-style: italic;
  text-align:left;
  font-weight:400;
    text-align:center;
}
.STYLE12 { 
 margin-right: 100px;
 margin-top: 40px;
  display:block;
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
  .STYLE13 { 
   margin-right: 70px;
   margin-left: 70px;
    display:block;
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



<div class="style11">
<h1 align="center"> <?php echo $info['wzzt'];?> </h1>
</div>
<div class="style13">
<p><?php echo $info['wznr'];?></p>
</div>


<div class="style12">
<h5 align="right"><?php echo $info['time'];?></h5>
</div>


          
       
            <td height="28" colspan="2" bgcolor="#FFFFFF">
              <div align="center">
                <input type="hidden" name="id" value="<?php echo $id;?>">
               
</div>
             
            <div align="center"></div></td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </form>
</table>
</div>
</div>
