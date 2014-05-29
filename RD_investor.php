<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>RD Investor</title>
<style>
body {
	background-image: url(w5.jpg);
	background-repeat: no-repeat;
}
.style2 {font-family: Arial, Helvetica, sans-serif;
	font-size: 24px;
	color: #FFFFFF;
}
.style4 {font-size: 18px;
	color: #FFFFFF;
}
#Layer31 {position:absolute;
	left:102px;
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
#Layer43 {position:absolute;
	left:30px;
	top:3px;
	width:92px;
	height:71px;
	z-index:10;
}
#Layer44 {position:absolute;
	left:130px;
	top:34px;
	width:140px;
	height:41px;
	z-index:11;
}
#Layer47 {position:absolute;
	left:526px;
	top:34px;
	width:384px;
	height:34px;
	z-index:12;
}
#Layer1 {
	position:absolute;
	left:105px;
	top:100px;
	width:754px;
	height:861px;
	z-index:2;
	background-color: #999999;
	-moz-border-radius-topright:25px;
	-webkit-border-radius-topright:25px;
	
}
#Layer2 {
	position:absolute;
	left:103px;
	top:101px;
	width:751px;
	height:62px;
	z-index:3;
	-moz-border-radius-topright:25px;
	-webkit-border-radius-topright:25px;
	background-color: #666666;
}
.style5 {
	color: #FFFFFF;
	font-size: 24px;
}
#Layer3 {
	position:absolute;
	left:107px;
	top:167px;
	width:698px;
	height:713px;
	z-index:4;
}
#Layer4 {
	position:absolute;
	left:865px;
	top:101px;
	width:283px;
	height:308px;
	z-index:5;
	background-color: #CC9933;
}
#Layer5 {
	position:absolute;
	left:867px;
	top:103px;
	width:280px;
	height:43px;
	z-index:6;
	background-color: #669933;
	-moz-border-radius-topright:25px;
	-webkit-border-radius-topright:25px;
	-moz-border-radius-topleft:25px;
	-webkit-border-radius-topleft:25px;
}
#Layer6 {
	position:absolute;
	left:867px;
	top:148px;
	width:279px;
	height:257px;
	z-index:7;
	background-color: #CC9933;
}
.style6 {font-size: 24px}
.style7 {color: #000000}
#Layer7 {
	position:absolute;
	left:871px;
	top:419px;
	width:271px;
	height:179px;
	z-index:8;
}
#Layer8 {
	position:absolute;
	left:873px;
	top:607px;
	width:295px;
	height:111px;
	z-index:9;
	background-color: #B8B8B8;
}
#Layer9 {
	position:absolute;
	left:697px;
	top:36px;
	width:1px;
	height:36px;
	z-index:10;
	background-color: #000000;
}
#Layer10 {
	position:absolute;
	left:798px;
	top:38px;
	width:1px;
	height:34px;
	z-index:11;
	background-color: #000000;
}
#Layer11 {
	position:absolute;
	left:889px;
	top:37px;
	width:1px;
	height:32px;
	z-index:12;
	background-color: #000000;
}
#Layer12 {
	position:absolute;
	left:962px;
	top:37px;
	width:1px;
	height:32px;
	z-index:13;
	background-color: #000000;
}
</style>
<script type='text/javascript'>
var imageID=0;
function changeimage(every_seconds){
    //change the image
    if(!imageID){
        document.getElementById("myimage").src="part1.jpg";
        imageID++;
    }
    else{if(imageID==1){
        document.getElementById("myimage").src="part2.jpg";
        imageID++;
    }else{if(imageID==2){
        document.getElementById("myimage").src="part3.jpg";
        imageID=0;
    }}}
    //call same function again for x of seconds
    setTimeout("changeimage("+every_seconds+")",((every_seconds)*1000));
}
</script>
</head>

<body onload='changeimage(4)'>
<div id="Layer31">
  <div align="left"></div>
  <div id="Layer47">
     <table width="494" height="34" border="0">
    <tr>
      <td width="78"><span class="style4"><a href="homepage.php">Home</a></span></td>
      <td width="89"><span class="style4"><a href="aboutus.php">AboutUs</a></span></td>
      <td width="96"><span class="style4"><a href="RD_partner.php">Investors</a></span></td>
      <td width="69"><span class="style12"><a href="RD_faq.php">FAQ</a></span></td>
      <td width="140"><span class="style4"> <a href="contactus.php">ContactUs</a></span></td>
    </tr>
  </table>
  </div>
  <div class="style2" id="Layer44">R.D.Farming</div>
  <div id="Layer43"><img src="logo_461032_web.jpg" width="89" height="80" /></div>
</div>
<div id="Layer1"></div>
	  





<div class="style5" id="Layer2"><I><B>
<MARQUEE  BEHAVIOR="ALTERNATE"  SCROLLAMOUNT="3">Lets Become A Partner </MARQUEE></B></I></div>
<div id="Layer3"><?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $mobErr = $cityErr = $amountErr = $mobErr=$cpErr="";
$name = $email = $gender = $address = $city = $amount = $mob ="";


 if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$value = true;
if (empty($_POST["name"]))
     {$nameErr = "Name is required";
	 $value = false;	
	}
   else
     {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name))
       {
       $nameErr = "Only letters and white space allowed"; 
	   $value = false;		   
       }
     }
	 
	  if (empty($_POST["email"]))
     {$emailErr = "Email is required";	
	 $value = false;
	 }
   else
     {
     $email = test_input($_POST["email"]);
     // check if e-mail address syntax is valid
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
       {
       $emailErr = "Invalid email format"; 	
	   $value = false;    
       }
     }
	 
	 if (empty($_POST["mnt"]))
     {$amountErr = "Enter Valid amount";
	  $value = false;	 
	  }
   else
     {
     $amount = test_input($_POST["mnt"]);	  
     // check if name only contains letters and whitespace
     if (!preg_match("/^[1-9][0-9]*$/",$amount))
       {
       $amountErr = "Only numbers are allowed";	
	   $value = false;       
       }
     } 
	  if (empty($_POST["mn"]))
    {
        $mobErr = "mobile number is required";
		$value = false;
    }
    else
    {	 
	  $mob = test_input($_POST["mn"]);
	if(!preg_match("/^(\+91[\-\s]?)?[8-9]{1}\d{9}$/", $mob))
	   {
		$mobErr = "Not a recognizable phone number.";
		$value = false;
	   }
	}
	 /*if (empty($_POST["mnt"]))
    {
        $amountErr = "amount is required";
		
    }
    else
    {
        $amount = test_input($_POST["mnt"]);
    } 
	 
	 */
	 
	  if (empty($_POST["ct"]))
     {$city = "";	 
	  }
   else
     {
     $city = test_input($_POST["ct"]);
     // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
     if (!preg_match("/^[a-zA-Z ]*$/",$city))
       {
       $cityErr = "Only letters and white space allowed"; 	
	   $value = false;   
       }
     }
	  if (empty($_POST["address"]))
     {$address = "";
	 }
   else
     {$address = test_input($_POST["address"]);
	  }

   if (empty($_POST["gender"]))
     {$genderErr = "Gender is required";
	 $value = false;
	 }
   else
     {$gender = test_input($_POST["gender"]);
	  }
	   if(isset($_POST['submit'])) {
     
        // check reCAPTCHA information
        require_once('../recaptchalib.php');
         
        $privatekey = "6LeELfASAAAAAH0Nianb6Sk9TB48RJCqbEhTiJVe";
        $resp = recaptcha_check_answer ($privatekey,
                                    $_SERVER["REMOTE_ADDR"],
                                    $_POST["recaptcha_challenge_field"],
                                    $_POST["recaptcha_response_field"]);
         
        // if CAPTCHA is correctly entered!                       
        if (!($resp->is_valid)) {
          $cpErr= "CAPTCHA entries are incorrect";  
		  $value=false;   
			                
        } 
    }

if($value)
{
$conn=mysql_connect("198.23.57.16:3306","monsad10_foming","rdfarm");//database connection
mysql_select_db("monsad10_foming");
 
/*$order = "INSERT INTO invest
			(Name, email,city,amount,addr,gender,mob_no)
			VALUES
			('$name','$email','$city','$amount','$address','$gender','$mob')";
			$result = mysql_query($order,);	//order executes*/
$stmt = $conn->prepare("INSERT INTO invest
			(Name, email,city,amount,addr,gender,mob_no)
			VALUES
			(:name,:email,:city,:amount,:address,:gender,:mob)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':city', $city);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':address', $address);
$stmt->bindParam(':gender', $gender);
$stmt->bindParam(':mob', $mob);
$result = $stmt->execute();

if($result){
	//echo("<br>Input data is succeed");
	//header("Location:isrt.php");
	include 'isrt.php';
	
} else{
	echo("<br>Input data is fail");
}

}
}

	  




function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
<?php
   ?>


<h2>Lets Become A Partner </h2>
<p><span class="error">* required field.</span></p>
<form name="self" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
<table width="700" height="593">
  <tr><td>
   Name: </td><td>
     <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span></td></tr><tr><td>
   <br><br>
   E-mail: </td><td><input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span></td></tr><tr><td>
   <br><br>
   City: </td><td><input type="text" name="ct">
   <span class="error">* <?php echo $cityErr;?></span></td></tr><tr><td>
   <br><br>
   Mobile Number: </td><td><input type="text" name="mn">
   <span class="error">* <?php echo $mobErr;?></span></td></tr><tr><td>
   <br><br>
   Amount To be Invest: </td><td><input type="text" name="mnt">
   <span class="error">* <?php echo $amountErr;?></span></td></tr><tr><td>
   <br><br>
  Address: </td><td><textarea name="address" rows="5" cols="40"></textarea></td></tr><tr><td>
   <br><br>   
   Gender:</td><td>
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span></td></tr><tr><td>
   <br><br><?php
          require_once('../project/recaptchalib.php');
          $publickey = "6LeELfASAAAAAAbqBbyLH-M3E5LZNWG_UUb-ya33";
          echo recaptcha_get_html($publickey);
        ?><?php echo $cpErr;?></td></tr><tr><td>

   <input type="submit" name="submit" value="Submit"></td></tr></table> 
</form>
</div>
<div class="style6" id="Layer5">
  <div align="center" class="style7">Interested User</div>
</div>
<div id="Layer6"><marquee direction="up"> <?php 
$conn = mysql_connect("198.23.57.16:3306","monsad10_foming","rdfarm");
        mysql_select_db("monsad10_foming");
				 $row ="SELECT * FROM invest";
				 $row1 = mysql_query($row,$conn);
				 while($result=mysql_fetch_array($row1))				
			{  	     			     
			    
				
				         
                         echo '<img src="user.jpg" width="62" height="39">'; 
						 echo "<table>";
				         echo "<tr>";			       
						
                        echo "<td>".$result["Name"]."</td>";				
						
                        echo "<td>".$result["city"]."</td>";
						echo "</tr>";
						echo "</table>";				
						                 
                       
						
                    }
                    mysql_close($conn);
            ?></marquee></div>
<div id="Layer7"><img src="part3.jpg" width="300" height="179" id="myimage"/></div>
<div id="Layer8">

  <form method="post" action="RD_partnr.php">
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
            <input type="submit" name="Submit" value="Submit"/>
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
<?php

$conn=mysql_connect("198.23.57.16:3306","monsad10_foming","rdfarm");
mysql_select_db("monsad10_foming");
$qry="SELECT * FROM admin WHERE user_id='Dinesh_Gupta'";
$row1 = mysql_query($qry,$conn);
if($result=mysql_fetch_array($row1))
{
if(isset($_POST["Submit"]))
{
if($_POST['un']==$result["user_id"])
{
include "RD_partnr.php";
}
else
{
echo "You are not Authorized Admin";
}
}
}  	   
mysql_close($conn);
?>
<div id="Layer9"></div>
<div id="Layer10"></div>
<div id="Layer11"></div>
<div id="Layer12"></div>
</body>
</html>
