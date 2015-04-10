<?php
include "./include/database_connection.php";

$today = date("Y-m-d"); 
/*echo $today; 
echo "<br>";*/

//$sql = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Text' and advt_pos = 'Footer' order by advt_id desc";
$sql = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Text' and advt_pos = 'Footer' order by rand()";


/*echo $sql;
exit();*/



$result = mysql_query($sql,$conn)
   or die("Couldn't execute query"); 
   
$row_ctr = mysql_num_rows($result); 

/*echo $row['advt_pos'];
echo $row['web_url'];
echo $row['to_date'];*/
  
if ($row_ctr == null)  
 {
   echo "<br><span class='errorMessage' id='msg'><center> Advertise Here </center></span>"; 	
 }  
 
  $i=1;
  $flag=0;
  	
  while($row = mysql_fetch_array($result))
  {
    $advt_title[$i]=$row['advt_title'];
	//$web_url[$i]=$row['web_url'];
	$advt_text[$i]=$row['advt_text'];
	
	$flag=$i;
	if($i==3)
	{
		echo "<table class='advt advtlink' style='border-left:0px;border-right:0px;border-top:0px;border-bottom:1px solid #eaeaea;padding:3px'> "; 
		
		/*echo"<tr>";
		for($j=1;$j<4;$j++)
		{
			echo "<th>";			
			echo "<a href='$web_url[$j]' target='_blank'> $advt_title[$j] </a>";	 
			echo "</th>";
		}
		echo "</tr>";*/
		
		echo "<tr>";
		for($j = 1; $j < 4; $j++)
		{
			echo "<td style='width:33%;'><p align=justify>$advt_text[$j]</p></td>";			
		}
		
		echo "</tr>";
		
		/*echo "<tr>";
		for($j = 1; $j < 4; $j++)
		{
			echo "<td>";
			echo "<a href='$web_url[$j]' target='_blank'> $web_url[$j] </a>";	 
			echo "</td>";			
		}
		
		echo "</tr>";*/
		
		echo "</table>";
		$i = 0;
	} 
	$i=$i+1;
	}
  // end of while	
	
	if ($flag!=3)
	{
		echo "<table class='advt advtlink' style='border-left:0px;border-right:0px;border-top:0px;border-bottom:1px solid #eaeaea;padding:3px'> ";
		
		/*echo"<tr>";
		for($j=1;$j<$flag+1;$j++)
		{
				echo "<th>";			
				echo "<a href='$web_url[$j]' target='_blank'> $advt_title[$j] </a>";	 
				echo "</th>";
		}
		echo "</tr>";*/
	
	echo "<tr>";
	for($j=1;$j<$flag+1;$j++)
	{
		echo "<td style='width:33%;'><p align=justify>$advt_text[$j]</p></td>";	
	}	
	echo "</tr>";
	
	/*echo "<tr>";
	for($j=1;$j<$flag+1;$j++)
	{
		echo "<td >";
			echo "<a href='$web_url[$j]' target='_blank'> $web_url[$j] </a>";	 
			echo "</td>";	
	}	
	echo "</tr>";*/
	
	echo "</table>";
	}//end of if	
?>     