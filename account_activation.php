<?php 
session_start();
if(@$_SESSION['sec_username']==null && @$_SESSION["password"]==null && @$_SESSION["sec_silk"]==null)
{
	include "./include/user_header.php";
}
else
{
	include "./include/user_login_header.php";
}

?>	

<div class="innerWrapper">
 				
<!--Page contents Starts here--> 
<script language="javascript" type="text/javascript">
function clearmsg()
{
  document.getElementById("errorMSG").innerHTML=" ";
}


function checkForm()
{	
	if(document.getElementById("username").value.length <= 0)
	{
	document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/>"+" Please Enter Username !"; 
	document.getElementById("username").focus();
	setTimeout(clearmsg,3500);
	return false;
	}	

	if(document.getElementById("activationCode").value.length <= 0)
	{
	document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/>"+" Please Enter Activation Code !"; 
	document.getElementById("activationCode").focus();
	setTimeout(clearmsg,3500);
	return false;
	}	
	
	if(document.getElementById("activationCode").value.length !=6)
	{
	document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/>"+" Invalid Activation Code (Check for blank Space) !"; 
	document.getElementById("activationCode").focus();
	setTimeout(clearmsg,3500);
	return false;
	}	
	
	if(document.getElementById("password").value.length <= 0)
	{
	document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/>"+" Please Enter Password !"; 
	document.getElementById("password").focus();
	setTimeout(clearmsg,3500);
	return false;
	}	
	
	if(!document.getElementById("password").value.match(/^[a-zA-Z0-9 @\#\,$%*_-]+$/))
  	{
	   document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/> "+" Invalid  Password";
	   document.getElementById("password").focus();
	   setTimeout(clearmsg,3500);
	   return false;
   	}
	
}	
</script>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="60%">
<div class="propertyAdvisorChat" style="width:90%;">
		<fieldset>
        <legend class="title"><span style="color:#ffffff"> Active Your Account </legend>        
		<div class="propertyAdvisorCont">	
		<form name="activationForm" id="activationForm" action="./user_login_check.php" method="POST" onsubmit="return checkForm();">	
		<div class="loginErrorBlock" style="height:10px">
		 <center id="errorMSG">
												<?php
													if(isset($_GET['error']))
													 {
														//$error = $_SERVER['QUERY_STRING'];
														$error = $_GET['error'];
														
														//echo $error;
														
														if ($error == '1')
														{
															 echo "ERROR !!! Login Name or Password not correct";
														}
														elseif ($error == '2')
														{								
														  echo "You must be logged in to view this page!!!";
														}	
														elseif ($error == '3')
														{								
														  echo "Your Session expired! please re-login!!!";
														}	
														
														elseif ($error == '4')
														{								
														  echo "Incorrect Activation Code! please re-enter !!!";
														}	
														
													 }
										  ?>
		</center>										  
	   </div>	
			<ul>
				<br> 		
				<li> <span  style="margin-right:80px"> Username : </span> 
				<input type="text" name="user" id="username" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">
				<li> <span  style="margin-right:49px"> Activation Code : </span> 
				<input type="text" name="activationCode" id="activationCode" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">
				<li> <span  style="margin-right:84px"> Password : </span> 
				<input type="password" name="pass" id="password" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">
				
				 
				 <li> If you have lost your activation code <a href="./activation_code_request.php">click here </a> to have to code emailed to you again. </li>
            </ul> 				 
				<br>
				<div style="margin-left:80px">
					<input type="submit" class="submit" value="Activate Account"> 
					<input type="reset" class="submit" value="Reset">
				</div>
		 </form>		
		</div>
		</fieldset>		
	</div>
</td>
<td>
	  <img src="./include/images/account_activation_process.jpg" width="400px" height="220px">
</td>
</tr>
</table>	

<!--Page contents Ends here-->  
		
</div> 
<?php include "./include/user_footer.php"; ?>	