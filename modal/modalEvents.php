<?php 
$host ="localhost";
$user ="root";
$password ="";
$db ="rhudb";
 ?>
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


<!-- Event Modal-->
        <div class="modal fade" id="EventModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">

            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-success p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel"><h1 class="title-single"><?php echo $title; ?></h1>
                         <span><?php echo $location; ?></span></h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <section class="intro-single">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                          <h1 class="title-single"><?php echo $title; ?></h1>
                         <span><?php echo $location; ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </section><!-- End Intro Single-->


            <!-- ======= Blog Single ======= -->
            <section class="news-single nav-arrow-b">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="news-img-box">
                      <img src="<?php echo $img ?>" alt="" class="img-fluid offset-lg-1">
                    </div>
                  </div>
                  <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                      <ul class="list-inline text-center color-a">
                        <li class="list-inline-item mr-2">
                          <strong>Date: </strong>
                          <span class="color-text-a"><?php echo $date; ?></span>
                        </li>
                        <li class="list-inline-item mr-2">
                          <strong>Time: </strong>
                          <span class="color-text-a"><?php echo $time; ?></span>
                        </li>
                       </ul>
                    </div>
                    <div class="post-content color-text-a">
                      <blockquote class="blockquote">
                      <?php echo $details; ?>
                      </blockquote>
                     </div>
                    <div class="post-footer">
                      <div class="post-share">
                        <span>Share: </span>
                        <ul class="list-inline socials">
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- End Blog Single-->
          </div>
        </div>
