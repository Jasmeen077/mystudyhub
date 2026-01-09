<?php
include "authenticate.php";
include "../controllers/AboutController.php";
$notes = new AboutController();
if (isset($_POST['add_subject'])) {
    $notes->addSubject();
}
if (isset($_POST['add_class'])) {
    $notes->addClasses();
}
if (isset($_POST['add_notes'])) {
    $notes->addNote();
}
$subject = $notes->getsubjects();
$class = $notes->getClasses();
// $allNotes = $notes->getAllNotes();
$getname = $notes->getNames();
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
    include "sidebar.php";
    ?>

    <!-- Content -->
    <div class="content">
        <h3>Notes</h3>
        <p class="text-muted">Dashboard / Notes</p>

        <div class="container border-secondary p-3">
            <div class="card shadow-sm border-1">
                <h3 class="p-2 text-center"><b>Notes Page Details</b></h3>
                <hr class="mx-auto mb-5 mt-2" style="width:120px; height:3px; background:#198754;">
            </div>

            <div class="row mt-4">
                <!--Add Subjects-->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link text-decoration-none"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#addCategoryForm"
                                    aria-expanded="false"
                                    aria-controls="addCategoryForm">
                                    <h4> Add Subject Wise Categories</h4>
                                </button>
                            </h4>
                        </div>

                        <div class="collapse" id="addCategoryForm">
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                                    </div>

                                    <button type="submit" class="btn btn-success" name="add_subject">
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Classes-->
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link text-decoration-none"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#addClasses"
                                    aria-expanded="false"
                                    aria-controls="addClasses">
                                    <h4> Add Classes</h4>
                                </button>
                            </h4>
                        </div>

                        <div class="collapse" id="addClasses">
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                                    </div>

                                    <button type="submit" class="btn btn-success" name="add_class">
                                        Add
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Add Notes-->
                <div class="col-lg-12 mt-3">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4 class="mb-0">
                                <button class="btn btn-link text-decoration-none"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#addNotes"
                                    aria-expanded="false"
                                    aria-controls="addNotes">
                                    <h4> Add Notes</h4>
                                </button>
                            </h4>
                        </div>

                        <div class="collapse" id="addNotes">
                            <div class="card-body">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Chapter Name</label>
                                                <input type="text" name="chapter_name" class="form-control" placeholder="Enter chapter name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Topic name</label>
                                                <input type="text" name="topic_name" class="form-control" placeholder="Enter topic name" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Select Subject</label>
                                                <select name="sid" class="form-control">
                                                    <option value="">Select Subject</option>
                                                    <?php
                                                    if (!empty($subject) && is_array($subject)) {
                                                        foreach ($subject as $value) {
                                                    ?>
                                                            <option value="<?= $value['id'] ?>"><?= $value['name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Select Class</label>
                                                <select name="cid" class="form-control">
                                                    <option value="">Select class</option>
                                                    <?php
                                                    if (!empty($class) && is_array($class)) {
                                                        foreach ($class as $value) {
                                                    ?>
                                                            <option value="<?= $value['id'] ?>"><?= $value['name']; ?></option>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Upload PDF</label>
                                                <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Feature Image</label>
                                                <input type="file" name="image_url" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Short explanation</label>
                                                <textarea name="short_explanation" id="" rows="4" class="form-control" placeholder="Enter short explanation about chapter"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Text Notes</label>
                                                <textarea name="text_notes" id="" rows="4" class="form-control" placeholder="write text notes"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success" name="add_notes">
                                        Add Notes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="card shadow-sm border-1">
                <h3 class="p-2 text-center"><b>All Notes</b></h3>
                <hr class="mx-auto mb-5 mt-2" style="width:120px; height:3px; background:#198754;">

                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Chapter Name</th>
                                <th>Topic Name</th>
                                <th>Subject</th>
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php
                         if(!empty($getname) && is_array($getname))
                         {
                            foreach ($getname as $value) {
                              ?>
                              <tr>
                                <td>
                                    <?= $value['chapter_name']; ?>
                                </td>
                                <td>
                                     <?= $value['topic_name']; ?>
                                </td>
                                <td>
                                     <?= $value['name']; ?>
                                </td>
                                <td>
                                     <?= $value['classroom']; ?>
                                </td>
                                <td>
                                    <a href="#" class="">View</a>
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

    <!-- Footer -->
    <?php
    include "footer.php";
    include "script.php";
    ?>
</body>

</html>