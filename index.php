<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Study Hub</title>
    <?php
    include "link.php";
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
                opacity:0.8;">
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
    <section id="notes" class="mt-5">
        <div class="container mt-5">
            <h2 class="text-center">Notes</h2>
            <p class="text-center">Find categories wise notes here</p>
            <hr class="mx-auto" style="width:200px;">

            <div class="row justify-content-center text-center g-5">

                <div class="col-lg-4 col-md-6">
                    <div class="shadow-sm p-3"  style="border: 1px dotted black;background-color:#e2e5d7">
                        <img src="assets/img/child.jpg" alt="" class="img-fluid shadow mb-2">
                        <p>Hindi Notes</p>
                        <a href="javascript:void(0);" class="btn btn-sm btn-success">View</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" >
                    <div class="shadow-sm p-3" style="border: 1px dotted black;background-color:#e2e5d7">
                        <img src="assets/img/child.jpg" alt="" class="img-fluid shadow mb-2">
                        <p>English Notes</p>
                        <a href="javascript:void(0);" class="btn btn-sm btn-success">View</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="shadow-sm p-3"  style="border: 1px dotted black;background-color:#e2e5d7">
                        <img src="assets/img/child.jpg" alt="" class="img-fluid shadow mb-2">
                        <p>Maths Notes</p>
                        <a href="javascript:void(0);" class="btn btn-sm btn-success">View</a>
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