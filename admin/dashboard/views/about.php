<?php
include "authenticate.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Study Hub | Users</title>
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
    <div class="content">
        <h3>About Us</h3>
        <p class="text-muted">Dashboard / About Us</p>

        <div class="container border-secondary p-3">
            <div class="card shadow-sm border-1">
                <h2 class="p-4 text-center"><b>Fill About Details</b></h2>
                <hr class="mx-auto mb-5 mt-2" style="width:120px; height:3px; background:#198754;">
                <div class="container p-4 mb-4">
                    <form action="">
                        <div class="row justify-items-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="main_title" class="form-label">Main Title</label>
                                    <input type="text" placeholder="Enter main title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="heading" class="form-label">Heading</label>
                                    <input type="text" placeholder="Enter heading" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="image_url" class="form-label">Feature Image</label>
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-12 mt-2">
                                <div class="form-group">
                                    <label for="image_url" class="form-label">Description</label>
                                    <textarea name="" placeholder="Enter description" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-4">
                                <button class="btn btn-sm btn-primary" type="submit" name="submit">Add About</button>
                            </div>
                        </div>
                </div>
                </form>
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