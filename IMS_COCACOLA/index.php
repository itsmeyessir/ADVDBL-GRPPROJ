<?php
session_start();
if (!isset($_SESSION["users"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="totalsales.php" class="btn btn-primary btn-block">Total Sales</a>
            </div>
            <div class="col-md-4">
                <a href="salesbyregion.php" class="btn btn-primary btn-block">Total Sales by Region</a>
            </div>
            <div class="col-md-4">
                <a href="salesbystate.php" class="btn btn-primary btn-block">Total Sales by State</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="unitssoldbysubbrand.php" class="btn btn-primary btn-block">Units Sold by Sub-brand</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="salesbymonth.php" class="btn btn-primary btn-block">Total Sales by Month</a>
            </div>
            <div class="col-md-4 mt-2">
                <a href="topcitiesbysales.php" class="btn btn-primary btn-block">Top Cities by Sales</a>
            </div>
        </div>
    </div>
</body>
</html>
