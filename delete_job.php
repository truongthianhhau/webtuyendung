<?php
  require_once('./Model/db-connect.php');
  if(isset($_GET['delete'])){
    $job_id = $_GET['jobid'];
    $delete_job = "DELETE FROM job WHERE jobid = '$job_id'";
    $conn->query($delete_job);
    echo '<script> alert("Xóa thành công") </script>';
    echo '<script> window.location="./index.php" </script>';
  }
?>