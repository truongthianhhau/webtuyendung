<?php
include_once('view/header.php');

$query_viewProfile = "select * from profile where id=1";
$result = $conn->query($query_viewProfile);
$row = $result->fetch_assoc();
?>

<!-- HOME -->
<section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="text-white font-weight-bold">Profile</h1>
        <div class="custom-breadcrumbs">
          <a href="index.php">Home</a> <span class="mx-2 slash">/</span>
          <span class="text-white"><strong>Profile</strong></span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="vh-80" style="background-color: #f4f5f7;">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col col-lg-15 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">

            <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?php echo $row['img']; ?>" alt="Avatar" class="img-fluid my-4" />
              <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Full Name</h6>
                    <input value="<?php echo $row['Fullname']; ?>" />
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Birthday</h6>
                    <input value="<?php echo $row['birthday']; ?>" />
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $row['Email']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <input value="<?php echo $row['Tell']; ?>" />
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Address</h6>
                    <input value="<?php echo $row['address']; ?>" />
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Gender</h6>
                    <input value="<?php echo $row['Gender'] = "1" ? "Male" : "FeMale"; ?>" />
                  </div>

                </div>
                <div style="margin:50px 170px;">
                  <a href="index.php"><input style="padding: 5px 30px;" value="Back" type="button" name="fileToUpload" id="fileToUpload"></a>
                  <input style="margin-left: 50px;padding: 5px 20px;" type="submit" value="Update" name="fileToUpload" id="fileToUpload">
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include_once('view/footer.php'); ?>