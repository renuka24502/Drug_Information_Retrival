
<?php
			$con = mysqli_connect('localhost', 'root', '143myself', 'Drugs');
			//$query=mysqli_select_db($con,'training');
			if($con)
			{
				$c = "SELECT Brand_name from drugDetails";
				$d = mysqli_query ($con, $c);
				if ($d) {
					$rows = array();
					while($r = mysqli_fetch_assoc($d)){
						$rows[] = $r;
					}
					//$fetch = mysqli_fetch_array ($d);
					echo json_encode($rows);
				}
				else{
					echo 'TRy Again T_T'; 
				}
			}
			else
				echo (mysqli_error($con));
			mysqli_close($con);
?>
