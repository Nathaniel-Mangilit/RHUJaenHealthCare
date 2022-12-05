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
		   $filename   = "event-".uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
		   // Location
		   $location = '../img/events/'.$filename;

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

				$sql = "INSERT INTO `events`(
				`title`, 
				`img`, 
				`details`, 
				`time`, 
				`date`, 
				`location`) 

				VALUES (
				'".$_POST['title']."',
				'".$imgName."',
				'".$_POST['details']."',
				'".$_POST['time']."',
				'".$_POST['date']."',
				'".$_POST['location']."')";

				if ($conn->query($sql) === TRUE) {
				  $response = 1;
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}

				 $conn->close();
		         $response = 1;
		      }
		   }
		   echo $response;
		}

}else if ($action === "delete") {
			
		// sql to delete a record
		$sql = "DELETE FROM events WHERE eventId=".$_POST['id'];

		if ($conn->query($sql) === TRUE) {
		  echo "success";
		} else {
		  echo "Error deleting record: " . $conn->error;
		}

}else if ($action === "retrieve") {
	$sql = "SELECT * FROM `events`";
	$return_arr = array();
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()) {

	    $row_array['id'] = $row['eventId'];
	    $row_array['title'] = $row['title'];
	    $row_array['date'] = date("F d, Y", strtotime($row['date']));
	    $row_array['time'] = date("h:i a",strtotime($row['time']));
	    $row_array['location'] = $row['location'];
	    array_push($return_arr,$row_array);
	}

	//echo'{"data":'.json_encode($return_arr).'}';

	echo json_encode($return_arr); 
}else if ($action === "edit") {
if(isset($_FILES['file']['name'])){
		   // file name
		   $filename   = "event-".uniqid() . "-" . time(); // 5dab1961e93a7-1571494241
		   // Location
		   $location = '../img/events/'.$filename;

		   // file extension
		   $file_extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		   $file_extension = strtolower($file_extension);

		   // Valid extensions
		   $valid_ext = array("pdf","doc","docx","jpg","png","jpeg");

		   $img = $location.".".$file_extension;

		   $imgName = $filename.".".$file_extension;

		   $response = 0;
		   if(in_array($file_extension,$valid_ext)){
		      // Upload file
		      if(move_uploaded_file($_FILES['file']['tmp_name'],$img)){
 
			$sql= "UPDATE `events` SET 
			`img` = '".$imgName."',
			`title`='".$_POST['title']."',
			`details`='".$_POST['details']."',
			`time`='".$_POST['time']."',
			`date`='".$_POST['date']."',
			`location`='".$_POST['location']."' WHERE eventId = ".$_POST['id'];

				if ($conn->query($sql) === TRUE) {
				  $response = 1;
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}

				 $conn->close();
		         $response = 1;
		      } 
		   }

		   echo $response;
		  
		}else
		{
			$sql= "UPDATE `events` SET 
			`title`='".$_POST['title']."',
			`details`='".$_POST['details']."',
			`time`='".$_POST['time']."',
			`date`='".$_POST['date']."',
			`location`='".$_POST['location']."' WHERE eventId = ".$_POST['id'];

				if ($conn->query($sql) === TRUE) {
				  $response = 1;
				} else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}

				 $conn->close();
		         $response = 1;
		}
}


?>