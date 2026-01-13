<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Study Hub</title>
    <?php
    include "link.php";
    include "admin/dashboard/config/Config.php";
    include "admin/dashboard/models/AboutBase.php";
    include "admin/dashboard/controllers/AboutController.php";
    $contact = new AboutController();
    if (isset($_POST['submit_contact'])) {
        $contact->addContactDetails();
    }
    ?>
</head>

<body>

    <!-- Navbar -->
    <?php
    include "header.php";
    ?>
    <!-- Hero Section -->
    <section class="bg-dark text-center py-5"
        style="height:400px; 
                background-image: url('assets/img/book.jpg'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;
                opacity:0.8;" id="home">
        <div class="container mt-5 p-5">
            <h1 class="display-4 " style="color:black;"><b>Welcome to My Study Hub</b></h1>
            <p class="lead" style="color:black;"><b>Organize your notes, manage tasks, and take fun quizzes—all in one place!</b></p>
            <!-- <a href="#" class="btn btn-primary btn-lg mt-3">Get Started</a> -->
        </div>
    </section>


    <!--About Section-->
    <section id="about" class="mt-2 p-4" style="background-color:#e2e5d7;border:dotted 2px black;">
        <div class="container mt-5">
            <h2 class="text-center">About Us</h2>
            <hr class="mx-auto" style="width:200px;">

            <div class="row align-items-center mt-4 p-3">

                <!-- Image -->
                <div class="col-lg-4 text-center">
                    <img src="assets/img/child.jpg" alt="Study Image"
                        class="img-fluid shadow"
                        style="max-width:400px;">
                </div>

                <!-- Text -->
                <div class="col-lg-8">
                    <h4>Welcome to My Study Hub</h4>
                    <p>
                        My Study Hub is a simple and smart platform designed to help students
                        organize their notes, manage daily tasks, and improve learning through
                        fun quizzes.
                    </p>
                    <p>
                        Our goal is to make studying easier, more organized, and stress-free
                        so students can focus on achieving their academic goals.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!--Notes Section-->
    <section id="notes" class="py-5" style="background:#f8f9fa;">
        <div class="container">
            <h2 class="text-center fw-bold">Notes</h2>
            <p class="text-center text-muted">Find category-wise notes here</p>
            <hr class="mx-auto mb-5" style="width:120px; height:3px; background:#198754;">

            <div class="row justify-content-center g-4">

                <!-- Hindi Notes -->
                <div class="col-lg-4 col-md-6 p-3">
                    <div class="card note-card h-100 text-center">
                        <img src="assets/img/hindi.jpg" class="card-img-top" alt="Hindi Notes">
                        <div class="card-body">
                            <h5 class="card-title">Hindi Notes</h5>
                            <a href="#" class="btn btn-success btn-sm px-4">View Notes</a>
                        </div>
                    </div>
                </div>

                <!-- English Notes -->
                <div class="col-lg-4 col-md- p-3">
                    <div class="card note-card h-100 text-center">
                        <img src="assets/img/english.jpg" class="card-img-top" alt="English Notes">
                        <div class="card-body">
                            <h5 class="card-title">English Notes</h5>
                            <a href="#" class="btn btn-success btn-sm px-4">View Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Maths Notes -->
                <div class="col-lg-4 col-md- p-3">
                    <div class="card note-card h-100 text-center">
                        <img src="assets/img/maths.jpg" class="card-img-top" alt="Maths Notes">
                        <div class="card-body">
                            <h5 class="card-title">Maths Notes</h5>
                            <a href="#" class="btn btn-success btn-sm px-4">View Notes</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Contact Section-->
    <section id="contact" class="py-5" style="background:#f8f9fa;">
        <div class="container">
            <h2 class="text-center fw-bold">Contact</h2>
            <p class="text-center text-muted">Get in touch with us</p>
            <hr class="mx-auto mb-5" style="width:120px; height:3px; background:#198754;">

            <div class="row align-items-center g-4">

                <!-- Image -->
                <div class="col-lg-6 text-center">
                    <img src="assets/img/contact.jpg"
                        alt="Contact Image"
                        class="img-fluid shadow"
                        style="width:550px;height:500px;">
                </div>

                <!-- Form -->
                <div class="col-lg-6">
                    <div class="card shadow border-0">
                        <div class="card-header bg-success text-white text-center fw-bold">
                            Get In Touch
                        </div>

                        <div class="card-body">
                            <form method="POST" action="">

                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email" name="email">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter your address" name="address"></textarea>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label">City</label>
                                    <select class="form-select" name="city" required>
                                        <option value="">Select city</option>
                                        <option value="delhi">Delhi</option>
                                        <option value="kanpur">Kanpur</option>
                                        <option value="jhansi">Jhansi</option>
                                        <option value="katni">Katni</option>
                                    </select>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success" name="submit_contact">Send Message</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php
    include "footer.php";
    include "script.php";
    ?>
</body>

</html>