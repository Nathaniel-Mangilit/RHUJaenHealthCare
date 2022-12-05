	<?php
$host ="localhost";	
$user ="root";
$password ="";
$db ="rhudb";	
	

// Create connection
$conn = mysqli_connect($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$action = $_GET['action'];
if($action == "add"){

				$name= "name";
				$address="address";
				$contact="contactNo";
				$email=mysqli_real_escape_string($conn,$_POST['Email']);
				$sql = "INSERT INTO `request_masterlist`(`eventId`, `PatientName`, `Address`, `ContactNumber`, `Email`) 
											 VALUES ('".$_POST['eventId']."',
											 		 '".$_POST['PatientName']."',
											 		 '".$_POST['Address']."'
											 		 ,'".$_POST['ContactNumber']."'
											 		 ,'".$email."')";



				 $response = 0;

				if ($conn->query($sql) === TRUE) {
				  $response = 1;
				    echo $response;
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}

} 
				else if ($action === "delete") {
			
		// sql to delete a record
		$sql = "DELETE FROM `request_masterlist` WHERE id_request =".$_POST['id'];

		if ($conn->query($sql) === TRUE) {
		  echo "success";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}

}else if ($action === "retrieve") {
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM `request_masterlist` WHERE eventId = ".$id;
	$return_arr = array();
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {

	    $row_array['id'] = $row['id_request'];
	    $row_array['PatientName'] = $row['PatientName'];
	    $row_array['Address'] = $row['Address'];
	    $row_array['ContactNumber'] = $row['ContactNumber'];
	    $row_array['Email'] = $row['Email'];
	    $row_array['status'] = $row['status'];
	    array_push($return_arr,$row_array);
	}

	echo json_encode($return_arr); 
}


else if ($action === "update") {
	
	$response = 1;
	$id = $_POST['id'];
	$status = $_POST['status'];
	$sql= "Update `request_masterlist` SET status = '".$status."' WHERE id_request = ".$id;


	if ($conn->query($sql) === TRUE) {
		 $response = 1;
	   } else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			 	}
		          echo $response;
}

?>