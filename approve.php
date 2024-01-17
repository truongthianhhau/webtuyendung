<?php
require_once('./Model/db-connect.php');

$jobId =  htmlspecialchars($_GET["jobid"]) ;

$sql = "UPDATE job SET status = 1 where jobid = $jobId";

if ($conn->query($sql) === TRUE) {
    echo '<script> alert("Approved successfully") </script>';
    echo '<script> window.location="./approved-posts.php" </script>';
} else {
    echo '<script> alert("Approved Fail") </script>';
    echo '<script> window.location="./approved-posts.php" </script>';
}

$conn->close();
?>