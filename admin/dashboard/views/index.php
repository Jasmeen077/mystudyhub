<?php
include "authenticate.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Study Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "link.php"; ?>
</head>
<body>

<!-- Header -->
<?php
include "header.php";
?>

<!-- Sidebar -->
<?php
include "sidebar.php"
?>

<!-- Content -->
<div class="content" id="content">
    <div class="container-fluid">
        <h3>Dashboard</h3>
        <p>Welcome <?php echo $_SESSION['admin_name'];?> </p>

        <div class="row">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm mb-3 text-center">
                    <div class="card-body">
                        <i class="bi bi-people text-success"></i>
                        <h5 class="mt-2">Users</h5>
                        <p class="fs-4">120</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm mb-3 text-center">
                    <div class="card-body">
                        <i class="bi bi-cart text-success"></i>
                        <h5 class="mt-2">Orders</h5>
                        <p class="fs-4">45</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm mb-3 text-center">
                    <div class="card-body">
                        <i class="bi bi-currency-dollar text-success"></i>
                        <h5 class="mt-2">Revenue</h5>
                        <p class="fs-4">$3,500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<?php
include "footer.php";
include "script.php";
?>
</body>
</html>
