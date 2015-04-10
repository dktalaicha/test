<?php
include "./include/database_connection.php";

$today = date("Y-m-d"); 
/*echo $today; 
echo "<br>";*/

//$sql_ft_img = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Image' and advt_pos = 'Footer' order by advt_id desc";
$sql_ft_img = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Image' and advt_pos = 'Footer' order by rand()";

//echo $sql;exit();

$result_ft_img = mysql_query($sql_ft_img,$conn)
   or die("Couldn't execute query"); 
   
$row_ft_img_ctr = mysql_num_rows($result_ft_img); 

/*echo $row_ft_img['advt_pos'];
echo $row_ft_img['web_url'];
echo $row_ft_img['to_date'];*/

/*$advt_ft_img = $row_ft_img["advt_image"];
$advt_ft_img = str_replace("..",".",$advt_ft_img);
echo "<img border='0' src='$advt_ft_img' alt='Avertisement Image' width='180' height='100'>";
echo $advt_ft_img; */

//$row_ft_img_ctr = 0;
  
if ($row_ft_img_ctr == null)  
{
   echo "<center><a href='http://www.tipsterpro.com' target='_blank'> <img style='border:1px solid grey' src='./advt_images/advt_here_footer.jpg' alt='Avertisement Here' width='600' height='130'> </a></center>"; 	
}
else 
{    
  $i=1;
  $flag=0;  
  	
  while($row_ft_img = mysql_fetch_array($result_ft_img))
  {    
	$web_url[$i]=$row_ft_img['web_url'];	
	$advt_ft_img[$i]=$row_ft_img["advt_image"];				
	$advt_ft_img[$i] = str_replace("..",".",$advt_ft_img[$i]);
	//$advt_ft_img[$i]=$row_ft_img['advt_image'];
	//echo $advt_ft_img[$i];exit;	
	
	$flag=$i;
	if($i==4)
	{
		echo "<table class='advt advtlink' style='border-left:0px;border-right:0px;border-top:0px;border-bottom:0px'> "; 
		echo"<tr>";	
		
		for($j = 1; $j < 5; $j++)
		{									
			echo "<td><a href='$web_url[$j]' target='_blank'>					
				<img border='0' src='$advt_ft_img[$j]' alt='Avertisement Image' width='180' height='130'> </a></td>";			
		}
		
		echo "</tr>";		
		echo "</table>";
		$i = 0;
	} 
	$i=$i+1;
  }
  // end of while	  
	
	if ($flag!=4)
	{
		echo "<table class='advt advtlink' style='border-left:0px;border-right:0px;border-top:0px;border-bottom:0px'> ";
		echo"<tr>";	
		for($j=1;$j<$flag+1;$j++)
		{
			echo "<td><a href='$web_url[$j]' target='_blank'>
						<img border='0' src='$advt_ft_img[$j]' alt='Avertisement Image' width='180' height='130'> </a></td>";	
		}	
		echo "</tr>";	
		echo "</table>";
	}//end of if	
}		
  ?>    