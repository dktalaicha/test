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
   	
   	if(document.getElementById("emailid").value.length <= 0)
	{
	document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/>"+" Please Enter Email id !"; 
	document.getElementById("emailid").focus();
	setTimeout(clearmsg,3500);
	return false;
	}	
	
	if(!document.getElementById("emailid").value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
  	{
	   document.getElementById("errorMSG").innerHTML="<img src='./include/images/red_icon_info.gif'/> "+" Invalid  Email id !";
	   document.getElementById("emailid").focus();
	   setTimeout(clearmsg,3500);
	   return false;
   	}
	
}	
</script>
<div class="propertyAdvisorChat" style="width:45%;align:center">
		<fieldset>
         <legend class="title"><span style="color:#ffffff"> Re-request Activation Code </legend> 
		<div class="propertyAdvisorCont">	
		<form name="requestActivationCode" id="requestActivationCode" action="./activation_code_req_process.php" method="POST" onsubmit="return checkForm();">	
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
                                if ($error == '2')
                                {
                                         echo "Your Account has been already Activated !!!";
                                }
                                if ($error == '3')
                                {
                                         echo "SORRY!!! Mail could not be send, Please try again";
                                }

                         }
                    ?>
		</center>								  
	   </div>	<br>
			<ul>
				 If you have lost your activation code, then enter your username, password and e-mail id  to have to code emailed to you again. 	
				 Email-id you enter here will be your registred email id.
				<li> <span  style="margin-right:81px"> Username : </span> 
				<input type="text" name="username" id="username" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">
				<li> <span  style="margin-right:84px"> Password : </span> 
				<input type="password" name="password" id="password" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">
				<li> <span  style="margin-right:62px"> Email Address : </span> 
				<input type="text" name="emailid" id="emailid" style="border: 1px solid #ccc;font-size: 12px;margin: 2px;width:158px;">		 
				 
            </ul> 				 
				<br>
				<div style="margin-left:80px">
					<input type="submit" class="submit" value="Submit"> 
					<input type="reset" class="submit" value="Reset">
				</div>
		 </form>		
		</div>
		</fieldset>
	</div>


<!--Page contents Ends here-->  
		
</div> 
<?php include "./include/user_footer.php"; ?>	