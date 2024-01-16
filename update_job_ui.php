
<?php
include_once('view/header.php'); ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Update Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      if(isset($_GET['jobid']))
      {
        $id = $_GET['jobid'];
        $update_job = "SELECT * FROM job WHERE jobid = '$id'";
        $run = $conn->query($update_job);
        $row = $run->fetch_assoc();
      }
    ?>

	
    <section class="site-section">
      <div class="container">

        <div class="row align-items-center mb-5" style="width: 100% !important;">
          
            <div class="d-flex align-items-center" style="width: 100%;">
              <div style="width: 100%;">
              <form class="p-4 p-md-5 border rounded" method="post" action="<?php echo "./update_job.php?jobid=".$_GET['jobid']?>" enctype="multipart/form-data">
							<h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>	  

							<!-- Input Title -->
							<div class="form-group">
							<label for="job-title">Job Title</label>
							<input type="text" value='<?php echo $row['JobTitle'];?>' required class="form-control" id="job-title" name="post_job_title" placeholder="Product Designer">
							</div>
			
							<!-- Input location -->
							<div class="form-group">
							<label for="job-location">Location</label>
							<input type="text" value='<?php echo $row['location'];?>' required class="form-control" id="job-location" name="post_job_location" placeholder="e.g. New York">
							</div>
			

							
							<div class="form-group">
							<label for="job-title">Job Description</label>
							<!-- <texte type="text" required class="form-control" id="job-title" name="post_job_desc" placeholder="Product Designer"> -->
							<textarea required class="form-control" id="job-title" name="post_job_desc" placeholder="Product Designer" rows="4" cols="50"><?php echo $row['job_description'];?></textarea>

							</div>

							<!-- Input experience -->
							<div class="form-group">
							<label for="job-experience">Experience</label>
							<input type="text" value='<?php echo $row['experience'];?>' class="form-control" id="job-experience" name="post_job_experience" placeholder="Experience">
							</div>
			
							<!-- Input salary -->
							<div class="form-group">
							<label for="job-salary">Salary</label>
							<input type="number" value='<?php echo $row['salary'];?>' class="form-control" id="job-salary" name="post_job_salary" placeholder="Salary">
							</div>
			
							<!-- Button save job -->
							<div class="row align-items-center mb-5">
							<div class="col-lg-4 ml-auto">
								<div class="row">
								<div class="col-6">
									<!-- <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a> -->
									<input type="submit" value="Save Job" name="update_job" class="btn btn-block btn-primary btn-md">
								</div>
								</div>
							</div>
							</div>
		
						</form>
		
              </div>
            </div>
          
        
        </div>

        
      </div>
    </section>

    
    
    <?php include_once('view/footer.php'); ?>
  
  </div>

    <!-- SCRIPTS -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/quill.min.js"></script>
    
    
    <!-- <script src="js/bootstrap-select.min.js"></script> -->
    
    <script src="js/custom.js"></script> 
    <!-- <script src="js/fileinput.js"></script>
  </body>
</html>