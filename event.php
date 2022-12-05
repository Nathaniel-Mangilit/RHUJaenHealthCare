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
  <div class="container-fluid">
            <section class="bg-light" id="News&Announcement"> 
                <section class="section-news section-t8">
                  <div class="container text-center my-3">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                              <h2 class="title-a">News & Announcement</h2>
                            </div>
                            <div class="title-link">
                            </div>
                          </div>
                        </div>
                      </div>
                <div class="row mx-auto my-auto justify-content-center">
                  <div class="row">
                     <?php
                              // Create connection
                              $conn = mysqli_connect($host, $user, $password, $db);
                              // Check connection
                              if ($conn->connect_error) {
                                  die("Connection failed: " . $conn->connect_error);
                              }

                              $sql = "SELECT * FROM `events`";

                              $result = $conn->query($sql);

                              if ($result->num_rows > 0) {
                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                     $date = date("F d, Y", strtotime($row['date']));
                                    $time = date("h:i a",strtotime($row['time']));
                                      ?>

                                      <div class="col-lg-3 col-sm-12 mb-1">
                                        <div class="card">
                                          <img src="<?php echo "img/events/".$row['img']; ?>" class="img-fluid" style="height: 150px">
                                        <div class="card-body">
                                          <h6 class="card-title"><?php echo $row['title']; ?></h6>
                                          <a href="Events-single.php?id=<?php echo $row['eventId']; ?>" class="btn btn-success">view</a>
                                        </div>
                                        <div class="card-footer text-muted">
                                          <?php echo date_format(date_create($row['date']),'D M d, Y'); ?>
                                        </div>
                                      </div>

                                      </div>

                                   <?php
                                  }

                                }
                          ?>     
                     
                  </div>
                </div>
            </div>
          </section><!-- End Event Section -->
      </section>
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