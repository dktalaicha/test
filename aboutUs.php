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
  <div >   
      <div >
       <div class="feateredPropertyTitle"> 
       	  <img src="home/featered_prop_lcurve.gif" alt="" width="14" align="left" height="25">
          <label class="title">About Tipster Challenge.com</label>
          <img src="home/featered_prop_rcurve.gif" alt="" align="right"> </div>
        <div class="feateredCropCont">
         <div>						
<!--Page contents Starts here-->
<table class="sample"><tr><td>
<br>
<img src="./include/images/about.jpg" style="border:1px solid grey;float:Left;margin-left:10px;margin-right:10px">
<p><b>Tipster Challenge</b> was founded in 1993, initially as a Personal Horse Racing Web page, and Competion based site.</p><br>


<p>Over time, and with the advancement of the internet age, and the expansion of the world wide web, I moved the site 
to its current domain, <span class="advtlink"><a href="http://www.tipsterchallenge.com/"><b> www.tipsterchallenge.com</b></a></span>, which is now its permanent place on the web.</p><br>


<p>Membership has always been free to all which underlines our commitment to never charge members for participation, 
a concept which is now sadly becoming very rare for horse racing and competition based websites.</p><br>


<p>Tipster Challenge will always remain <b>FREE</b> - and is a non profit making organization. We do welcome personal 
<a href="./donations.php">donations</a> from members but this is of course entirely voluntary, and any funds are used to further develop the site,
 and upgrade its performance, look, and enhance features.</p><br>


<p>Any revenue received by Tipsterchallenge through advertisers, or through affiliates is used solely for the purpose
 of future development.</p><br>

<p><b>Richard de Rothschild</b></p>
<p>Founder, Owner</p>
<p>Tipsterchallenge.com</p><br>

</td></tr></table>
<!--Page contents Ends here-->  
		</div>
	</div>  
  </div>
 </div>   
</div> 
<?php

//Footer Included

if(@$_SESSION['sec_username']==null && @$_SESSION["password"]==null && @$_SESSION["sec_silk"]==null)
{
	include "./include/user_footer.php"; 
}
else 
{
	include "./include/user_login_footer.php";
}

?>		