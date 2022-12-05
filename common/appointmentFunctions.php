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
		if(isset($_FILES['file']['name'])){
		   // file name
		   $filename   = "validID-".uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
		   // Location
		   $location = 'C:/xampp/htdocs/Capstone/admin/img/events/'.$filename;

		   // file extension
		   $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		   $file_extension = strtolower($file_extension);

		   // Valid extensions
		   $valid_ext = array("pdf","doc","docx","jpg","png","jpeg","jfif");

		   $img = $location.".".$file_extension;

		   $imgName = $filename.".".$file_extension;

		   $response = 0;
		   if(in_array($file_extension,$valid_ext)){
		      // Upload file
		      if(move_uploaded_file($_FILES['file']['tmp_name'],$img)){

				$fname= "fname";
				$lname= "lname";	
				$age="age";
				$gender="gender";
				$address="address";
				$contact="ContactNo";
				$email="Email";
				$validIdNum="validIdNum";
				$service="service";

				$sql = "INSERT INTO `appointment_masterlist`( `firstName`,`lastName`, `age`, `gender`, `address`, `contactNumber`, `Email`, `validID` , `validIdnumber` , `id_service`,`status`) 

							VALUES ('".$_POST['fname']."',
							'".$_POST['lname']."',
							'".$_POST['age']."',
							'".$_POST['gender']."',
							'".$_POST['address']."',
							'".$_POST['ContactNo']."',
							'".$_POST['Email']."',
							'".$imgName."',
							'".$_POST['validIdNum']."',
							'".$_POST['service']."',
							'".$_POST['status']."')";

				 $response = 0;

				if ($conn->query($sql) === TRUE) {
				  $response = 1;
				    echo $response;
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}

				 $conn->close();
		         $response = 1;
		      } 
		   }
		}



} 
				else if ($action === "delete") {
			
		// sql to delete a record
		$sql = "DELETE FROM `appointment_masterlist` WHERE id_appointment =".$_POST['id'];

		if ($conn->query($sql) === TRUE) {
		  echo "success";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}

}else if ($action === "retrieve") {
	
	$id = $_GET['id'];

	$sql = "SELECT * FROM `appointment_masterlist` WHERE id_service = ".$id;
	$return_arr = array();
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {

	    $row_array['id'] = $row['id_appointment'];
	    $row_array['Name'] = $row['firstName']." ".$row['lastName'];
	    $row_array['age'] = $row['age'];
	    $row_array['gender'] = $row['gender'];
	    $row_array['address'] = $row['address'];
	    $row_array['contactNumber'] = $row['contactNumber'];
	    $row_array['Email'] = $row['Email'];
	    $row_array['validIdnumber'] = $row['validIdnumber'];
	    $row_array['date'] = date("F d, Y", strtotime($row['date']));
	    $row_array['start_time'] = date("h:i a",strtotime($row['start_time']));
	    $row_array['end_time'] = date("h:i a",strtotime($row['end_time']));
	    $row_array['status'] = $row['status'];
	    array_push($return_arr,$row_array);
	}

	echo json_encode($return_arr); 
}
else if ($action === "update") {
	
	$response = 1;
	$id = $_POST['id'];
	$status = $_POST['status'];
	$sql= "Update `appointment_masterlist` SET status = '".$status."' WHERE id_appointment = ".$id;


	if ($conn->query($sql) === TRUE) {
		 $response = 1;
	   } else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			 	}
		          echo $response;
}else if ($action === "set"){
	$response = 1;
	$id = $_POST['id'];
	$status = $_POST['status'];
	$date = $_POST['date'];
	$startTime = $_POST['startTime'];
	$endtime = $_POST['endtime'];
	
	$sql= "UPDATE `appointment_masterlist` SET
	`status` = '".$status."',
	`date` = '".$date."',
	`start_time` = '".$startTime."',
	`end_time` = '".$endtime."'
	WHERE id_appointment = ".$id;

	if ($conn->query($sql) === TRUE) {
		 $response = 1;
	   } else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			 	}
		          echo $response;
}

?>