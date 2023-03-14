<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIDDABD</title>
    <link href="assets/css/bootstrap.5.0.2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/cardslider.css">
    
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/font-awesomeall.min.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.min.html">

    <link rel="icon" type="image/x-icon" href="assets/images/logo/biddhabd-white-logo.jpg">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <style></style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
   
  </head>

  <body>
    <!-- header slider starts  -->
<?php include ("header.php"); ?>
    <!-- header ends  -->

    <!-- Slider Starts  -->
    <div class="slider">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          <div class="carousel-item active">
          <img class="d-block w-100" src="assets/images/slider/slider 1.jpg" alt="First slide" style="height: 500px;">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slider/slider 2.jpg" alt="Second slide" style="height: 500px;">
          </div>
          <div class="carousel-item">
          <img class="d-block w-100" src="assets/images/slider/slider 3.jpg" alt="Third slide" style="height: 500px;">
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
      </div>
  </div>
    <!-- Slider ends  -->

    <!-- Future larning starts  -->
    <section id="" class="hlearn">
      <!--Container-1 Start-->
      <div class="section container-fluid about" id="about">
        <div class="row">
            <div class="col-md-4 col-12">
                <img src="assets/images/contener/learning.jpg" alt="learning img" style="height: 250px; width:330px">
            </div>
            <div class="col-md-8 col-12">
                <div class="content">
                    <h2>Welcome to the future of learning</h2>
                    <p>BIDDABD makes learning engaging & effective by leveraging deep pedagogy & cutting edge technology.
                       With offerings ranging from adaptive self-learning courses on apps & web to personalised 1-on-1 classes with expert teachers for ages 4-18+, 
                       we have programs for every learner.
                    </p>
                </div> 
                
                <a class="btn btn-danger" href="larning.php" role="button">Explore Learning programs</a>
            </div>
        </div>
    </div>
      <!--Container-1 End-->
      <div class="web-bg"></div>
    </section>
    <!-- Future larning ends  -->


    <!-- Education Bord starts  -->
    <section id="trust" class="trust section-padding-bottom">
      <div class="container" style="margin-top:-100px;">
        <section>
          <div class="container">
            <div class="trust-content">
              <div class="title mb-5">
                <h2 class="text-center" style="font-size: 48px; line-height: 48px;">Trusted by 150 million+ learners</h2>
              </div>
              <div class="row">
                <div class="col-lg-4  d-flex justify-content-xl-around text-center trust-left-content">
                  <div class="trust-left">
                    <img src="assets/images/education_bord/generalbord.png" alt="trust img" style="width: 150px; hight: 250px;">
                    <h5 style="margin-top: 8px;">General Education</h5>
                  </div>
                </div>
                <div class="col-lg-4  d-flex justify-content-xl-around text-center trust-left-content">
                  <div class="trust-left">
                    <img src="assets/images/education_bord/technicalbord.jpg" alt="trust img" style="width: 150px; hight: 250px;">
                    <h5 style="margin-top: 5px;">Technical Education</h5>
                  </div>
                </div>
                <div class="col-lg-4  d-flex justify-content-xl-around text-center trust-left-content">
                  <div class="trust-left">
                    <img src="assets/images/education_bord/madrasah_board.jpg" alt="trust img" style="width: 200px; hight: 300px; margin-top:-10px;">
                    <h5 style="margin-top: 5px;">Madrasha Education</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- Education Bord ends  -->


    <!-- Learning Program starts  -->
    <section id="learning" class="learning section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="margin-top:50px;">
            <div class="title mb-5">
              <h2 class="text-center" style="font-size: 48px; line-height: 48px;">A Learning Program For Every Student</h2>
            </div>
            <div class="learning-content">
              <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <!-- One -->
                <li class="nav-item grade-item mr-2" role="presentation">
                  <button class="nav-link active" id="pills-pre-k-grade-3-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-pre-k-grade-3" type="button" role="tab" aria-controls="pills-pre-k-grade-3"
                    aria-selected="true">Pre-Primary</button>
                </li>
                <!-- Two -->
                <li class="nav-item grade-item mr-2" role="presentation">
                  <button class="nav-link" id="pills-grade-4-tab" data-bs-toggle="pill" data-bs-target="#pills-grade-4"
                    type="button" role="tab" aria-controls="pills-grade-4" aria-selected="false">Dance</button>
                </li>
                <!-- Three -->
                <li class="nav-item grade-item" role="presentation">
                  <button class="nav-link" id="pills-grade-9-tab" data-bs-toggle="pill" data-bs-target="#pills-grade-9"
                    type="button" role="tab" aria-controls="pills-grade-9" aria-selected="false">Music</button>
                </li>
                <!-- Four -->
                <li class="nav-item grade-item" role="presentation">
                  <button class="nav-link" id="pills-grade-7-tab" data-bs-toggle="pill" data-bs-target="#pills-grade-7"
                    type="button" role="tab" aria-controls="pills-grade-9" aria-selected="false">Arabic education</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <!-- One -->
                <div class="tab-pane fade show active" id="pills-pre-k-grade-3" role="tabpanel" aria-labelledby="pills-pre-k-grade-3-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Live Class</h2>
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                              <div class="grade-img grade-img-right1">
                                <img src="assets/images/banner/biddabd-bannerBg.png" class="img-fluid" alt="Math img">
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Archive Class</h2>
                              <!-- <p class="mt-4">A grade based, self-paced app to give your child a head start inthe world of coding.</p> -->
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i>
                              </a>
                              <div class="grade-img grade-img-right2">
                                <img src="assets/images/banner/Epic (1).png" class="img-fluid" alt="Math img">
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Two -->
                <div class="tab-pane fade" id="pills-grade-4" role="tabpanel" aria-labelledby="pills-grade-4-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Live Class</h2>
                              <!-- <p class="mt-4">A self paced learning module, with rich visual content, practice quizzes and more to  give your child an extra edge at  Math.</p> -->
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                              <div class="grade-img grade-img-right2">
                                <img src="assets/images/banner/CodingLive.png" class="img-fluid" alt="Math img">
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Archive Class </h2>
                              <!-- <p class="mt-4">Personalised, 1-on-1 tutoring  classes with expert teachers.</p> -->
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                              <div class="grade-img grade-img-right1">
                                <img src="assets/images/banner/Coding (1).png" class="img-fluid" alt="Math img">
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Three -->
                <div class="tab-pane fade" id="pills-grade-9" role="tabpanel" aria-labelledby="pills-grade-9-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Live Class</h2>
                              <!-- <p class="mt-4">Personalised, 1-on-1 tutoring  classes with expert teachers.</p> -->
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important;font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                              <div class="grade-img grade-img-right1">
                                <img src="assets/images/banner/MusicLive.png" class="img-fluid" alt="Math img">
                              </div>
                            </div>

                          </div>
                        </a>
                      </div>
                      <div class="col-lg-6">
                        <a href="#">
                          <div class="grade-content mb-4">
                            <div class="grade-text">
                              <h2 class="mt-3 mb-3">BIDDABD Archive Class</h2>
                              <!-- <p class="mt-4">A grade based, self-paced app  to give your child a head start in the world of coding.</p> -->
                              <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                              <div class="grade-img grade-img-right2">
                                <img src="assets/images/banner/live1-on-1 (3).png" class="img-fluid" alt="Math img">
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Four -->
                <div class="tab-pane fade" id="pills-grade-7" role="tabpanel" aria-labelledby="pills-grade-7-tab">
                  <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                          <a href="#">
                            <div class="grade-content mb-4">
                              <div class="grade-text">
                                <h2 class="mt-3 mb-3">Arabic Education With  BIDDABD</h2>
                                <!-- <p class="mt-4">A grade based, self-paced app to give your child a head start in the world of coding.</p> -->
                                <a href="{{url('/biddabd-live-class')}}" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important; font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i></a>
                                <div class="grade-img grade-img-right2">
                                  <img src="assets/images/banner/quran2.jpg" class="img-fluid" alt="Math img">
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-lg-6">
                          <a href="#">
                            <div class="grade-content mb-4">
                              <div class="grade-text">
                                <h2 class="mt-3 mb-3">Arabic Education With  BIDDABD</h2>
                                <!-- <p class="mt-4">Over 40,000 books,audiobooks & videos to fuel curiosity & reading confidence.</p> -->
                                <a href="#" class="text-uppercase" style="color: #005BA4 !important;font-size: 15px !important;font-weight: 600;">Explore <i class="fa fa-angle-right" aria-hidden="true" style="float: none;font-size: 13px;color: #005BA4;"></i>
                                </a>
                                <div class="grade-img grade-img-right1">
                                  <img src="assets/images/banner/quran.png" class="img-fluid" alt="Math img">
                                </div>
                              </div>

                            </div>
                          </a>
                        </div>
                      </div>
                  </div>
                </div>
                <!-- -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Learning Program ends  -->


    <!-- Available-platform starts  -->
    <section class="available" id="available">
      <div class="container">
        <section id="available-platform" class="available-platform section-padding-bottom">
          <div class="container">
            <div class="title mt-5 mb-3">
              <h2 class="" style="font-size: 40px;line-height: 42px;">Available on all platforms</h2>
              <p class="" style="font-size: 22px;color: #A4A4B5;margin: 20px 0;">Our products can be used on all devices</p>
            </div>
            <div class="row available-content">
              <div class="col-lg-6">
                <div class="platform-img1">
                  <img src="assets/images/devices.svg" alt="devices img" style="width: 279px;">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="platform-img2 mt-4">
                  <img src="assets/images/handelDevice.png" alt="handel device img"
                    style="width: 450px;margin-top: -134px;">
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- Available-platform ends  -->


    <!-- Play-learning starts  -->
    <section id="play-learning" class="play-learning section-padding-bottom">
      <div class="container">
        <section>
          <div class="container">
            <div class="trust-content play-learning-content">
              <div class="row play-learning-item">
                <div class="col-lg-6  ">
                  <div class="play-learning-left ml-5">
                    <img src="assets/images/bidda-osmo.png" alt="osmoby img">
                    <h3 style="font-size: 30px; line-height: 46px; ">Play-Based Learning</h3>
                    <p>Fuel your child’s interest in reading, math, creativity, and more <br> with play-based games!</p>
                    <a href="explore.php" class="text-uppercase"
                      style="color: #000 !important;font-size: 15px !important;font-weight: 600;">Explore <i
                        class="fa fa-angle-right" aria-hidden="true" style="
                        float: none;font-size: 13px;color: #000;"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="play-learning-right ml-5 mt-3">
                    <img src="assets/images/osmoBg.png" class="img-fluid" alt="trust img">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- Play-learning ends  -->

    <!-- Biddabd subject starts  -->
    <section id="engaging" class="engaging section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
              <h3 class="mb-3" style="text-align: center;">Biddabd Courses Across Subjects</h3>
          </div>
        </div>
        <div class="row">
           <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row"> 

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/primary.png" alat="math" style="height:200px;">
                                        <div class="card-body">
                                        <center>
                                         <h4 class="card-title">Primary School</h4>
                                        <a class="btn btn-primary" href="primary_school.php" role="button">Details</a>
                                      </center>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/highschool.png" alat="coding" style="height:200px;">
                                      <div class="card-body">
                                        <center>
                                          <h4 class="card-title">High School</h4>
                                          <a class="btn btn-primary" href="high_school.php" role="button">Details</a>
                                        </center>

                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/ssc.png" style="height:200px;">
                                      <div class="card-body">
                                        <center>
                                          <h4 class="card-title">SSC</h4>
                                          <a class="btn btn-primary" href="ssc.php" role="button">Details</a>
                                        </center>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/hsc.png" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">HSC</h4>
                                      <a class="btn btn-primary" href="hsc.php" role="button">Details</a>
                                    </center>
                                  </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/dakhil.png" alt="dakhil" style="height:200px;">
                                <div class="card-body">
                                  <center>
                                    <h4 class="card-title">Dakhil</h4>
                                    <a class="btn btn-primary" href="dakhil.php" role="button">Details</a>
                                  </center>
                                </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/alim.png" alt="alim" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Alim</h4>
                                      <a class="btn btn-primary" href="alim.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/jdc.png" style="height:200px;">
                                  <!-- <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Music</h4>
                                      <a class="btn btn-primary" href="class.html" role="button">Enroll</a>
                                    </center>
                                  </div> -->
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/jdc.png" style="height:200px;">
                                  <!-- <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Music</h4>
                                      <a class="btn btn-primary" href="class.html" role="button">Enroll</a>
                                    </center>
                                  </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/ssc_vocational.png" alt="ssc_voc" style="height:200px;">
                                <div class="card-body">
                                  <center>
                                    <h4 class="card-title">SSC (VOC)</h4>
                                    <a class="btn btn-primary" href="ssc_voc.php" role="button">Details</a>
                                  </center>
                                </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="100%x280" src="assets/images/class_picture/hsc_voc.png" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">HSC (VOC)</h4>
                                      <a class="btn btn-primary" href="hsc_voc.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" alt="diploma" src="assets/images/class_picture/diploma.png" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">DIPLOMA</h4>
                                      <a class="btn btn-primary" href="diploma.php" role="button">Details</a>
                                    </center>
                                  </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/ict_training.png" alat="ict_training" style="height:200px;">
                              <div class="card-body">
                                <center>
                                  <h4 class="card-title">ICT (TRAINING)</h4>
                                  <a class="btn btn-primary" href="ict_training.php" role="button">Details</a>
                                </center>
                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/medical.png" alt="medical" style="height:200px;">
                                <div class="card-body">
                                  <center>
                                    <h4 class="card-title">Medical</h4>
                                    <a class="btn btn-primary" href="medical.php" role="button">Details</a>
                                  </center>
                                </div>

                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/university_admission.jpg" alt="uv_admission" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">University Admission</h4>
                                      <a class="btn btn-primary" href="university_admission.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/enginner.png" alt="uv_admission" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Engineering</h4>
                                      <a class="btn btn-primary" href="engineering_admission.php" role="button">Details</a>
                                    </center>
                                  </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/ict_training.png" alat="blank" style="height:200px;">
                              <!-- <div class="card-body">
                                <center>
                                  <h4 class="card-title">Math</h4>
                                  <a class="btn btn-primary" href="class.html" role="button">Enroll</a>
                                </center>
                              </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/bcs.jpeg" alt="bcs" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">BCS</h4>
                                      <a class="btn btn-primary" href="bcs_job.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/bankjob.png" alt="bank job" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">BANK JOB</h4>
                                      <a class="btn btn-primary" href="bank_job.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/ict_training.png" alat="blank" style="height:200px;">
                              <!-- <div class="card-body">
                                <center>
                                  <h4 class="card-title">Math</h4>
                                  <a class="btn btn-primary" href="class.html" role="button">Enroll</a>
                                </center>
                              </div> -->
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid" src="assets/images/class_picture/ict_training.png" alat="blank" style="height:200px;">
                              <!-- <div class="card-body">
                                <center>
                                  <h4 class="card-title">Math</h4>
                                  <a class="btn btn-primary" href="class.html" role="button">Enroll</a>
                                </center>
                              </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="row">

                                 <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/programming.png" alt="programmming" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Programming</h4>
                                      <a class="btn btn-primary" href="skill.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/music.png" alt="music" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Music</h4>
                                      <a class="btn btn-primary" href="skill.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/cooking.png" alt="cooking" style="height:200px;">
                                  <div class="card-body">
                                    <center>
                                      <h4 class="card-title">Cooking</h4>
                                      <a class="btn btn-primary" href="skill.php" role="button">Details</a>
                                    </center>

                                  </div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                    <img class="img-fluid"  src="assets/images/class_picture/diploma.png" alt="bank_job" style="height:200px;">
                                  <!-- <div class="card-body">
                                    <center>
                                      <h4 class="card-title">General Knowledge</h4>
                                      <a class="btn btn-primary" href="skill.php" role="button">Details</a>
                                    </center>

                                  </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




      </div>
    </section>
    <!-- Biddabd subject ends  -->


    <!-- Students-counting starts  -->
    <section id="engaging" class="engaging section-padding-bottom">
      <div class="container">
        <div class="title mb-5">
          <h2 class="text-center" style="font-size: 48px; line-height: 48px;">Millions Of Happy Students And Counting</h2>
        </div>
          <div class="students-counting">
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/Dr_Shahidullah.jpg" style="width:250px" class="img-fluid" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">Muhammad Shahidullah</h4>
                <p class="text-grey_charcoal_40 mt-3">“A country that does not respect virtue cannot produce virtue.”</p>
              </div>
            </div>
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/jafor Iqbal.jpg" class="img-fluid" style="width:250px" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">Muhammed Zafar Iqbal</h4>
                
                <p class="text-grey_charcoal_40 mt-3">“ The ultimate aim of the ego is not to see something, but to be something.” </p>
              </div>
            
            </div>
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/humayun_ahmed.jpg" class="img-fluid" style="width:250px" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">Humayun Ahmed</h4>
                <p class="text-grey_charcoal_40 mt-3">“People start neglecting when they get more love than they need. So there is no need to love anyone more than necessary.”</p>
              </div>
            </div>
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/Dr_kaykobad.jpg" style="width:250px" class="img-fluid" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">Mohammad Kaykobad</h4>
                <p class="text-grey_charcoal_40 mt-3">“A wrong concept misleads the understanding.”</p>
              </div>
            </div>
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/atiyur rahman.jpg" style="width:250px" class="img-fluid" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">Atiur Rahman</h4>
                <p class="text-grey_charcoal_40 mt-3">“It is possible to mobilise the fund for development of the infrastructure to accelerate economic growth to 8 percent from the present 6.5 percent, aiming to becoming a middle-income country by 2021.”</p>
              </div>
            </div>
            <div class="students-counting-content">
              <div class="student-img">
                <img src="assets/images/top_person/apj abul kalam.png" style="width:250px" class="img-fluid" alt="student img">
              </div>
              <div class="student-text">
                <h4 class="text-2xl">A. P. J. Abdul Kalam</h4>
                <p class="text-grey_charcoal_40 mt-3">“Dream is not that which you see while sleeping it is something that does not let you sleep.”</p>
              </div>
            </div>
            
            
          </div>
        </div>
    </section>
    <!-- Students-counting ends  -->


    <!-- Knowledge starts  -->
    <section id="education" class="education bg-white section-padding-bottom">
      <div class="container">
        <div class="row eduction-content">
          <div class="col-lg-6">
            <div class="education-img1">
              <img src="assets/images/kids.png" class="img-fluid" alt="education img"
                style="width: 450px;margin-top: 75px;">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="eduction-img2">
              <img src="assets/images/biddabd-education_for_all1.png" class="img-fluid" alt="handel device img">
              <div class="education-item">
                <div class="eduction-text mt-3 mb-4">
                  <span class="">3.4 Million+ children connected to education within a year.</span>
                </div>
                <div class="eduction-text mt-3 mb-4">
                  <span class="">On a mission to empower 10 Million+ children by 2025.</span>
                </div>
                <div class="eduction-text mt-3 mb-4">
                  <span class="">Making dreams come true with the power of education.</span>
                </div>
              </div>
              <a class="btn btn-danger" href="knowledge.php" role="button">Know more</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Knowledge ends  -->


    <!-- investors starts  -->
    <section id="engaging" class="engaging section-padding-top section-padding-bottom">
      <div class="container">
        <div class="title mb-5">
          <h2 class="text-center" style="font-size: 48px; line-height: 48px;">Our Investors</h2>
          <p class="text-center" style="font-size: 16px; line-height: 24px;">50+ Investors who have been strong partners
            in our growth story</p>
        </div>
        <div class="investors-item">
          <div class="investors-content bg-white text-center">
            <div class="investors-img">
              <img src="assets/images/logo/biddhabd-white-logo.jpg" class="img-fluid" alt="investors img" style="margin: 0 auto; height:50px ;">
              <img src="assets/images/double-quotes.svg" class="img-fluid" alt="investors img" style="margin: 0 auto">
            </div>
            <div class="investors-text">
              <p class="text-black text-center text-0.2xl pb-12">The Chan Zuckerberg initiative supports innovative models
                of learning wherever they are around the world. BIDDABD represents an opportunity to help even more
                students develop a love for learning and unlock their potential.</p>
              <h4 class="text-2xl">Md.Samsul Haque</h4>
            </div>
          </div>
          <div class="investors-content bg-white text-center">
            <div class="investors-img">
              <img src="assets/images/logo/biddabd global.jpg" class="img-fluid" alt="investors img" style="margin: 0 auto;height:50px ;">
              <img src="assets/images/double-quotes.svg" class="img-fluid" alt="investors img" style="margin: 0 auto">
            </div>
            <div class="investors-text">
              <p class="text-black text-center text-0.2xl pb-12">General Atlantic firmly believes in helping high quality
                companies achieve long-term success. We are confident that BIDDABD will redefine the learning landscape for
                students globally.</p>
              <h4 class="text-2xl">Md.Samsul Haque</h4>
            </div>
          </div>
          <div class="investors-content bg-white text-center">
            <div class="investors-img">
              <img src="assets/images/logo/bst.jpg" class="img-fluid" alt="investors img" style="margin: 0 auto">
              <img src="assets/images/double-quotes.svg" class="img-fluid" alt="investors img" style="margin: 0 auto">
            </div>
            <div class="investors-text">
              <p class="text-black text-center text-0.2xl pb-12">Our partnership with Byju and his impressive team in
                their mission to help children in India and around the world achieve their true potential. We look forward
                to forging new partnerships and continue to cultivate a comprehensive ecosystem of innovative educational
                offerings.</p>
              <h4 class="text-2xl">Md.Samsul Haque</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- investors ends  -->


    <!-- News starts  -->
    <section id="byjus-news" class="byjus-news section-padding-bottom">
      <div class="container">
        <div class="title mt-5 mb-5">
          <h2 class="text-center text-white" style="font-size: 48px;line-height: 42px;">BIDDABD in the news</h2>
        </div>
        <div class="byjus-item">
          <div class="trust-content byjus-news-content">
            <a href="https://www.youtube.com/watch?v=W3upVOLfZvQ&ab_channel=UnitedInternationalUniversity">
              <div class="row play-learning-item">
                <div class="col-lg-6">
                  <div class="byjus-news-right ml-5 mt-3">
                    <img src="assets/images/image33 (2).jpg"  class="img-fluid" alt="trust img">
                  </div>
                </div>
                <div class="col-lg-6  ">
                  <div class="byjus-news-left ml-3">
                    <!-- <img src="assets/images/cnn.png" alt="cnn img"> -->
                    <h3 class="mt-2 " style="font-size: 31px; line-height: 46px; ">BIDDABD enters Bangladesh with a $1
                      Billion investment over next 3 years</h3>
                    <p>BIDDABD Co-Founder Md. Mijanur Morshed Niloy speaks with Md.Samsul Haque about the company’s planned $ 1 Bn
                      investment in Bangladesh.</p>
                  </div>
                  <span title="Download using YouTube Downloader by Addoncrop"> </span>
                </div>
              </div>
            </a>
          </div>
          <div class="trust-content byjus-news-content">
            <a href="https://www.youtube.com/watch?v=QjZVnIaNfBc">
              <div class="row play-learning-item">
                <div class="col-lg-6">
                  <div class="byjus-news-right ml-5 mt-3">
                    <img src="assets/images/image44.png" class="img-fluid" alt="trust img">
                  </div>
                </div>
                <div class="col-lg-6  ">
                  <div class="byjus-news-left ml-3">
                    <img src="assets/images/cnn.png" alt="cnn img">
                    <h3 class="mt-2 " style="font-size: 31px; line-height: 46px; ">BIDDABD Founder Byju Raveendran on his
                      roots and the company’s financial plans</h3>
                    <p>BIDDABD Founder Byju Raveendran speaks with Julia Chatterly about his start in Tech & the company’s
                      path to profitability.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="trust-content byjus-news-content">
            <a href="https://www.youtube.com/watch?v=QjZVnIaNfBc">
              <div class="row play-learning-item">
                <div class="col-lg-6">
                  <div class="byjus-news-right ml-5 mt-3">
                    <img src="assets/images/image11.png" class="img-fluid" alt="trust img">
                  </div>
                </div>
                <div class="col-lg-6  ">
                  <div class="byjus-news-left ml-3">
                    <img src="assets/images/bloomberg.png" alt="cnn img">
                    <h3 class="mt-2 " style="font-size: 31px; line-height: 46px; ">BIDDABD Gokulnath on “Education For
                      All”, Growth Plans</h3>
                    <p>BIDDABD Co-Founder Divya Gokulnath discloses the company’s flagship social initiative “Education For
                      All”, which has impacted 3.4 million children in one year of its launch.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="trust-content byjus-news-content">
            <a href="https://www.youtube.com/watch?v=QjZVnIaNfBc">
              <div class="row play-learning-item">
                <div class="col-lg-6">
                  <div class="byjus-news-right ml-5 mt-3">
                    <img src="assets/images/image22.png" class="img-fluid" alt="trust img">
                  </div>
                </div>
                <div class="col-lg-6  ">
                  <div class="byjus-news-left ml-3">
                    <img src="assets/images/bloomberg.png" alt="cnn img">
                    <h3 class="mt-2 " style="font-size: 31px; line-height: 46px; ">BIDDABD Buys Coding Site Tynker for $200
                      Million</h3>
                    <p>BIDDABD Co-Founder Divya Gokulnath speaks with Emily Chang about the online education giant’s recent
                      acquisition and expansion into the U.S. market.</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div> <!-- byjus-item ends  -->
      </div>
      </div>
    </section>
    <!-- News ends  -->

    <!-- brands Starts  -->
    <section id="brands" class="brands">
      <div class="containter">
        <div class="brand-logo">
          <img src="assets/images/logo/main_logo_biddabd.jpg" style="height: 80px;" class="img-fluid" alt="logo_b">
        </div>
        <div class="title mt-5 mb-5">
          <h2 class="text-center text-white" style="font-size: 48px;line-height: 42px;">BIDDABD in the news</h2>
        </div>
        <div class="brand-item">
          <div class="brand-img">
            <img src="assets/images/biddabd-osmo.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-english1.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-animation5.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-epic.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-live13.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-math4.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-music3.png" class="img-fluid" alt="brand-img">
          </div>
          <div class="brand-img">
            <img src="assets/images/biddabd-tynker1.png" class="img-fluid" alt="brand-img">
          </div>
        </div>
      </div>
    </section>
    <!-- brands ends  -->


    <!-- footer starts  -->
    <?php include ("footer.php"); ?>
    <!-- footer ends  -->


    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap Dropdown Hover JS -->
    <!-- <script src="assets/js/bootstrap-dropdownhover.js"></script>
    <script src="assets/js/bootstrap-dropdownhover.min.js"></script> -->
    <script src="assets/js/bootstrap5.0.2.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js">javascript</script>
    <!-- jquery waypoints JS -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- jquery counterup js  -->
    <script src="assets/js/jquery.counterup.min.js"></script> 
    <script src="assets/js/main.js"></script>
    
  </body>

</html>