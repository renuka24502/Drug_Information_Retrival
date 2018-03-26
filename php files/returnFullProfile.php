<?php
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','143myself','Drugs') or die('Failed to connect to MySQL.');
   //if(isset($_POST['name']))// && isset($_POST['details']))
   //{
		$name = $_POST['name'];
		//$compdetails = $_POST['details'];
		
		$Sql_Query = "Select * from drugDetails where Brand_name like '".$name."'";
		
		$d = mysqli_query ($con, $Sql_Query);
		if ($d) {
				$rows = array();
				while($r = mysqli_fetch_assoc($d)){
					$rows[] = $r;
			}
				//$fetch = mysqli_fetch_array ($d);
			echo json_encode($rows);
			}
			else {
				echo 'TRy Again T_T'; 
			}   



   //}
   //else
   //{
//		echo "NOT A POST REQUEST :P";
	   
  // }	
   mysqli_close($con);
?>
