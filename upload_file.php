
<?php 
    require_once './connect.php';

if(isset($_POST['post_job'])){
    $email = $_POST['post_job_mail'];
    $title = $_POST['post_job_title'];
    $location = $_POST['post_job_location'];
    $region = $_POST['post_job_region'];
    $type = $_POST['post_job_type'];
    $job_desc = $_POST['post_job_desc'];
    $post_company_name = $_POST['post_company_name'];
    // $post_company_file = $_POST['post_company_file'];
    $post_company_linkedin = $_POST['post_company_linkedin'];
    $post_company_tw = $_POST['post_company_tw'];
    $post_company_facebook = $_POST['post_company_facebook'];
    $post_company_website = $_POST['post_company_website'];
    $post_company_desc = $_POST['post_company_desc'];
    $post_company_tagline = $_POST['post_company_tagline'];

    // Get
    $filename = $_FILES['post_company_file']['name'];
    $filetype = $_FILES['post_company_file']['type'];
    $filetemp = $_FILES['post_company_file']['tmp_name'];

    $filePath = "../images";

    if (is_uploaded_file($filetemp)) {
        if (move_uploaded_file($filetemp, $filePath . '/' . $filename)) {
        } else {
            echo "Failed to move your file.";
        }
    } else {
        echo "Failed to upload your file.";
    }


    // Get logo
    $imagename = $_FILES['post_job_logo']['name'];
    $imagetype = $_FILES['post_job_logo']['type'];
    $imagetemp = $_FILES['post_job_logo']['tmp_name'];

    if (is_uploaded_file($imagetemp)) {
        if (move_uploaded_file($imagetemp, $filePath . '/' . $imagename)) {
        } else {
            echo "Failed to move your image.";
        }
    } else {
        echo "Failed to upload your image.";
    }
    
    $add_job = "INSERT INTO job (UploadFeaturedImage, CompanyID ,JobTitle, JobRegion, job_description, location, email, JobType,CompanyName,Tagline,CompanyDescription, Website, FacebookUsername, TwitterUsername, LinkedinUsername, UploadLogo) VALUES('$imagename', '1', '$title', '$region', '$job_desc', '$location', '$email', '$type','$post_company_name', '$post_company_tagline', '$post_company_desc', '$post_company_website', '$post_company_facebook', '$post_company_tw', '$post_company_linkedin', '$filename')";
    $conn->query($add_job);

    echo '<script> alert("Đăng bài thành công") </script>';
    echo '<script> window.location="../post-job.html" </script>';
}