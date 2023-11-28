<?php
include_once('view/header.php');

$query_viewProfile = "select * from profile p inner join users u on p.email=u.email where u.Email='" . $_SESSION['email'] . "'";
$result = $conn->query($query_viewProfile);
$row = $result->fetch_assoc();

/* UPDATE PROFILE */
if (isset($_POST['updateForm'])) {
  if (!empty($_POST['Pass'])) {
    $fileToUpload = !empty($_POST['fileToUpload']) ? 'images/' . $_POST['fileToUpload'] : $_POST['img'];
    $Gender = $_POST['Gender'];

    $query_updateProfile = $conn->prepare("UPDATE profile p, users u SET p.Fullname= ?, p.Tell=?, p.img=?, p.address=?, p.birthday=?, p.Gender=?, u.password=? WHERE p.Email=?");

    $query_updateProfile->bind_param("sssssiss", $_POST['fullName'], $_POST['Phone'], $fileToUpload, $_POST['Address'], $_POST['Birthday'], $Gender, $_POST['Pass'], $_SESSION['email']);

    if ($query_updateProfile->execute()) {
      echo '<script>alert("Update Successfully");</script>';
    } else {
      echo '<script>alert("Problem in Update New Record");</script>';
    }
    $query_updateProfile->close();
    echo '<script>top.window.location="view-profile.php";</script>';
  }else{
    echo '<script>alert("Update failed\nPlease enter a password!");</script>';
    $row['password']=$_POST['Pass'];
  }
}
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

<form method="post">
  <section class="vh-80" style="background-color: #f4f5f7;">
    <div class="container py-5 h-80">
      <div class="row d-flex justify-content-center align-items-center h-80">
        <div class="col col-lg-15 mb-4 mb-lg-0">
          <div class="card mb-3" style="border-radius: .5rem;">
            <div class="row g-0">

              <div class="col-md-4 gradient-custom text-center text-black" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="<?php echo $row['img']; ?>" alt="Avatar" class="img-fluid my-4" />
                <input type="hidden" name="img" value="<?php echo $row['img']; ?>">
                <input type="file" name="fileToUpload" id="fileToUpload">
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                  <h5>Email: <?php echo $row['Email']; ?></h5>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Full Name</h6>
                      <input value="<?php echo $row['Fullname']; ?>" name="fullName" />
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Birthday</h6>
                      <input type="date" value="<?php echo $row['birthday']; ?>" name="Birthday" />
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Password</h6>
                      <input value="<?php echo $row['password']; ?>" name="Pass" />
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Phone</h6>
                      <input value="<?php echo $row['Tell']; ?>" name="Phone" />
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Address</h6>
                      <input value="<?php echo $row['address']; ?>" name="Address" />
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Gender</h6>
                      <input type="radio" name="Gender" value="1" <?php if ($row['Gender'] == "1") echo 'checked="checked"'; ?>> Male
                      <input style="margin-left: 10px;" type="radio" name="Gender" value="2" <?php if ($row['Gender'] == "2") echo 'checked="checked"'; ?>> Fenale
                      <input style="margin-left: 10px;" type="radio" name="Gender" value="3" <?php if ($row['Gender'] == "3") echo 'checked="checked"'; ?>> Other
                    </div>

                  </div>
                  <div style="margin:50px 170px;">
                    <a href="index.php"><input style="padding: 5px 30px;" value="Back" type="button" name="fileToUpload" id="fileToUpload"></a>
                    <input style="margin-left: 50px;padding: 5px 20px;" type="submit" name="updateForm" id="updateForm">
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>

<?php
include_once('view/footer.php'); ?>