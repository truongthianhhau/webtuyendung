
<?php
include_once('view/header.php'); ?>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold">Post A Job</h1>
            <div class="custom-breadcrumbs">
              <a href="#">Home</a> <span class="mx-2 slash">/</span>
              <a href="#">Job</a> <span class="mx-2 slash">/</span>
              <span class="text-white"><strong>Post a Job</strong></span>
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
              <div>
                <h2>Post A Job</h2>
		
              </div>
            </div>
          </div>
        
        </div>

        <div class="row mb-5">
          <div class="col-lg-12">
            <!-- Form -->
            <form class="p-4 p-md-5 border rounded" method="post" action="./upload_file.php" enctype="multipart/form-data">
              <h3 class="text-black mb-5 border-bottom pb-2">Job Details</h3>
              <div class="form-group">
                  <label for="company-website-tw d-block">Upload Featured Image</label> <br>
                  <label class="btn btn-primary btn-file">
                      Browse File<input type="file" name="post_job_logo" id="post_job_logo" onchange="displayFileName()">
                  </label>
                  <span id="selectedFileName"></span>
              </div>

              <script>
                  function displayFileName() {
                      // Lấy input file
                      var input = document.getElementById('post_job_logo');
                      
                      // Lấy tên file
                      var fileName = input.value.split('\\').pop(); // Cắt đường dẫn và lấy tên file cuối cùng

                      // Hiển thị tên file bên cạnh
                      document.getElementById('selectedFileName').innerHTML = fileName;
                  }
              </script>


              <!-- Input Email -->
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" required class="form-control" id="email" name="post_job_mail" placeholder="you@yourdomain.com">
              </div>

              <!-- Input Title -->
              <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" required class="form-control" id="job-title" name="post_job_title" placeholder="Product Designer">
              </div>

              <!-- Input location -->
              <div class="form-group">
                <label for="job-location">Location</label>
                <input type="text" required class="form-control" id="job-location" name="post_job_location" placeholder="e.g. New York">
              </div>

              <!-- Input Gender -->
              <div class="form-group">
                <label for="job-type">Gender</label>
                <select required class="selectpicker border rounded" id="job-gender" name="post_job_gender" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>

              <!-- Input region -->
              <div class="form-group">
                <label for="job-region">Job Region</label>
                
                <select class="selectpicker border rounded" id="job-region" name="post_job_region" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                      <option>Anywhere</option>
                      <option>San Francisco</option>
                      <option>Palo Alto</option>
                      <option>New York</option>
                      <option>Manhattan</option>
                      <option>Ontario</option>
                      <option>Toronto</option>
                      <option>Kansas</option>
                      <option>Mountain View</option>
                </select>
              </div>

              <!-- Input type -->
              <div class="form-group">
                <label for="job-type">Job Type</label>
                <select class="selectpicker border rounded" id="job-type" name="post_job_type" data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                  <option>Part Time</option>
                  <option>Full Time</option>
                </select>
              </div>
              
              <div class="form-group">
                <label for="job-title">Job Description</label>
                <!-- <texte type="text" required class="form-control" id="job-title" name="post_job_desc" placeholder="Product Designer"> -->
                <textarea type="text" required class="form-control" id="job-title" name="post_job_desc" placeholder="Product Designer" rows="4" cols="50"></textarea>
              </div>

              <!-- Input education -->
              <div class="form-group">
                <label for="job-other-benifits">Benefits</label>
                <input type="text" class="form-control" id="job-other-benifits" name="post_job_other_benifits" placeholder="Benifits">
              </div>

              <!-- Input education -->
              <div class="form-group">
                <label for="job-education">Education</label>
                <input type="text" class="form-control" id="job-education" name="post_job_education" placeholder="Education">
              </div>

              <!-- Input publishedon -->
              <div class="form-group">
                <label for="job-publishedon">Publishedon</label>
                <input type="date" class="form-control" id="post-job-publishedon" name="post_job_publishedon">
              </div>

              <!-- Input responsibilities -->
              <div class="form-group">
                <label for="job-responsibilities">Responsibilities</label>
                <input type="text" class="form-control" id="job-responsibilities" name="post_job_responsibilities" placeholder="Responsibilities">
              </div>

              <!-- Input experience -->
              <div class="form-group">
                <label for="job-experience">Experience</label>
                <input type="text" class="form-control" id="job-experience" name="post_job_experience" placeholder="Experience">
              </div>

              <!-- Input salary -->
              <div class="form-group">
                <label for="job-salary">Salary</label>
                <input type="number" class="form-control" id="job-salary" name="post_job_salary" placeholder="Salary">
              </div>

              <!-- Input application_deadline -->
              <div class="form-group">
                <label for="job-application-deadline">Application Deadline</label>
                <input type="date" class="form-control" id="job-application-deadline" name="post_job_application_deadline">
              </div>

              <!-- Input company name -->
              <div class="form-group">
                <label for="company-name">Company Name</label>
                <input type="text" class="form-control" id="company-name" name="post_company_name" placeholder="e.g. New York">
              </div>
              <div class="form-group">
                  <label for="company-website-tw d-block">Upload Logo</label> <br>
                  <label class="btn btn-primary btn-md btn-file">
                      Browse File<input type="file" name="post_company_file" id="post_company_file" onchange="displayFileNameCom()">
                  </label>
                  <span id="selectedCompanyName"></span>
              </div>

              <script>
                  function displayFileNameCom() {
                      // Lấy input file
                      var input = document.getElementById('post_company_file');
                      
                      // Lấy tên file
                      var fileName = input.value.split('\\').pop(); // Cắt đường dẫn và lấy tên file cuối cùng

                      // Hiển thị tên file bên cạnh
                      document.getElementById('selectedCompanyName').innerHTML = fileName;
                  }
              </script>

              <!-- Button save job -->
              <div class="row align-items-center mb-5">
                <div class="col-lg-4 ml-auto">
                  <div class="row">
                    <div class="col-6">
                      <a href="#" class="btn btn-block btn-light btn-md"><span class="icon-open_in_new mr-2"></span>Preview</a>
                    </div>
                    <div class="col-6">
                      <!-- <a href="#" class="btn btn-block btn-primary btn-md">Save Job</a> -->
                      <input type="submit" value="Save Job" name="post_job" class="btn btn-block btn-primary btn-md">
                    </div>
                  </div>
                </div>
              </div>

            </form>
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