<?php 
	include "db_Config.php";

	function reject($id){
		$query = "UPDATE messages SET is_approve = 'N' WHERE id = '$id' ";
		$result = mysql_query($query);
		if($result){
			echo "Successfully to Reject";
			
		}else{
			echo "Not Successfully Reject";
			
		}
	}

	function approve($id){
		$query = "UPDATE messages SET is_approve = 'Y' WHERE id = '$id' ";
		$result = mysql_query($query);
		if($result){
			echo "Successfully to Approve";
		}else{
			echo "Not Successfully Approve";
			include "frontEnd.php";
		}
	}

	function delete($id){
		$query = "DELETE FROM messages where id = '$id'";
		$result = mysql_query($query);
		if($result){
			echo "Successfully Delete";
		}else{
			echo "Not Successfully Delete";
		}
	}

	function showTable(){
		$query = "SELECT * FROM messages";
		$result = mysql_query($query);
		if($result){
			$record = array();
			while($rec = mysql_fetch_assoc($result)){
				$record[] = $rec;
			}
			return $record;
		}else{
			echo "No Content inside the Table";
			return NULL;
		}
	}

	function insert($name, $email, $message){
		$query = "INSERT INTO messages(name, message, email, date_posted, is_approve) VALUES('$name', '$message', '$email', CURRENT_DATE(), 'N')";
		$result = mysql_query($query);
		if($result){
			echo "<font color = 'SkyBlue'><h2>Successfully Added";
			echo "</h2></font>";
		}else{
			echo "Not Successfully Added";
		}
	}

	function is_approved($permit){
		if($permit == "Y"){
			return true;
		}
		return false;
	}

	function showTableWithApproval(){
		$query = "SELECT * FROM messages where is_approve = 'Y'";
		$result = mysql_query($query);
		if($result){
			$record = array();
			while($rec = mysql_fetch_assoc($result)){
				$record[] = $rec;
			}
			return $record;
		}else{
			echo "No Content inside the Table";
			return null;
		}
	}
 ?>
