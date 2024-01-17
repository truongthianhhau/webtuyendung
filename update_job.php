<?php require_once './Model/db-connect.php';

  if(isset($_POST['update_job'])){
    $title = $_POST['post_job_title'];
    $location = $_POST['post_job_location'];
    $job_desc = $_POST['post_job_desc'];
    $experience = $_POST['post_job_experience'];
    $salary = $_POST['post_job_salary'];
    $id = $_GET['jobid'];

    $update = "UPDATE job SET JobTitle = '$title', location = '$location', job_description = '$job_desc', experience = '$experience', Salary = '$salary'  WHERE jobid = '$id'";
    $conn->query($update);
    
    echo '<script> alert("Cập nhật thành công") </script>';
    echo '<script> window.location="./index.php" </script>';
  }

?>