<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Silas Silikhe</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="themes/assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">
  <div class="profile">
         <img src="web/themes/assets/img/silah.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Silas Silikhe</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/silikhesilas" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/sila.wanjala.3" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/silah_sw/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/Silikhe" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/silas-silikhe-a3b7a7198/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Silas Silikhe</h1>
      <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>I'm a Full Stuck Developer from Nairobi.
I have serious passion for Android, Web and creating intuitive, dynamic user experiences.
Let's make something special 😉.</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="web/themes/assets/img/sil12.jpg" class="img-fluid" alt=""></br>
            <p class="font-italic pt-3">
              <strong> Presentation Demo for facebook Developers circle Hackerthon</strong>
            </p>
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Android &amp; Web Developer.</h3>
            <p class="font-italic">
            Have you imagined a new innovative digital platform, a revolutionary mobile application, a chatbot that improves life, or want to change the world? So let's do it together.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> 03 July</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> https://silsilas.github.io/portf/</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +254 706 745 81</li>
                  <li><i class="icofont-rounded-right"></i> <strong>City:</strong> City : Nairobi, Kenya</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> 21</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong>Bsc. Operations Research</li>
                  <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> silikhesilas@gmail.com</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
            I'm obsessed with making things and even more obsessed with making things better.I started this when I was 18. After graduating from the High school,
             I've been actively involved in the web design community for the last 2 years. I've designed
               websites for small businesses,corporations, churches and more. I also started a development
                blog where I share inspiration, tutorials, and resources.
My specialty is full web planing, design and development and turning it into beautiful, semantic HTML & CSS. My interests, however, extend beyond the web and I love
photography and photoshooting. I even love making designs move by creating professional photoshoots.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Facts</h2>
          <p>I am fasion obssesed. I do not have a favourite programing language bizarre right..lol. When not coding I am probably sleeping</p>
        </div>

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">2</span>
              <p><strong>Happy Clients</strong> I have worked with</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">16</span>
              <p><strong>Projects</strong> I have creted and developed</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">63</span>
              <p><strong>Hours Of Support</strong> to the community of tech</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">5</span>
              <p><strong>Hard Workers</strong> I have worked with</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Look at what I can do. Below are list of stack I have worked with mostly</p>
        </div>
        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>


            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">ReactJs <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Android <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>This is my resume that shows more about my proffesional life</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Silas Silikhe</h4>
              <p><em>Innovative and deadline-driven developerr with 1+ year of experience designing and developing web/mobile apps  from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Nairobi, kenya 294,Orlando, FL</li>
                <li>254706745581</li>
                <li>silikhesilas@gmail.com</li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Bsc. Operations Research </h4>
              <h5>2018 - present</h5>
              <p><em>Jomo Kenyatta University of Agriculture and Technology, Nairobi</em></p>
              <p>Currently I am pursuing Bachelor of Science in operation Reserch.</p>
            </div>
            <div class="resume-item">
              <h4>Mobile Web Development </h4>
              <h5>2019 - 2019</h5>
              <p><em>Andela Learning Community</em></p>
              <p>I was offered to take a web Development course on pluralsight Where I managed to secure a Web development Cefification by google</p>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Freelancer</h4>
              <h5>2019 - Present</h5>
              <p><em>Upwork, Kenya, Nairobi </em></p>
              <ul>
                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Technical Mentor</h4>
              <h5>2020 - present</h5>
              <p><em>Andela Learning Community, Nairobi</em></p>
              <ul>
                <li>Manage teams and groups.</li>
                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                <li>Recommended and consulted with clients on the most appropriate graphic design</li>
                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>I have worked in many type of projects both personal and professional. Here are some of the projects I've developed/Created.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Android</li>
              <li data-filter=".filter-card">Games</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/Silikhe/BooksAndroid" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="http://chat-siltek.herokuapp.com/signup" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/Silikhe/android_app" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="https://silsilas.github.io/Color-game/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="silsilas.github.io/gramas-website/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="https://github.com/Silikhe/recycler-view" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="silsilas.github.io/portf/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="silsilas.github.io/tetris-game/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="web/themes/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="web/themes/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://juja-hostels.netlify.app/" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>I am obssed i making things, even more obssesed in making things better. Here are some of my speciality that I am most conversant with.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Design</a></h4>
            <p class="description">Web design
Artistic direction
Logo & branding
UI & UX</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Digital & Mobile</a></h4>
            <p class="description">Responsive design websites
Mobile & Tablet Mobile
applications (iOS, Android)</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Development</a></h4>
            <p class="description">Front & back development
Interaction design
Magento, Wordpress
Symfony, Laravel</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Social Media & Webmarketing</a></h4>
            <p class="description">Social Media Strategy
Community Management
Bloggers, influencers
Reporting, live event
Emailing & contests</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">System Integration</a></h4>
            <p class="description">Integrating your applications is not just about making sure your various systems work together; it's about doing so in a way that's specific to your workflows</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">IT Security</a></h4>
            <p class="description">Our thorough threat audits help us identify your software infrastructure's most pressing vulnerabilities, allowing us to integrate the encryptions, security services and access protocols you require.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Testimonies from some of people I have worked with since in my programming journey</p>
        </div>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item" data-aos="fade-up">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             Delivered a good work, and the clients loved the product.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="web/themes/assets/img/testimonials/woman.png" class="testimonial-img" alt="">
            <h3>Jeniffer Kibiri</h3>
            <h4>Ceo &amp; Founder</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              He's helped us with aspects from full mobile app designs, to screenshots for app
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="web/themes/assets/img/testimonials/man.png" class="testimonial-img" alt="">
            <h3>Denis Juma</h3>
            <h4>Designer</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              He has consistently helped bring significant value to a lot of our products
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="web/themes/assets/img/testimonials/woman.png" class="testimonial-img" alt="">
            <h3>Ester Kwamboka</h3>
            <h4>Store Owner</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              His work is magic - he merges stunning user interface design with great user experience and designs products that give tangible results
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="web/themes/assets/img/testimonials/man.png" class="testimonial-img" alt="">
            <h3>Julius Omondi</h3>
            <h4>Freelancer</h4>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Working with you was amaizing.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="web/themes/assets/img/testimonials/woman.png" class="testimonial-img" alt="">
            <h3>Moreen Mokeira</h3>
            <h4>Entrepreneur</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>I am currently available for freelance projects or full-time work. If you are
            interested in working with me, please get in touch using one of the methods below. Or feel free to just say hi. I like that too.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>C2-Caanan Estate, Nairobi, 294-00517</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>silikhesilas@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+2547 067 455 81</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7671382775625!2d36.799075849726336!3d-1.3152538360232404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f106730cce0c3%3A0x2db496ad6b6805a3!2sCanaan%20Estate!5e0!3m2!1sen!2ske!4v1600879926320!5m2!1sen!2ske" style="border:0; width: 100%; height: 290px;"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Silas Silikhe</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->

  <!-- Template Main JS File -->

</body>



    <!-- <div class="container">
        <!-- <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
         <?= $content ?> -->
    </div> -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
