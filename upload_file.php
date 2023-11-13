<?php require_once './connect.php';

if(isset($_POST['post_job'])){
    $logo = $_POST['post_job_logo'];
    $email = $_POST['post_job_mail'];
    $title = $_POST['post_job_title'];
    $location = $_POST['post_job_location'];
    $region = $_POST['post_job_region'];
    $type = $_POST['post_job_type'];
    $job_desc = $_POST['post_job_desc'];
    $post_company_name = $_POST['post_company_name'];
    $post_company_file = $_POST['post_company_file'];
    $post_company_linkedin = $_POST['post_company_linkedin'];
    $post_company_tw = $_POST['post_company_tw'];
    $post_company_facebook = $_POST['post_company_facebook'];
    $post_company_website = $_POST['post_company_website'];
    $post_company_desc = $_POST['post_company_desc'];
    $post_company_tagline = $_POST['post_company_tagline'];

    
    // echo $email;
    // echo $title;
    // echo $location;
    // echo $region;
    // echo $type;
    // echo $job_desc;
    // echo $post_company_name;
    // echo $post_company_file;
    // echo $post_company_linkedin;
    // echo $post_company_tw;
    // echo $post_company_facebook;
    // echo $post_company_website;
    // echo $post_company_desc;
    // echo $post_company_tagline;

    //$add_company = "INSERT INTO companydetails (CompanyName,Tagline,CompanyDescription, Website, FacebookUsername, TwitterUsername, LinkedinUsername, UploadLogo) VALUES('$post_company_name', '$post_company_tagline', '$post_company_desc', '$post_company_website', '$post_company_facebook', '$post_company_tw', '$post_company_linkedin', '$post_company_file')";
    $add_job = "INSERT INTO job (UploadFeaturedImage, CompanyID ,JobTitle, JobRegion, job_description, location, email, JobType,CompanyName,Tagline,CompanyDescription, Website, FacebookUsername, TwitterUsername, LinkedinUsername, UploadLogo) VALUES('$logo', '1', '$title', '$region', '$job_desc', '$location', '$email', '$type','$post_company_name', '$post_company_tagline', '$post_company_desc', '$post_company_website', '$post_company_facebook', '$post_company_tw', '$post_company_linkedin', '$post_company_file')";
  
    $conn->query($add_job);
    //$conn->query($add_company);

    echo '<script> alert("Đăng bài thành công") </script>';
    echo '<script> window.location="../post-job.html" </script>';
}

?>