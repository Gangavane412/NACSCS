<?php include_once('header.php'); ?>

  <div class="main-content">
      <style>
        /* .container{
          background:#9B0008;
        } */
          .img-fullwidth{
              height:250px !important;
              
              margin:2px;
             
          }



       
  #sec {
    background: url('https://i.pinimg.com/originals/98/3b/63/983b63592a42295d638b4b3120df9cc8.gif') no-repeat center center fixed; /* Set the GIF as background */
    background-size: cover; /* Make sure the GIF covers the whole background */
   
  }

  .overlay-shade {
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a transparent overlay for better readability */
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
  }


  #about {
    background: url('https://i.pinimg.com/originals/98/3b/63/983b63592a42295d638b4b3120df9cc8.gif') no-repeat center center fixed; /* Set the GIF as background */
    background-size: cover; /* Make sure the GIF covers the whole background */
   
  }

  .overlay-shade {
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a transparent overlay for better readability */
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
  }


  #course{
    background: url('https://i.pinimg.com/originals/98/3b/63/983b63592a42295d638b4b3120df9cc8.gif') no-repeat center center fixed; /* Set the GIF as background */
    background-size: cover; /* Make sure the GIF covers the whole background */
   
  }

  .overlay-shade {
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a transparent overlay for better readability */
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
  }

  #gallery {
    background: url('https://i.pinimg.com/originals/98/3b/63/983b63592a42295d638b4b3120df9cc8.gif') no-repeat center center fixed; /* Set the GIF as background */
    background-size: cover; /* Make sure the GIF covers the whole background */
   
  }

  .overlay-shade {
    background-color: rgba(0, 0, 0, 0.5); /* Optional: Add a transparent overlay for better readability */
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
  }

 


         

      </style>


<style>
  .image-container {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .image-container img {
    display: block;
    border-radius: 10px;
  }

  .moving-border {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid transparent;
    border-radius: 10px;
    box-sizing: border-box;
    animation: move-border 3s linear infinite;
   
    background-size: 400% 400%;
  }

  @keyframes move-border {
    0% {
      background-position: 0% 50%;
    }
    100% {
      background-position: 100% 50%;
    }
  }

  .thumb:hover .moving-border {
    background: linear-gradient(45deg, #ff0055, #ffcc00, #33cc33, #3399ff, #ff0055);
  }

  .thumb .overlay-shade {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .thumb:hover .overlay-shade {
    opacity: 1;
  }

  .icons-holder-inner {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .thumb:hover .icons-holder-inner {
    opacity: 1;
  }

  .text-holder {
    position: absolute;
    bottom: 10px;
    left: 0;
    right: 0;
    text-align: center;
    color: white;
    font-weight: bold;
  }
</style>
<?php include_once('slider.php'); ?>
    <!-- <section class="bg-silver-light" id="sec">
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto bg-theme-colored">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-user text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">24 Hours Service</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto bg-theme-colored-darker2">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-comments-o text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Online Help</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto bg-theme-colored-darker3">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-list-alt text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Student Result</a></h4>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto bg-theme-colored-darker4">
                <div class="text-center pt-30 pb-30">
                  <i class="fa fa-mobile text-white font-64"></i>
                  <h4 class="text-uppercase mt-20"><a href="#" class="text-white">Call  +91 02427-297099</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <section id="about">
  <div class="container pb-70">
    <div class="section-content">
      <div class="row">
        <!-- Vision Section -->
        <div class="col-md-6 col-sm-12 pl-20 pr-20 pt-20 wow fadeInLeft achivementscls1" data-wow-duration="1s" data-wow-delay="0.3s">
          <h2 class="text-uppercase mt-5 text-center">NACSCS <span class="text-theme-color-2"> Vision </span></h2>
          <div class="row mt-40">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
              <div class="mb-sm-30"> 
                <p ><i class="fa fa-star" style="color:#cf1b36;"></i>&nbsp;  New Arts, Commerce & Science College, Shevgaon
                had a splendid Vision of Providing education & ample opportunity to the children and youth of India to Excel Globally in Different Profession.
                </p> <br>
                <p ><i class="fa fa-star" style="color:#cf1b36;"></i>&nbsp; A premier institute as a dynamic entity contributing in Human Resource department & solution provider to Industry and Society.     
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- Mission Section -->
        <div class="col-md-6 col-sm-12 pl-20 pr-20 pt-20 wow fadeInRight achivementscls1" data-wow-duration="1s" data-wow-delay="0.3s">
          <h2 class="text-uppercase mt-0 text-center">NACSCS <span class="text-theme-color-2"> Mission </span></h2>
          <div class="row mt-40">
            <div class="col-md-12 wow fadeInUp" data-wow-duration="1s">
              <div class="mb-sm-30"> 
                <p><i class="fa fa-star" style="color:#cf1b36;"></i>&nbsp;A provide students with the fundamental knowledge, problem solving skills, business awareness & confidence required to leaders in the Global environment.</p> 
                <p><i class="fa fa-star" style="color:#cf1b36;"></i>&nbsp;To provide an environment that enables students and faculty to make lasting contributions to the advancement of knowledge and the creative practice of engineering.</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Section: Mission -->
    <section id="mission">
      <div class="container-fluid pt-0 pb-0">
        <div class="row equal-height">
          <div class="col-sm-8 col-md-8 xs-pull-none bg-theme-colored wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="pt-20 pb-10 pl-50 pr-50 p-md-10">
              <h2 class="title text-center text-white text-uppercase line-bottom mt-0 mb-0">About Us</h2>
              <div class="icon-box clearfix m-0 p-0 pb-10">
                <div class=" ml-sm-0">
                    <h3 class="abouttxtcolor">Principal Message</h3>
                    <!--h4 class="abouttxtcolor">IMPORTANCE OF PARAMEDICAL PROFESSION</h4--> 
                    <div class="profilecls">
                        <img src="image\princeple-image.jpg" width="100%" style="border-radius:50%">
                    </div>
                    <p class="text-white">  Dear Aspirant students,<br>

                    Dr. Purushottam Kunde  <br> <br>
                    Our vision is based on hard work, open communication, a strong emphasis on team work and a high level of responsibility. This visionary culture allows and emphasises our wards not only to adopt the present day challenges but also individual responsibilities to the society and our nation at large. Learning should be based on doing things and not merely knowing things. Until and unless learning solutions relate to real life and motivate the learner to acquire and apply the knowledge, the whole process will remain superficial. Any institution worth its name looks to optimize the productivity of global leaders. Our institution has set specific objectives and planned activities for achieving excellence in all spheres of technical education. The service of the institution in creating personally mature, professionally equipped and service-oriented graduates is really worth mentioning. We strongly believe in academic excellence and do not compromise on teaching standards or discipline. These three things are the springboards on which we operate.
                    The team at the helm of affairs here firmly believes that “Quality” is the only magic word essential for our survival and growth in today’s cut throat competitive scenario. At the same time we also believe that “Quest for Quality” is never ending process. Whatever shortcomings we may have today, we are at work collectively to ensure incredible value additions amongst our students during their four years stay with us. At the same time we also confidently ensure that the alumni of our college will always feel proud of their choice of institution in the future life. <br> <br>
                    My best wishes to the students and the guardians who have shown faith in us. <br>
                    Dr. Suresh Patilba Belhekar <br>
                    New Arts, Commerce & Science College, Shevgaon <br>
                    Principal

</p>
                  </div>
              </div>
              	
            </div>
          </div>
          <!--div class="col-sm-4 col-md-4 p-0 bg-img-cover wow fadeInRight hidden-xs" data-bg-img="images/portfolio/s1.jpg" data-wow-duration="1s" data-wow-delay="0.3s">
          </div-->
          <div class="col-sm-4 col-md-4 p-0 bg-img-cover wow fadeInRight hidden-xs">
            <img src="image\gallery-images\image2.jpg" width="100%">
            <img src="image\gallery-images\image4.jpg" width="100%">
          </div>
        </div>
      </div>
    </section>

    <!-- Section: courses -->
    <section id="course">
      <div class="container pt-70 pb-40">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333">Our <span class="text-theme-color-2"> Courses</span></h2>
              <h6 style="color:gray">New Arts, Commerce & Science College, Shevgaon</h6>
            </div>
          </div>
        </div>
         
      <h3 class="mt-0 line-height-1 text-center text-uppercase mb-10 text-black-333"><span class="text-theme-color-2"></span></h3>
        <div class="row multi-row-clearfix">
          <div class="col-md-12">
            <div class="owl-carousel-3col owl-nav-top" data-dots="true">
        	 
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="images/gallery/engg.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                     
                    </div>

                  </div>
                  <h2 >Diploma</h2> 
                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                    <h2>ENGINEERING</h2> 
                  </div> -->
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="image\gallery-images\image1.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                    </div>
                  </div>
                  <h2>POLYTECHNIC</h2> 

                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                    <h2>POLYTECHNIC</h2> 
                  </div> -->
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="image\gallery-images\image2.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                    </div>
                  </div>
                  <h2>PHARMACY</h2> 
                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                    <h2>PHARMACY</h2> 
                  </div> -->
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="image\gallery-images\image4.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                    </div>
                  </div>
                  <h2>BAMS</h2>
                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                     <h2>BCS</h2> 
                    </div> -->
                </div>
              </div>
               
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="image\gallery-images\image2.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                    </div>
                  </div>
                  <h2>ITI</h2> 
                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                    <h2>ITI</h2> 
                  </div> -->
                </div>
              </div>
              <div class="item">
                <div class="project mb-30 border-2px">
                  <div class="thumb">
                    <img class="img-fullwidth" alt="" src="image\gallery-images\image3.jpg">
                    <div class="hover-link hidden">
                      <a class="btn btn-flat btn-dark btn-theme-colored btn-md pull-left font-20" href="#"><span>New Arts, Commerce & Science College, Shevgaon</span> </a>
                    </div>
                  </div>
                  <h2>SCHOOL</h2>
                  <!-- <div class="project-details p-15 pt-10 pb-10">
                     <h4 class="font-weight-700 text-uppercase mt-0"><a href="page-courses-accounting-technologies.html"><?php echo $row1['shortname']; ?></a></h4>
                    <h2>SCHOOL</h2>  
                  </div> -->
                </div>
              </div> 
             </div>
          </div>
        </div>
         
      </div>
    </section>



   <section id="gallery">
  <div class="container pt-70 pb-70">
    <div class="section-title text-center">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="mt-0 line-height-1 text-center mb-10 text-black-333 text-uppercase"> 
            <span class="text-theme-color-2">Gallery</span>
          </h2>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-md-12">
          <!-- Portfolio Gallery Grid -->
          <div class="gallery-isotope grid-4 gutter-small clearfix" data-lightbox="gallery">
            <!-- Portfolio Item Start -->
            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\college-logo.jpg" alt="project" style="width: 300px; height: 200px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">College Gate</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\college-logo.jpg" data-lightbox-gallery="gallery" title="College Gate">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional Gallery Items (Repeat for each image) -->
            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image3.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image3.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->
            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image5.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image5.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image5.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image5.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image4.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image4.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image3.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image3.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image2.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image2.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            <div class="gallery-item">
              <div class="thumb">
                <div class="image-container">
                  <img class="img-fullwidth" src="image\gallery-images\image1.jpg" alt="project" style="width: 250px; height: 180px;">
                  <div class="overlay-shade"></div>
                  <div class="moving-border"></div>
                  <div class="text-holder">
                    <div class="title text-center">Computer Lab</div>
                  </div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a href="image\gallery-images\image1.jpg" data-lightbox-gallery="gallery" title="Computer Lab">
                          <i class="fa fa-picture-o"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Additional images here -->

            

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
    <section class="clients bg-theme-colored">
      <div class="container pt-10 pb-10 pb-sm-0 pt-sm-0">
        <div class="row">
          <div class="col-md-12">
              <div class="owl-carousel-6col transparent text-center owl-nav-top placementscls">
              </div>
              

              </div>
            

              </div>
           </div>
        </div>
      </div>
    </section>      
  </div>
  <!-- end main-content -->
<?php include_once('footer.php'); ?>