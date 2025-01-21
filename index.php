<!DOCTYPE html>
<html lang="">

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="author" content="Vijay-kumar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Vijay - Portfolio ">
    <meta name="description" content="Vijay - Portfolio ">
    <!-- title -->
    <title>Vijay - Portfolio </title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- theme css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        /* Base styling for the experiences box */
        .experiences-box {
            padding: 15px;
            background-color: #f9f9f9;
            /* Light background to highlight the box */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .experiences-box ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .experiences-box li {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
            /* Divider between items */
        }

        .experiences-box li:last-child {
            border-bottom: none;
            /* Remove bottom border for the last item */
        }

        .experiences-box h6 {
            margin: 0;
            font-weight: bold;
            font-size: 1.2em;
            flex: 0 0 80px;
            /* Fixed width for the year column */
        }

        .experiences-box .text {
            flex: 1;
            /* Takes up the remaining space */
            padding: 0 10px;
        }

        .experiences-box label {
            flex: 0 0 150px;
            /* Fixed width for the date label */
            text-align: right;
        }

        /* Responsive adjustments */
        @media screen and (max-width: 768px) {
            .experiences-box li {
                flex-direction: column;
                /* Stack items vertically on smaller screens */
                align-items: flex-start;
            }

            .experiences-box label {
                text-align: left;
                margin-top: 5px;
                /* Add space between the date and text */
                flex: unset;
                /* Remove fixed width to allow wrapping */
            }

            .experiences-box h6 {
                flex: unset;
                /* Remove fixed width on smaller screens */
                margin-bottom: 5px;
                /* Space between the year and the job title */
            }
        }

        .contact-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contact-info .email,
        .contact-info .phone {
            display: flex;
            align-items: center;
            background-color: #f8f8f8;
            /* Adjust the background color as needed */
            border-radius: 10px;
            /* Rounded corners */
            padding: 10px 20px;
            text-decoration: none;
            color: #333;
            /* Text color */
        }

        .contact-info .email img,
        .contact-info .phone img {
            margin-right: 10px;
            /* Space between the icon and the text */
        }

        .contact-info .email:hover,
        .contact-info .phone:hover {
            background-color: #e0e0e0;
            /* Hover effect */
        }
    </style>
</head>
<!-- Body Start -->

<body>
    <!-- page loading -->
    <div id="loading">
        <div class="load-circle"><span class="one"></span></div>
    </div>
    <!-- End -->
    <!-- Header -->
    <header class="main-header">
        <nav class="navbar navbar-expand-lg one-page-nav">
            <div class="container">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.svg" title="" alt="">
                </a>
                <!-- / -->
                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-collapse-toggle" aria-controls="navbar-collapse-toggle"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- / -->
                <!-- Top Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbar-collapse-toggle">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="0" href="#home"><span>Home</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="1"
                                href="#about"><span>About</span></a></li>
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="2"
                                href="#resume"><span>Resume</span></a></li>
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="3"
                                href="#services"><span>Services</span></a></li>
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="4" href="#work"><span>Work</span></a>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" data-scroll-nav="5" href="#blog"><span>Blog</span></a>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" data-scroll-nav="6"
                                href="#contact"><span>Contact</span></a></li>
                    </ul>
                </div>
                <!-- / -->
                <!-- Mobile Toggle -->
                <div class="ms-auto d-lg-block d-none">
                    <a href="#contact" data-scroll-nav="6" class="px-btn px-btn-primary">HIRE ME</a>
                </div>
                <!-- / -->
            </div><!-- Container -->
        </nav> <!-- Navbar -->
    </header>
    <!-- End Header -->
    <!-- Main -->
    <main class="wrapper">
        <!-- Home Section -->
        <section id="home" data-scroll-index="0" class="home-section" style="background-image: url(assets/img/bg.jpg);">
            <div class="container">
                <div class="home-intro-box">
                    <div class="user-text">
                        <h6><img src="assets/img/hend.png" title="" alt=""> Hello, I am</h6>
                        <h1>Vijay </h1>
                        <h2>Backend Dev <span id="type-it"></span></h2>
                    </div>
                    <div class="user-review">
                        <div class="d-flex star-box">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p>Vijay Kumar excels as a backend developer, consistently delivering outstanding work.”</p>
                        <h6>Amaze Technosoft</h6>
                    </div>
                    <div class="user-img">
                        <div class="user-img-round"></div>
                        <img src="assets/img/vijay-kumar.png" title="" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Home Section -->
        <!-- About Section -->
        <section id="about" data-scroll-index="1" class="section about-section">
            <div class="container">
                <div class="section-heading">
                    <h3>About Me</h3>
                </div>
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6">
                        <img src="assets/img/about-me.png" title="" alt="">
                    </div>
                    <div class="col-lg-6 ps-xl-5">
                        <div class="about-intro">
                            <h6>MY INTRO</h6>
                            <h2>I am <span>Vijay Kumar</span></h2>
                            <h5>A Backend Developer based in India</h5>
                            <div class="text">
                                <p>I am a skilled PHP Laravel developer with 2+ years of experience in creating dynamic
                                    web applications. Proficient in PHP Laravel, MySQL, HTML, CSS, JavaScript, and
                                    jQuery. I
                                    possess strong problem-solving skills with a passion for learning and adapting to
                                    new technologies. Check out my Portfolio.</p>
                                <p>I enjoy collaborating with new people as it brings fresh experiences and insights.
                                </p>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            <span>Birthday :</span> <label id="birthday">21st April 2000</label>
                                        </li>
                                        <li>
                                            <span>Age :</span> <label id="age"></label>
                                        </li>
                                        <li>
                                            <span>Address :</span> <label>Koi, Kangra, H.P</label>
                                        </li>
                                    </ul>



                                </div>
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            <span>Phone :</span><a href="tel:8580924902" target="_blank"> <label>(+91)
                                                    8580 9249 02</label> </a>
                                        </li>
                                        <li>
                                            <span>Email :</span> <a href="mailto:vkwebdevloper@gmail.com"
                                                target="_blank"> <label>vkwebdevloper@gmail.com</label></a>
                                        </li>
                                        <li>
                                            <span>Linkdin :</span> <a
                                                href="https://www.linkedin.com/in/vijay-kumar-12639628a/"
                                                target="_blank"><label>vijay-kumar-12639628a </label></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-bar">
                                <a href="https://drive.google.com/file/d/1e1TqUVq2fb7DyEDEVSoSJo-zW6GooBMe/view"
                                    class="px-btn px-btn-primary" target="_blank">DOWNLOAD CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->
        <!-- Skill Section -->
        <section id="resume" data-scroll-index="2" class="section skills-section bg-gray">
            <div class="container">
                <div class="section-heading">
                    <h3>Skills & Experience</h3>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <ul class="skills-list counter">
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #ffe5dc;">
                                        <i class="fab fa-html5" style="color: #e54c21;"></i>
                                        <span class="count after-p" data-to="90" data-speed="90">90</span>
                                    </div>
                                    <h6>HTML</h6>
                                </div>
                            </li>
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #dee4ff;">
                                        <i class="fab fa-css3-alt" style="color: #264de4;"></i>
                                        <span class="count after-p" data-to="90" data-speed="90">90</span>
                                    </div>
                                    <h6>CSS</h6>
                                </div>
                            </li>
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #def5ff;">
                                        <i class="fab fa-js" style="color: #f7df1e;"></i>
                                        <span class="count after-p" data-to="85" data-speed="85">85</span>
                                    </div>
                                    <h6>JavaScript</h6>
                                </div>
                            </li>
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #f0ffd0;">
                                        <i class="fab fa-php" style="color: #474a8a;"></i>
                                        <span class="count after-p" data-to="90" data-speed="90">90</span>
                                    </div>
                                    <h6>PHP</h6>
                                </div>
                            </li>
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #e4ffde;">
                                        <i class="fas fa-database" style="color: #00758f;"></i>
                                        <span class="count after-p" data-to="80" data-speed="80">80</span>
                                    </div>
                                    <h6>MySQL</h6>
                                </div>
                            </li>
                            <li>
                                <div class="skill-box">
                                    <div class="skill-icon" style="background: #ffe2e9;">
                                        <i class="fab fa-laravel" style="color: #ff2d20;"></i>
                                        <span class="count after-p" data-to="85" data-speed="85">85</span>
                                    </div>
                                    <h6>Laravel</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="experiences-box">
                            <ul>
                                <li>
                                    <h6>2024</h6>
                                    <div class="text">
                                        <h5>PHP Laravel Developer</h5>
                                        <span>Solution Wagon</span>
                                    </div>
                                    <label>Feb 2024 – Present</label>
                                </li>
                                <li>
                                    <h6>2023</h6>
                                    <div class="text">
                                        <h5>PHP Developer</h5>
                                        <span>Amaze Technosoft Pvt. Ltd.</span>
                                    </div>
                                    <label>Aug 2023 – Feb 2024</label>
                                </li>
                                <li>
                                    <h6>2022</h6>
                                    <div class="text">
                                        <h5>PHP Developer – Apprentice</h5>
                                        <span>PXE DRDO</span>
                                    </div>
                                    <label>Feb 2022 – Feb 2023</label>
                                </li>
                                <li>
                                    <h6>2021</h6>
                                    <div class="text">
                                        <h5>Data Technician</h5>
                                        <span>Nag Utilities Solutions Pvt. Ltd.</span>
                                    </div>
                                    <label>Apr 2021 – Jan 2022</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Skill Section -->
        <!-- services Section -->
        <section id="services" data-scroll-index="3" class="section services-section">
            <div class="container">
                <div class="section-heading">
                    <h3>What I Do?</h3>
                </div>
                <div class="row gy-4">
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fab fa-php" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>PHP Development</h5>
                                    <p>I develop dynamic web applications using PHP. My expertise includes working with
                                        frameworks like Laravel to deliver robust and scalable solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fas fa-code" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Web Development</h5>
                                    <p>I create engaging and responsive websites using HTML, CSS, JavaScript, and MySQL,
                                        ensuring a seamless user experience and optimized performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fab fa-laravel" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Laravel Development</h5>
                                    <p>Specializing in Laravel framework, I build high-quality, maintainable, and
                                        scalable web applications to meet diverse business needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fas fa-database" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>MySQL Database Management</h5>
                                    <p>I manage and optimize databases using MySQL, ensuring data integrity, security,
                                        and efficient retrieval for web applications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fab fa-js" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>JavaScript Development</h5>
                                    <p>I enhance web applications with interactive features using JavaScript and jQuery,
                                        providing a dynamic user experience.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="feature-box-01">
                            <div class="feature-box-in">
                                <div class="icon">
                                    <i class="fab fa-html5" style="color: #007bff;"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>HTML & CSS</h5>
                                    <p>I design and develop clean, modern, and responsive layouts using HTML and CSS,
                                        ensuring compatibility across various devices and browsers.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- End services Section -->
        <!-- Projects Section -->
        <section id="work" data-scroll-index="4" class="section projects-section bg-gray">
            <div class="container">
                <div class="section-heading">
                    <h3>Our Latest Projects</h3>
                </div>
                <div class="owl-carousel lightbox-gallery" data-items="3" data-center="true" data-nav-dots="false"
                    data-nav-arrow="true" data-md-items="3" data-sm-items="2" data-xs-items="2" data-xx-items="1"
                    data-space="0" data-autoplay="true">
                    <div class="work-box">
                        <div class="work-img">
                            <a href="#">
                                <img src="assets/img/thegiftbboutique.png" title="" alt="">
                            </a>
                        </div>
                        <div class="work-info">
                            <h6>UI/UX DESIGN</h6>
                            <h3>Skilly UI/UX Design</h3>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="work-img">
                            <a href="#">
                                <img src="assets/img/znrgsolar.png" title="" alt="">
                            </a>
                        </div>
                        <div class="work-info">
                            <h6>UI/UX DESIGN</h6>
                            <h3>Skilly UI/UX Design</h3>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="work-img">
                            <a href="#">
                                <img src="assets/img/work-3.png" title="" alt="">
                            </a>
                        </div>
                        <div class="work-info">
                            <h6>UI/UX DESIGN</h6>
                            <h3>Skilly UI/UX Design</h3>
                        </div>
                    </div>
                    <div class="work-box">
                        <div class="work-img">
                            <a href="#">
                                <img src="assets/img/work-1.png" title="" alt="">
                            </a>
                        </div>
                        <div class="work-info">
                            <h6>UI/UX DESIGN</h6>
                            <h3>Skilly UI/UX Design</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Projects Section -->
        <!-- Testimonial Section -->
        <!-- <section class="section testimonial-section bg-no-repeat bg-center"
            style="background-position: center 125%;background-image: url(assets/img/bg-1.png);">
            <div class="container">
                <div class="section-heading">
                    <h3>What people say about us?</h3>
                </div>
                <div class="owl-carousel" data-items="1" data-nav-dots="false" data-nav-arrow="true" data-md-items="1"
                    data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="20" data-autoplay="true">
                    <div class="testimonial-box">
                        <div class="icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-text">
                            <div class="d-flex star-box">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h6>Customer Support</h6>
                            <p>I wanted to move from Wordpress to an HTML site for page load speed reasons. After
                                looking at a dozen packages, I decided "Tony" had what I needed.</p>
                            <h5>pxdraft</h5>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-text">
                            <div class="d-flex star-box">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h6>Customer Support</h6>
                            <p>I wanted to move from Wordpress to an HTML site for page load speed reasons. After
                                looking at a dozen packages, I decided "Tony" had what I needed.</p>
                            <h5>pxdraft</h5>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-text">
                            <div class="d-flex star-box">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h6>Customer Support</h6>
                            <p>I wanted to move from Wordpress to an HTML site for page load speed reasons. After
                                looking at a dozen packages, I decided "Tony" had what I needed.</p>
                            <h5>pxdraft</h5>
                        </div>
                    </div>
                    <div class="testimonial-box">
                        <div class="icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="testimonial-text">
                            <div class="d-flex star-box">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h6>Customer Support</h6>
                            <p>I wanted to move from Wordpress to an HTML site for page load speed reasons. After
                                looking at a dozen packages, I decided "Tony" had what I needed.</p>
                            <h5>pxdraft</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Testimonial Section -->
        <!-- Blog Section -->
        <!--<section id="blog" data-scroll-index="5" class="section blog-section bg-gray">
            <div class="container">
                <div class="section-heading">
                    <h3>My Blogs and News</h3>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <img src="assets/img/blog-1.jpg" title="" alt="">
                            </div>
                            <div class="blog-post-info">
                                <h6>16 JUNE 2021</h6>
                                <h3>Building Scalable Web Applications with Laravel</h3>
                                <p>Explore the intricacies of developing scalable and efficient web applications using
                                    the Laravel framework.</p>
                            </div>
                            
                            <a class="blog-popup" href="#blog_post_1"></a>
                            
                            <div id="blog_post_1" class="mfp-hide blog-popup-content">
                                <div class="single-blog-post">
                                    <a class="blog-popup-dismiss" href="#"><span class="bi bi-x"></span></a>
                                    <div class="single-blog-img">
                                        <img src="assets/img/blog-1.jpg" title="" alt="">
                                    </div>
                                    <div class="single-blog-content">
                                        <h6>16 JUNE 2021</h6>
                                        <h3>Building Scalable Web Applications with Laravel</h3>
                                        <div class="article">
                                            <p>Laravel, with its elegant syntax and robust features, is a popular choice
                                                for web developers. In this blog post, I delve into various techniques
                                                and best practices for creating scalable web applications using Laravel.
                                            </p>
                                            <blockquote>
                                                "Laravel provides an expressive and elegant syntax which is a joy to
                                                use, making it a go-to framework for web development."
                                            </blockquote>
                                            <p>The blog covers key topics such as routing, middleware, service
                                                containers, and how to leverage Laravel's built-in features to ensure
                                                your applications are both maintainable and scalable.</p>
                                        </div>
                                        <div class="nav social-icons">
                                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <img src="assets/img/blog-2.jpg" title="" alt="">
                            </div>
                            <div class="blog-post-info">
                                <h6>23 JULY 2021</h6>
                                <h3>Optimizing MySQL Databases for Performance</h3>
                                <p>Learn the techniques to optimize MySQL databases for better performance and faster
                                    query execution times.</p>
                            </div>
                           
                            <a class="blog-popup" href="#blog_post_2"></a>
                            
                            <div id="blog_post_2" class="mfp-hide blog-popup-content">
                                <div class="single-blog-post">
                                    <a class="blog-popup-dismiss" href="#"><span class="bi bi-x"></span></a>
                                    <div class="single-blog-img">
                                        <img src="assets/img/blog-2.jpg" title="" alt="">
                                    </div>
                                    <div class="single-blog-content">
                                        <h6>23 JULY 2021</h6>
                                        <h3>Optimizing MySQL Databases for Performance</h3>
                                        <div class="article">
                                            <p>Database optimization is critical for the performance of web
                                                applications. This post discusses various methods to enhance MySQL
                                                database performance, including indexing, query optimization, and
                                                configuration tweaks.</p>
                                            <blockquote>
                                                "Efficient database management can significantly reduce load times and
                                                improve the overall user experience."
                                            </blockquote>
                                            <p>By implementing these optimization techniques, developers can ensure
                                                their applications handle large datasets and high traffic efficiently.
                                            </p>
                                        </div>
                                        <div class="nav social-icons">
                                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-post">
                            <div class="blog-post-img">
                                <img src="assets/img/blog-3.jpg" title="" alt="">
                            </div>
                            <div class="blog-post-info">
                                <h6>10 AUGUST 2021</h6>
                                <h3>Creating Responsive Designs with HTML & CSS</h3>
                                <p>Discover the principles and techniques for creating responsive web designs using HTML
                                    and CSS.</p>
                            </div>
                           
                            <a class="blog-popup" href="#blog_post_3"></a>
                            
                            <div id="blog_post_3" class="mfp-hide blog-popup-content">
                                <div class="single-blog-post">
                                    <a class="blog-popup-dismiss" href="#"><span class="bi bi-x"></span></a>
                                    <div class="single-blog-img">
                                        <img src="assets/img/blog-3.jpg" title="" alt="">
                                    </div>
                                    <div class="single-blog-content">
                                        <h6>10 AUGUST 2021</h6>
                                        <h3>Creating Responsive Designs with HTML & CSS</h3>
                                        <div class="article">
                                            <p>Responsive design ensures that web applications look great on all
                                                devices. This post covers essential techniques such as media queries,
                                                flexible grids, and responsive images to create adaptable web designs.
                                            </p>
                                            <blockquote>
                                                "A well-designed responsive website improves accessibility and provides
                                                a seamless user experience across all devices."
                                            </blockquote>
                                            <p>By following these guidelines, developers can build websites that are
                                                both aesthetically pleasing and functionally robust.</p>
                                        </div>
                                        <div class="nav social-icons">
                                            <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                            <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Blog Section -->
        <!-- Contact Section -->
        <section id="contact" data-scroll-index="6" class="section contact-section">
            <div class="container">
                <div class="section-heading">
                    <h3>Chat with me</h3>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="row contact-info">
                            <div class="col-md-6">
                                <a class="email" href="mailto:vkwebdevloper@gmail.com" target="_blank">
                                    <img src="assets/img/email.png" title="" alt="">
                                    <span>vkwebdevloper@gmail.com</span>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="phone" href="tel:8580924902" target="_blank">
                                    <img src="assets/img/phone.png" title="" alt="">
                                    <span>+91 8580 924 902 </span>
                                </a>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form action="send_email.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="your_name" name="your_name"
                                                placeholder="Your Name" required>
                                            <label for="your_name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="your_email" name="your_email"
                                                placeholder="name@example.com" required>
                                            <label for="your_email">Email Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="your_subject"
                                                name="your_subject" placeholder="Subject" required>
                                            <label for="your_subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here"
                                                id="your_message" name="your_message" style="height: 150px"
                                                required></textarea>
                                            <label for="your_message">Your Message here</label>
                                        </div>
                                    </div>
                                    <div class="col-12 btn-bar text-center">
                                        <button type="submit" class="px-btn px-btn-primary">SEND INQUIRY</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- Main -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 py-2">
                    <div class="d-flex align-items-center"><img src="assets/img/logo.svg" title="" alt=""><span
                            class="ps-3">© Copyright 2024 | All rights reserved</span></div>
                </div>
                <div class="col-md-5 py-2">
                    <div class="nav social-icons justify-content-center justify-content-md-end">
                        <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <a href="#" id="back_to_top" class="back-to-top">
        <img src="assets/img/arrow.svg" title="" alt="">
    </a>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/one-page/scrollIt.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        // Function to calculate the age from the birthdate
        function calculateAge(birthDate) {
            const today = new Date();
            const birth = new Date(birthDate);
            let age = today.getFullYear() - birth.getFullYear();
            const monthDiff = today.getMonth() - birth.getMonth();
            // Adjust age if the birthday hasn't occurred this year yet
            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birth.getDate())) {
                age--;
            }
            return age;
        }

        // Set the birthdate and calculate the age
        const birthDateString = "2000-04-21"; // Use the correct format (YYYY-MM-DD)
        const ageElement = document.getElementById("age");
        ageElement.textContent = calculateAge(birthDateString) + " years";
    </script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 3,               // Number of items to display
                loop: true,             // Enable infinite loop
                margin: 10,             // Margin between items
                center: true,           // Center the active item
                nav: true,              // Enable navigation arrows
                dots: false,            // Disable dots below the carousel
                autoplay: true,         // Enable auto play
                autoplayTimeout: 3000,  // Auto play interval
                responsive: {
                    0: {
                        items: 1        // Number of items in extra small screens
                    },
                    600: {
                        items: 2        // Number of items in small screens
                    },
                    1000: {
                        items: 3        // Number of items in medium to large screens
                    }
                }
            });
        });
    </script>

    <!-- end -->
</body>
<!-- Body End -->

</html>