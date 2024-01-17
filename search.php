<?php
$searchJob = !empty($_POST['searchJob']) ? $_POST['searchJob'] : "";
$searchRegion = !empty($_POST['searchRegion']) ? $_POST['searchRegion'] : "";
$searchType = !empty($_POST['searchType']) ? $_POST['searchType'] : "";

$query_search = "select jobid,UploadLogo,JobTitle,CompanyName,JobRegion,JobType from job where status = 1 ";

if (isset($_POST['search'])) {

    if (!empty($searchJob)) {
        
        $query_search .= " AND JobTitle like '%" . $searchJob . "%' OR CompanyName like '%" . $searchJob . "%'";
    }
    if (!empty($searchRegion)) {
        
        $query_search .= " AND JobRegion = '" . $searchRegion . "'";
    }
    if (!empty($searchType)) {
        
        $query_search .= " AND JobType = '" . $searchType . "'";
    }
}

$result = $conn->query($query_search);

$Job_Listed = $result->num_rows;

if ($Job_Listed > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
            <a href=<?php echo !empty($_SESSION['fullname']) ? "job-single.php?jobid=".$row["jobid"]:"login.html"?>></a>
            <div class="job-listing-logo">
                <img src=<?php echo "'" . $row["UploadLogo"] . "'"; ?> alt="Free Website Template by Free-Template.co" class="img-fluid">
            </div>

            <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                    <h2><?php echo $row["JobTitle"]; ?></h2>
                    <strong><?php echo $row["CompanyName"]; ?></strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                    <span class="icon-room"></span> <?php echo $row["JobRegion"]; ?>
                </div>
                <div class="job-listing-meta">
                    <span class="badge badge-danger"><?php echo $row["JobType"]; ?></span>
                </div>
            </div>
        </li>

<?php    }
} else {
    echo "0 records";
}

?>