
 	
 	<html>
	 	<head>
	 		<title>View</title>
	 	</head>
	 	<body>
	 		<table border = "1">
			<?php 
				include "utilities.php";
				$record = showTable();
				foreach($record as $rec){
					echo "<tr>";
					echo "<td>". $rec['id'] ."</td>";
					echo "<td>". $rec['name']. "</td>";
					echo "<td>". $rec['email']. "</td>";
					echo "<td>". $rec['message']. "</td>";
					echo "<td>". $rec['date_posted']. "</td>";
					echo "<td>". $rec['is_approve']. "</td>";
					if(is_approved($rec['is_approve'])){
						echo "<td><a href = 'rejected.php?id=" . $rec['id'] . "'>Reject</a></td>";
					}else{
						echo "<td><a href = 'approved.php?id=" . $rec['id'] . "'>Approve</a></td>";
					}
		
					echo "<td><a href = 'delete.php?id=" . $rec['id'] . "'>Delete</a></td></tr>";							
				}

 		?>
 		</table>
 		<a href="frontEnd.php">Back</a>
	 	</body>
 	</html>
