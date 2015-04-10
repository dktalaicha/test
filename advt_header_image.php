<?php
			include "./include/database_connection.php";
			
			$today = date("Y-m-d");		
				
			
			//$sql = "SELECT * FROM advt_information WHERE status = 'Active' and '$today' between from_date and to_date and advt_pos = 'Right' order by advt_id desc";			
			//echo $sql;
			$sql = "SELECT * FROM advt_information WHERE status = 'Active' and from_date <= '$today' and to_date >= '$today' and advt_pos = 'Header' order by rand() limit 1";	
			
			//$sql = "SELECT a.*, b.url as FROM advt_information as a, bookmakers as b WHERE a.status = 'Active' and a.from_date <= '$today' and a.to_date >= '$today' and a.advt_pos = 'Header' order by rand() limit 1";	
			//echo $sql;
			
			$result = mysql_query($sql,$conn) or die("header advt img Couldn't execute query");   
			 			
			$row_ctr = mysql_num_rows($result);		
			$row = mysql_fetch_array($result);		
			
			
			/*echo $today;echo "--";			
			echo $row[from_date];echo "--";
			echo $row[web_url];echo "--";
			echo $row[to_date];echo "--";*/
			
			//echo $row_ctr;echo "<br>";			
			
			 
			if ($row_ctr == 0)  
			 {
			 	echo "<a href='http://www.tipsterpro.com'><img style='border:1px solid grey' src='./advt_images/468x60.gif' alt='Make Your Betting Pay with Tipsterpro.com' width='468' height='60'> </a>"; 				
			 	
			 }  		 
		    else {
			
				$advt_image = $row["advt_image"];
				$advt_image = str_replace("..",".",$advt_image);
				//echo $advt_image; exit;
				echo "<a href='$row[web_url]' target='_blank'> <img border='0' src='$advt_image' alt='advt image' width='468' height='60'> </a>";			
		    }

	?>