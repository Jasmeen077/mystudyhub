<?php
include "authenticate.php";
include "../controllers/AboutController.php";
$contactData = new AboutController();
$details = $contactData->getContactData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Study Hub | Contact Message</title>
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
            <h3>Contact Messages</h3>
            <p class="text-muted">Dashboard / Contact Messages</p>

            <div class="container border-secondary p-3">
                <div class="card shadow-sm border-1">
                    <h2 class="p-4 text-center"><b>Contact Messages</b></h2>
                    <hr class="mx-auto mb-5 mt-2" style="width:120px; height:3px; background:#198754;">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                if (!empty($details) && is_array($details)) {
                                    foreach ($details as $key => $value) {
                                ?>
                                        <tr>
                                            <td>
                                                <?= $count++; ?>
                                            </td>
                                            <td>
                                                <?= $value['name']; ?>
                                            </td>
                                            <td>
                                                <?= $value['email']; ?>
                                            </td>
                                            <td>
                                                <?= $value['address']; ?>
                                            </td>
                                            <td>
                                                <?= $value['city']; ?>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this contact detail');"><i class="bi bi-trash fs-6"></i></a>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>      
                            </tbody>
                        </table>
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