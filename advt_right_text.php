<?php
			include "./include/database_connection.php";
			
			$today = date("Y-m-d"); 
			
				
			
			//$sql = "SELECT * FROM advt_information WHERE status = 'Active' and '$today' between from_date and to_date and advt_pos = 'Right' order by advt_id desc";			
			//echo $sql;
			//$sql = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Text' and advt_pos = 'Right' order by advt_id desc";	
			$sql = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_type = 'Text' and advt_pos = 'Right' order by rand()";	
			//echo $sql;
			
			$result = mysql_query($sql,$conn)
			   or die("Couldn't execute query"); 
			   
			$row_counter = mysql_num_rows($result); 
			
			/*echo $today;echo "--";			
			echo $row[from_date];echo "--";
			echo $row[web_url];echo "--";
			echo $row[to_date];echo "--";*/
			  
			if ($row_counter == null)  
			 {
			 	echo "<br><span class='errMessage' id='msg'><center>  Advertise Here </center></span>";				
			 	
			 }  		 
		
			while($row = mysql_fetch_array($result))
			{ 
				 
			   echo "<table class='advt advtlink' style='border-left:0px;border-right:0px;border-top:0px;border-bottom:1px solid #eaeaea;'> ";   
				echo "<tr>";
				  //echo "<th>";
				    //echo "<a href='$row[web_url]' target='_blank'> $row[advt_title] </a>";	      
				  //echo "</th>";
				echo "</tr>";
				
				echo "<tr>";
				  echo "<td><p align=justify>";
				    echo $row['advt_text'];
				  echo "</p></td>";
				echo "</tr>";
				
				echo "<tr>";
				  echo "<td>";
				   //echo "<a href='$row[web_url]' target='_blank'> $row[web_url] </a>";				   	    
				  echo "</td>";
				echo "</tr>";
			  echo "</table>";	
			}

	?>