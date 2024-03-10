<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
	
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container flex-lg-column">
            <a class="navbar-brand mx-lg-auto mb-lg-4" href="#">
                <span class="h3 fw-bold d-block d-lg-none">Charlemagne Olivar </span>
                <img src="images/profile.jpg" class="d-none d-lg-block rounded-circle" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-lg-column text-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login" href="login.php">Login</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register" href="register.php">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- //NAVBAR -->

    <!-- CONTENT WRAPPER -->
    <div id="content-wrapper">

        <!-- HOME -->
        <section id="home" class="full-height px-lg-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="display-4 fw-bold" data-aos="fade-up">Im <span class="text-brand">Charlemagne Olivar
                            </span>and I am a College Student. </h1>
                        
                        <div data-aos="fade-up" data-aos-delay="600"> 
                        <a href="#portfolio" class="btn btn-brand me-3">Explore?</a>
                            <a href="#" class="link-custom">Cellphone: 09950960229</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- //HOME -->

        <!-- SERVICES -->
        <section id="portfolio" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">Portfolio</h6>
                        <h1>Here is my portfolio</h1>
                    </div>
                </div>

                <div class="row gy-4">

                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
						<img class="rounded-4" src="images/app_1.jpg" alt="">
                            <h5 class="mt-4 mb-2">Whisk it Good</h5>
                            <p>This is the application that my groupmates and I created when we are studying Mobile Application.</p>
                           
							
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="service p-4 bg-base rounded-4 shadow-effect">
						<img class="rounded-4" src="images/app_2.jpg" alt="">
                            <h5 class="mt-4 mb-2">MoneyWaste</h5>
                            <p>This one is a prototype mockup design we created together with my groupmates when we are studying INMEDIA.</p>
                            
							
                        </div>
                    </div>
        <!-- SERVICES -->

        <!-- ABOUT -->
        <section id="about" class="full-height px-lg-5">
            <div class="container">

                <div class="row pb-4">
                    <div class="col-lg-8">
                        <h6 class="text-brand">ABOUT ME</h6>
                        <h1>My Education</h1>
                    </div>
                </div>

                <div class="row gy-5">
                    <div class="col-lg-6">

                        <h3 class="mb-4">Education</h3>
                        <div class="row gy-4">

                            <div class="col-12">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
								<img class="rounded-4" src="images/NU.png" alt="">
                                    <h4>Bachelor of Science in Information Technology With Specialization in MOBILE AND INTERNET TECHNOLOGIES</h4>
                                    <p class="text-brand mb-2">National University Fairview (2022 - 2024)</p>
                                    <p class="mb-0">I explore the world of Information Technology in National University and embarked a new journey in this course. </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    

                        <h3 class="mb-4">Hobbies</h3>
                        <div class="row gy-4">

                            <div class="col-4">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
								<img class="rounded-4" src="images/basketball.jpg" alt="">
                                    <h4>Basketball</h4>
                                    <p class="mb-0">In my free time, I play basketball because this is my passion and i was a varisty player when i was in grade 8 to grade 11. I really like to play basketball in a big leagues like PBA, NBA, UAAP since i was a kid.</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
								<img class="rounded-4" src="images/volleyball.jpg" alt="">
                                    <h4>Volleyball</h4>
                                    <p class="mb-0">I play volleyball when i was in grade 7 since i thought of it as a fun sports and until this day i still play volleyball to have fun.</p>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="bg-base p-4 rounded-4 shadow-effect">
								<img class="rounded-4" src="images/vid_games.jpg" alt="">
                                    <h4>Video Games</h4>
                                    <p class="mb-0">I play video games since this is my way to get out of stress or to unwind.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- //ABOUT -->
		
        <!-- CONTACT -->
        <section id="contact" class="full-height px-lg-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-8 pb-4">
                        <h6 class="text-brand">CONTACT</h6>
                        <h1>My social media accounts</h1>
                        <p>Facebook: Charles Olivar</p>
                        <p>Instagram: _chrlmgnlvr</p>
                        <p>Twitter: @_chrlmgnlvr</p>
                        <h1>Message me</h1>

                        <!-- Contact Form -->
                        <form action="indexIn.php" method="post">
                            <div class="form-group">
                                <label for="name">Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Your Email:</label>
                                <input type="email" class="form-control" id="email" name="email" disabled>
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message:</label>
                                <textarea class="form-control" id="message" name="message" rows="4" disabled></textarea>
                            </div>
                                <input type="submit" name="submit" value="Send Message" class="form-control submit_btn" style="margin-top: 20px; background-color: var(--color-brand); color: white" disabled>
                                <p style="color: red; font-size: 14px; margin-top: 15px;">Please log in to send a message.</p>
                            <?php
                                if (isset($_SESSION['success_message'])) {
                                    // Display success message and set a time delay for disappearance
                                    echo "<div id='success-message' class='alert alert-success success-alert w-60 mx-auto text-center'>{$_SESSION['success_message']}</div>";

                                    // Remove the success message from the session
                                    unset($_SESSION['success_message']);
                                }
                                ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		</head>
     

    <script src="js/bootstrap.min.js"></script>
</body>

</html>