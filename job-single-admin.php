<?php
    include_once ('view/header.php');
  
    $query_jobSingle = "select * from job where jobid=".$_GET['jobid'];
    $result = $conn->query($query_jobSingle);
    $row = $result -> fetch_assoc();

     ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"><?php echo $row['JobTitle'];?></h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong><?php echo $row['JobTitle'];?></strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center mb-5">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <div class="d-flex align-items-center">
              <div class="border p-2 d-inline-block mr-3 rounded">
                <img src=<?php echo "'".$row['UploadLogo']."'";?> alt="Image">
              </div>
              <div>
                <h2><?php echo $row['JobTitle'];?></h2>
                <div>
                  <span class="ml-0 mr-2 mb-2"><span class="icon-briefcase mr-2"></span><?php echo $row['CompanyName'];?></span>
                  <span class="m-2"><span class="icon-room mr-2"></span><?php echo $row['JobRegion'];?></span>
                  <span class="m-2"><span class="icon-clock-o mr-2"></span><span class="text-primary"><?php echo $row['JobType'];?></span></span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
            <div class="col-6">
                <a href="<?php echo "./delete_job.php?delete=true&jobid=".$_GET['jobid']?>" class="btn btn-block btn-primary btn-md">Delete</a>
              </div>

              <div class="col-6">
                <a href="<?php echo "./update_job_ui.php?jobid=".$_GET['jobid']?>" class="btn btn-block btn-primary btn-md">Edit</a>
              </div>
              <!-- <div class="col-6">
                <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-heart-o mr-2 text-danger"></span>Save Job</a>
              </div>
              <div class="col-6">
                <a href="mailto:<?php echo $row['email']; ?>?subject=Apply Job <?php echo $row['JobTitle']; ?>" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="mb-5">
              <figure class="mb-5"><img src="<?php echo $row['UploadFeaturedImage']; ?>" alt="Image" class="img-fluid rounded"></figure>
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-align-left mr-3"></span>Job Description</h3>
              <?php  $tmp_arr = explode ("\n", $row['job_description']);
              foreach( $tmp_arr as $lang ) {
                echo "<p>$lang</p>";}
              ?> 
            </div>
            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-rocket mr-3"></span>Responsibilities</h3>
              <ul class="list-unstyled m-0 p-0">
              <?php  $tmp_arr = explode ("\n", $row['Responsibilities']);
              foreach( $tmp_arr as $lang ) {?>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo "$lang";?></span></li>
                <?php } ?>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-book mr-3"></span>Education + Experience</h3>
              <ul class="list-unstyled m-0 p-0">
              <?php  $tmp_arr = explode ("\n", $row['education']);
              foreach( $tmp_arr as $lang ) {?>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo "$lang";?></span></li>
                <?php } ?>
              </ul>
            </div>

            <div class="mb-5">
              <h3 class="h5 d-flex align-items-center mb-4 text-primary"><span class="icon-turned_in mr-3"></span>Other Benifits</h3>
              <ul class="list-unstyled m-0 p-0">
              <?php  $tmp_arr = explode ("\n", $row['other_benifits']);
              foreach( $tmp_arr as $lang ) {?>
                <li class="d-flex align-items-start mb-2"><span class="icon-check_circle mr-2 text-muted"></span><span><?php echo "$lang";?></span></li>
                <?php } ?>
              </ul>
            </div>

            <div class="row mb-5">
            <div class="col-6">
                <a href="mailto:<?php echo $row['email']; ?>?subject=Apply Job <?php echo $row['JobTitle']; ?>" class="btn btn-block btn-primary btn-md">Apply Now</a>
              </div>
              <div class="col-6">
                <a href="approve.php?jobid=<?php echo $row['jobid'];?>" class="btn btn-block btn-primary btn-md">Approve</a>
              </div>
            </div>

          </div>
          <div class="col-lg-4">
            <div class="bg-light p-3 border rounded mb-4">
              <h3 class="text-primary  mt-3 h5 pl-3 mb-3 ">Job Summary</h3>
              <ul class="list-unstyled pl-3 mb-0">
                <li class="mb-2"><strong class="text-black">Published on:</strong> <?php echo $row['publishedon']; ?></li>
                <li class="mb-2"><strong class="text-black">Employment Status:</strong> <?php echo $row['publishedon']; ?>Full-time</li>
                <li class="mb-2"><strong class="text-black">Experience:</strong> <?php echo $row['experience']; ?></li>
                <li class="mb-2"><strong class="text-black">Job Location:</strong> <?php echo $row['location']; ?></li>
                <li class="mb-2"><strong class="text-black">Salary:</strong> <?php echo "$".$row['salary']."k"; ?></li>
                <li class="mb-2"><strong class="text-black">Gender:</strong> <?php echo $row['publishedon']; ?>Any</li>
                <li class="mb-2"><strong class="text-black">Application Deadline:</strong> <?php echo $row['application_deadline']; ?></li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="site-section" id="next">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Related Jobs</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">

        <?php include './search.php';?>
    
        </ul>

        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 22,392 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    

    <section class="bg-light pt-5 testimony-full">
        
        <div class="owl-carousel single-carousel">

        
          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Corey Woods, @Dribbble</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent_2.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 align-self-center text-center text-lg-left">
                <blockquote>
                  <p>&ldquo;Soluta quasi cum delectus eum facilis recusandae nesciunt molestias accusantium libero dolores repellat id in dolorem laborum ad modi qui at quas dolorum voluptatem voluptatum repudiandae.&rdquo;</p>
                  <p><cite> &mdash; Chris Peters, @Google</cite></p>
                </blockquote>
              </div>
              <div class="col-lg-6 align-self-end text-center text-lg-right">
                <img src="images/person_transparent.png" alt="Image" class="img-fluid mb-0">
              </div>
            </div>
          </div>

      </div>

    </section>

    <section class="pt-5 bg-image overlay-primary fixed overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-md-6 align-self-center text-center text-md-left mb-5 mb-md-0">
            <h2 class="text-white">Get The Mobile Apps</h2>
            <p class="mb-5 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit tempora adipisci impedit.</p>
            <p class="mb-0">
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-apple mr-3"></span>App Store</a>
              <a href="#" class="btn btn-dark btn-md px-4 border-width-2"><span class="icon-android mr-3"></span>Play Store</a>
            </p>
          </div>
          <div class="col-md-6 ml-auto align-self-end">
            <img src="images/apps.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <?php
    include_once('view/footer.php'); ?>