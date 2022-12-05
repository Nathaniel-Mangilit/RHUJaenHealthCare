<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
   <title>Jaen Health Care Unit</title>

<?php
$host ="localhost";
$user ="root";
$password ="";
$db ="rhudb";
 include 'common/header.php';
?>

</head>
<body>
<?php
 include 'common/nav-bar.php';
?>

<main id="main">

  <?php
              // Create connection
              $conn = mysqli_connect($host, $user, $password, $db);
              // Check connection
              if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT * FROM `events` WHERE eventId=".$_GET['id'];
              $result = $conn->query($sql);
               $date = "";
               $time = "";
               $location = "";
               $img = "";
               $details = "";
               $title = "";

              if ($result->num_rows > 0) {
                $count = 1;
                  while($row = $result->fetch_assoc()) {
                      
                    $date = date("F d, Y", strtotime($row['date']));
                    $time = date("h:i a",strtotime($row['time']));
                    $location = $row['location'];
                    $img = "img/events/".$row['img'];
                    $details = $row['details'];
                    $title = $row['title'];
                        
                    }
                  }
            ?>


  

 <div class="col-md-8 mb-4 offset-2">

<section class="border-bottom mb-4 mt-4">
            <img src="<?php echo $img ?>"
              class="img-fluid mb-4" style="width: 100%; height: auto" alt="" />
            <h1 class="mb-0 h4"><?php echo $title; ?></h1>
          
          <div class="row align-items-center mb-4">
              <div class="col-lg-12 text-center text-lg-start mb-3 m-lg-0">
                <span class="text-muted"><?php echo $date." ".$time; ?></span>
              </div>
              <div class="col-lg-12 text-center text-lg-start mb-3 m-lg-0">
                <span class="text-muted"><?php echo $location; ?></span>
              </div>
            </div>
              <p>
                 <?php echo $details; ?>
            </p>
        </div>

  </main><!-- End #main -->
<!--footer -->
<?php 
include 'common/footer.php' 
?>
<?php
include 'common/jscript.php'  ?>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<script type="text/javascript">  
function createNewRequest(id) {
   var name = document.getElementById("_patientName").value;
   var contact = document.getElementById("_contactNumber").value;
   var address = document.getElementById("_address").value;
   var email = document.getElementById("_email").value;


      var formData = new FormData();
      formData.append("PatientName", name);
      formData.append("Address", address);
      formData.append("ContactNumber", contact);
      formData.append("Email", email);
      formData.append("eventId", id);


      var xhttp = new XMLHttpRequest();
      // Set POST method and ajax file path
      xhttp.open("POST", "common/RequestFunction.php?action=add", true);
      // call on request changes state
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {

           var response = this.responseText;
           if(response == 1){ 

           Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "Request sent successfully!"
                  });

             document.getElementById("request").reset();
          }else{
               Swal.fire({
                    icon: "warning",
                    title: "Failed",
                    text: response
                  });
           }
         }
      };

      // Send request with data
      xhttp.send(formData); 
}
  </script>
</body>


</html>