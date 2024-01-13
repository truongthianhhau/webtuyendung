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
    $gender = $_POST['post_job_gender'];
    $benefits = $_POST['post_job_other_benifits'];
    $education = $_POST['post_job_education'];
    $publishedon = $_POST['post_job_publishedon'];
    $responsibilities = $_POST['post_job_responsibilities'];
    $experience = $_POST['post_job_experience'];
    $salary = $_POST['post_job_salary'];
    $application_deadline = $_POST['post_job_application_deadline'];

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
    
    $add_job = "INSERT INTO job (UploadFeaturedImage, JobTitle, JobRegion, Gender, JobType, education, other_benifits, publishedon, Responsibilities, experience, salary, application_deadline, email, location, job_description, CompanyName, UploadLogo)     VALUES('$imagename','$title', '$region', '$gender', '$type', '$education', '$benefits', '$publishedon','$responsibilities', '$experience', '$salary', '$application_deadline', '$email', '$location', '$job_desc','$post_company_name', '$filename')";

    $conn->query($add_job);

    echo '<script> alert("Đăng bài thành công") </script>';
    echo '<script> window.location="../post-job.html" </script>';
}


