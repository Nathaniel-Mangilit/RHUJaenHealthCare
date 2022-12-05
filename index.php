<!DOCTYPE html>
<html>
<head> 
  <link href='assets/vendor/fullcalendar/lib/main.css' rel='stylesheet' />
  <script src='assets/vendor/fullcalendar/lib/main.js'></script>
	 <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
	<title>Jaen HealthCare Unit</title>
<?php
$host ="localhost";
$user ="root";
$password ="";
$db ="rhudb";
 	include 'common/header.php'
 ?>
 <style type="text/css">
 	#preloader {
 	display: none;
 	z-index: 99999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #494a48;
}
#loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 150px;
    height: 150px;
    margin: -75px 0 0 -75px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #9370DB;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
}
#loader:before {
    content: "";
    position: absolute;
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #BA55D3;
    -webkit-animation: spin 3s linear infinite;
    animation: spin 3s linear infinite;
}
#loader:after {
    content: "";
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #FF00FF;
    -webkit-animation: spin 1.5s linear infinite;
    animation: spin 1.5s linear infinite;
}
@-webkit-keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes spin {
    0%   {
        -webkit-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
 </style>
</head>

<body id="page-top">
<?php
	include 'common/nav-bar.php'
  ?>
	<!-- Header Section -->
	<header class="masthead">
	            <div class="container px-5">
	                <div class="row gx-5 align-items-center">
	                    <div class="col-lg-6">

	                        <!-- Mashead text and app badges-->
	                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
	                            <h1 class="display-1 lh-1 mb-3">Jaen <span class="text-success"> Health Care Unit </span></h1>
	                            <p class="lead fw-normal text-muted mb-5"><i> To Ensure accesssibility and quality of Health care to improve quality of life of all Filipino's especially the poor.</i></p>
	                        </div>
	                    </div>
	                    <div class="col-lg-6">
	                        <!-- Masthead device mockup feature-->
	                        <div class="masthead-device-mockup">
	                                 
	                            <img src="assets/img/Health_Center.jpg" style="max-width: 100%; height: 100%">
	                        </div>
	                    </div>
	                </div>
	            </div>
	</header>
	 <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-success">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">"Health of ALL Filipinos" <br> Vision <br><i>- DEPARTMENT OF HEALTH</i><br>
                        </div>
                    </div>
                </div>
            </div>
    </aside>
    <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-heart icon-feature text-success d-block mb-3"></i>
                                        <h3 class="font-alt">Medical Check-Up</h3>
                                        <p class="text-muted mb-0">Municipal Health Office performs medical check up and consultation services (both sick and well individuals).</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-person-plus icon-feature text-success d-block mb-3"></i>
                                        <h3 class="font-alt">Dental Check-Up</h3>
                                        <p class="text-muted mb-0">Municipal Dentist on duty provides full dental treatment and care.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-success d-block mb-3"></i>
                                        <h3 class="font-alt">Sanitary Permit</h3>
                                        <p class="text-muted mb-0">The Sanitary Officer do regular sanitation visit to various establishment.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-journal-check icon-feature text-success d-block mb-3"></i>
                                        <h3 class="font-alt">Health Certificate</h3>
                                        <p class="text-muted mb-0">The Municipal Health Office (MHO) do regular check if and gives health certificates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                      <img src="assets/img/Services.jpg" style="max-width: 100%; height: 100%">
                    </div>
                </div>
            </div>
        </section>
                <!-- Announcement Section -->
        <section class="bg-light" id="News&Announcement"> 
                    <!-- Event Section -->
                <section class="section-news section-t8">
                  <div class="container text-center my-3">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="title-wrap d-flex justify-content-between">
                            <div class="title-box">
                              <h2 class="title-a">News & Announcement</h2>
                            </div>
                            <div class="title-link">
                              <a href="event.php" class="text-muted">All
                                <span class="bi bi-chevron-right"></span>
                              </a>
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

                              $sql = "SELECT * FROM `events` LIMIT 4";

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

    <!-- Call to action section-->
        <section id="about" class="cta">
	      <div class="container">
	        <div class="row">
	          <div class="col-md-12 col-lg-8 bg-gradient-success">
	            <div class="title-single-box">
	             
	            </div>
	          </div>
	          <div class="col-md-12 col-lg-4">
	          </div>
	        </div>
	      </div>
	    <!-- End Intro Single-->
	    <section class="section-about">
	      <div class="container">
	        <div class="row">

	          <div class="col-md-12 section-t8 position-relative">
	            <div class="row">
	              <div class="col-md-6 col-lg-5">
	              </div>
	              <div class="col-lg-2  d-none d-lg-block position-relative">
	                <div class="title-vertical d-flex justify-content-start text-white">
	                
	                </div>
	              </div>
	              <div class="col-md-6 col-lg-5 section-md-t3 bg-gradient-success">
	                <div class="title-box-d">
	                  <h3 class="title-d">RHU
	                    <span class="color-d">JAEN</span> Health Care
	                    <br> Unit
	                  </h3>
	                </div>
	                <p class="color-text-a">
	                  Para po sa kaalaman at kaliwanagan, ang lahat ng bakuna po sa RURAL HEALTH UNIT (RHU) ng Jaen ay LIBRE AT WALANG BAYAD. Mangyari lamang po na makipag-ugnayan sa RHU Hotline kung mayroon po kayong nais itanong patungkol sa nasabing bakuna.
	                </p>
	             
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
   	 	</section>
            <div class="cta-content">
                <div class="container px-5">
                </div>
            </div>
        </section>   
 <?php 
  include 'modal/modalAppointment.php' ?>
<?php 
	include 'common/footer.php'
 ?>

  
<?php
	include 'common/jscript.php'
?>


<script type="text/javascript">

function enforce_maxlength(event) {
  var t = event.target;
  if (t.hasAttribute('maxlength')) {
    t.value = t.value.slice(0, t.getAttribute('maxlength'));
  }
}

// Global Listener for anything with an maxlength attribute.
// I put the listener on the body, put it on whatever.
document.body.addEventListener('input', enforce_maxlength);



 function checkSlot(){
   $date = document.getElementById("_date");
 }

function createRequest() {
   var fname = document.getElementById("_fname").value;
   var lname = document.getElementById("_lname").value;
   var age = document.getElementById("_age").value;
   var gender = document.getElementById("_gender").value;
   var contact = document.getElementById("_ContactNo").value;
   var address = document.getElementById("_address").value;
   var service = document.getElementById("_service").value;
   var email = document.getElementById("_email").value;
   var files = document.getElementById("_file").files;
   var status = "pending";


   if(fname.length > 0 && lname.length > 0 && age.length > 0 && contact.length > 0 && address.length > 0){

   	 document.getElementById('preloader').style.display = "block";

      var formData = new FormData();
      formData.append("fname", fname);
      formData.append("lname", lname);
      formData.append("age", age);
      formData.append("gender", gender);
      formData.append("address", address);
      formData.append("ContactNo", contact);
      formData.append("service", service);
      formData.append("status", status)
      formData.append("Email", email);
          if(files.length == 0){
            var files = "none".files;
        formData.append("file", files);
    }else{
          formData.append("file", files[0]);  
    }  


      

      var xhttp = new XMLHttpRequest();
      // Set POST method and ajax file path
      xhttp.open("POST", "admin/functions/appointment_data.php?action=add", true);
      // call on request changes state
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {

           var response = this.responseText;
          
           if(response == 1){ 

 document.getElementById('preloader').style.display = "none";
           Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: "Request sent successfully!"
                  });

             document.getElementById("formEvent").reset();
          }else{

          	 document.getElementById('preloader').style.display = "none";
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
      } else {
        Swal.fire({
          icon: "info",
          title: "Invalid data",
          text: "Please fill in all fields!"
        });
      } 




}


  </script>
  <div id="preloader">
  <div id="loader"></div>
</div>
</body>
</html>