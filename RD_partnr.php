<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#Layer31 {	position:absolute;
	left:99px;
	top:1px;
	width:1042px;
	height:84px;
	z-index:1;
	-moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -khtml-border-radius: 20px;
	border-radius: 20px;
	background-color: #99CC00;
}
#Layer43 {	position:absolute;
	left:18px;
	top:10px;
	width:82px;
	height:62px;
	z-index:10;
}
.style2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FFFFFF;
}
#Layer44 {position:absolute;
	left:121px;
	top:32px;
	width:140px;
	height:41px;
	z-index:11;
}
.style4 {	font-size: 18px;
	color: #FFFFFF;
}
#Layer47 {	position:absolute;
	left:541px;
	top:28px;
	width:387px;
	height:34px;
	z-index:12;
}
#Layer1 {	position:absolute;
	left:19px;
	top:14px;
	width:268px;
	height:109px;
	z-index:1;
	background-color: #CCCC66;
}
#Layer2 {
	position:absolute;
	left:199px;
	top:98px;
	width:831px;
	height:498px;
	z-index:2;
}
#Layer3 {
	position:absolute;
	left:202px;
	top:240px;
	width:824px;
	height:4px;
	z-index:3;
	background-color: #999999;
}
#Layer4 {
	position:absolute;
	left:203px;
	top:251px;
	width:819px;
	height:340px;
	z-index:4;
}
#Layer5 {
	position:absolute;
	left:207px;
	top:250px;
	width:813px;
	height:336px;
	z-index:4;
}
#Layer6 {
	position:absolute;
	left:219px;
	top:279px;
	width:304px;
	height:133px;
	z-index:5;
}
#Layer7 {
	position:absolute;
	left:768px;
	top:264px;
	width:162px;
	height:208px;
	z-index:5;
}
#Layer8 {
	position:absolute;
	left:886px;
	top:118px;
	width:57px;
	height:49px;
	z-index:6;
}
#Layer9 {
	position:absolute;
	left:890px;
	top:116px;
	width:70px;
	height:60px;
	z-index:6;
}
#Layer10 {
	position:absolute;
	left:750px;
	top:256px;
	width:259px;
	height:42px;
	z-index:7;
	background-color: #669933;
}
#Layer11 {
	position:absolute;
	left:750px;
	top:301px;
	width:258px;
	height:262px;
	z-index:8;
	background-color: #CC9933;
}
#Layer12 {
	position:absolute;
	left:731px;
	top:252px;
	width:3px;
	height:329px;
	z-index:9;
	background-color: #999999;
}
#Layer13 {
	position:absolute;
	left:774px;
	top:255px;
	width:211px;
	height:32px;
	z-index:10;
}
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 24px; color: #000000; }
-->
</style>

</head>

<body>
<div id="Layer31">
  <div id="Layer43"><img src="../logo_461032_web.jpg" width="89" height="64" /></div>
  <div class="style2" id="Layer44">R.D.Farming</div>
  <div id="Layer47">
     <table width="494" height="34" border="0">
    <tr>
      <td width="78"><span class="style4"><a href="homepage.php">Home</a></span></td>
      <td width="89"><span class="style4"><a href="aboutus.php">AboutUs</a></span></td>
      <td width="96"><span class="style4"><a href="RD_investor.php">Investors</a></span></td>
      <td width="69"><span class="style12"><a href="RD_faq.php">FAQ</a></span></td>
      <td width="140"><span class="style4"> <a href="contactus.php">ContactUs</a></span></td>
    </tr>
  </table>
  </div>
</div>
<div id="Layer2">
  <div id="Layer1">
    <form method="post">
      <table width="277" height="101">
        <tr>
          <th width="111" scope="col"><div align="left">Username</div></th>
          <th width="144" scope="col"><div align="left">
              <label>
              <input name="un" type="text" id="un" />
              </label>
          </div></th>
        </tr>
        <tr>
          <td>Password</td>
          <td><label>
            <input name="pw" type="password" id="pw" />
          </label></td>
        </tr>
        <tr>
          <td><label>
            <input type="submit" name="Submit" value="Submit" />
          </label></td>
          <td><label>
            <input type="reset" name="reset" value="Reset" />
          </label></td>
          <td width="1"><label></label></td>
          <td width="1">&nbsp;</td>
        </tr>
      </table>
    </form>
  </div>
</div>


<div id="Layer3"></div>

<div id="Layer5">
<?php 
if(isset($_POST['Submit']))
{
mysql_connect("localhost","root","");//database connection
mysql_select_db("foming");
$qry="SELECT * FROM admin WHERE user_id='Dinesh_Gupta'";
$row1 = mysql_query($qry);
if($result=mysql_fetch_array($row1))
{
if($_POST['un']==$result["user_id"])
{
echo '<form id="form1" name="form1" method="post" >
  <p>&nbsp;</p>
  <p>Enter Mobile Number :</p>
  <p>
    <label>
    <input name="mn" type="text" id="number"/>
    </label>
</p>
  <p>
    <label>
    <input name="check" type="submit" id="check" value="check" />
    </label>
  </p>
</form>';
}
else
{
echo "You are not admin";
}
}

}
if(isset($_POST["mn"]))
{
$conn = mysql_connect("localhost","root","");
mysql_select_db("foming");

$sql = "SELECT * FROM invest WHERE mob_no= '".$_POST["mn"]."'";
$row = mysql_query($sql);
if($row)
{
$rslt=mysql_fetch_array($row);
if($rslt)
{
$nam = $rslt["Name"];
$cit = $rslt["city"];
$eml = $rslt["email"]; 

echo'<table width="523" height="301">
<tr>
<td>Name</td>
    <td>
	  
        <input name="name" type="text" id="name" value='.$nam.'>';
        
   echo '</td>
  </tr>
  <tr>
    <td>City</td>
    <td>
        <input name="ct" type="text" id="city" value= '.$cit.'>';
    echo '</td>
  </tr>
  <tr>
    <td>Email_id</td>
    <td>
        <input type="text" name="email" value='.$eml.'>';
    echo '</td>
  </tr> </table></form>';
  $ptErr="";
$part="";
$value = "true";
       if(isset($_POST["pt"])=="")
       {
       $ptErr= "Enter data";
	   $value = false;
	   }
	   else
	   {
	   $part = test_input($_POST["pt"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[1-9][0-9]*$/",$part))
       {

        //$ptErr = "Only numbers are allowed";
		$value = false;
	    $ptErr = "Only numbers are allowed";
		}		
        
        }
          echo '<form method="post" action="Reply_partnrship.php">Part Of Share: <input type="text" name="pt"></td><td><span class="error">*'.$ptErr.'</span></td>
  
  <input type="submit" name="submit" value="Submit"></form>';
}
}       
mysql_close($conn);
}

?>
</div>

<div id="Layer9"><a href="RD_investor.php"><img src="back.jpg" width="100" height="100" /></a></div>
<div id="Layer10"></div>
<div id="Layer11" onMouseOver="document.getElementById('us').stop();" onMouseOut="document.getElementById('us').start();"><marquee id="us" direction="up" ><?php 
$conn = mysql_connect("localhost","root","");
                 mysql_select_db("foming");
				 $row ="SELECT * FROM invest";
				 $row1 = mysql_query($row);
				 
				 while($result=mysql_fetch_array($row1))				
			{  	     			     
			    
				
				         
                         echo '<img src="user.jpg" width="62" height="39">'; 
						 echo "<table>";
				         echo "<tr>";			       
						
                        echo "<td>"."Name:" .$result["Name"]."</td>";			
						
                        echo "<td>"."(" .$result["mob_no"].")"."</td>";
						echo "</tr>";
						echo "</table>";				
						               
                       
						
                    }
                    mysql_close($conn);
            ?></marquee></div>
<div id="Layer12"></div>
<div class="style5" id="Layer13">Interested Partners </div>
</body>
</html>
