
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charact="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="css\profile.css">
  
    <style>
        .container{
          display : block;
            width :100%;

        }

        </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .container{
      display : block;
        width :100%;

    }

    </style>
</head>

<body>

  <!-------NavBar------>

  <nav class="navbar navbar-expand-md fixed-top header">
    <div class="container">
      <a class="navbar-brand" href="#hero"><img src="img/logo.png" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ms-auto btn fs-5 register">
          <li class="nav-item"><a href="#hero" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#service" class="nav-link">Service</a></li>
          <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#reviews" class="nav-link">Reviews</a></li>
          <li class="nav-item"><a href="#faq" class="nav-link">FAQ</a></li>
          <!-- <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#logindemo">Sign up</a></li>   -->
          <li class="nav-item"><a href="newlog.php" class="nav-link" data-bs-target="">Log In</a></li>
          <li class="nav-item"><a href="sign.php" class="nav-link bg-primary text-white" data-bs-target="">Sign
              Up</a> </li>
        </ul>
      </div>
    </div>
  </nav>


  </div>
  </div>

  <!----------Hero section-------->

  <section class="hero" id="hero">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <div class="hero-text">
            <h3>Professional <span>Cleaning</span> </h3>
            <h1>Service For Your Home</h1>


            <div class="morphing fs-1 mb-3">
              <div class="word">Green Cleaning</div>
              <div class="word">Residential Cleaning</div>
              <div class="word">Outdoor Cleaning</div>
              <div class="word">Special Task</div>
            </div>
            <p>Our prime is to professionally creating a clean,healthy and safe environment for your home. Through our
              cleaning services,
              we furnish you with extreme satisfaction and immaculately pleasent household.</p>

            <a href="booking.php" class="btn hero-btn" id="gg">Book Now</a>
          </div>
        </div>

        <div class="col-lg-6">
          <img src="img/Clean Man.png" class="hero-img" alt="">
        </div>
      </div>

    </div>
  </section>

  <!------------Service------------>
  <?php include "config.php";
                        $query = mysqli_query($db, "SELECT * FROM `items`");
                        $check = mysqli_num_rows($query) > 0;

                        if ($check) {
                            while ($row = mysqli_fetch_assoc($query)) {
                                $image = $row['image'];
                                $title = $row['title'];
                               

                        ?>
  <section class="service" id="service">
    <h2 class="service-topic text-center">Services</h2>
    <div class="container">
      <div class="service-text">
        <div class="text-center">
          We offer the best cleaning services,we have a highly experienced team to provide you with quality services ,
          contact us if you want your house to be
          impeccable and shiny.
        </div>

        <div class="row row-cols-1 row-cols-md-2 g-4">

          <div class="col">
            <h4 class="col-sm card-topic text-center">
              <b><input type="hidden" value= <?php echo $title;?>><?php echo $title;?></b>
              
            <!-- Green Cleaning --></h4>
            <div class="card">
            <img src="uploads/<?php echo $image ?>" alt="Avatar" class="image">
              <!-- <img src="img/Grasscutman.jpg" alt="Avatar" class="image"> -->
              <div class="card-body">
                <h4 class="card-title text-center">Including</h4>
                <p class="card-text">
                  Our well trained greenery and outdoor spaces professional’s will provide you tree services,hedge
                  trimming and flower services ,
                  lawn mowing, lawn fertilization, and weed control and lawn watering.
                </p>
                <h6 style="color:white;font-size:15px">
                  ESTIMATE PRICE RS.300 <strong>Per Hour</strong>
                </h6>
              </div>
            </div>
          </div>
          <div class="col">
            <h4 class="col-sm card-topic text-center">Residential Cleaning</h4>
            <div class="card">
              <img src="img/House cleaning.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Including</h4>
                <p class="card-text">
                  My cleaners is your perfect solution when you need a basic and perfect cleaning for your home.we offer
                  a variety of cleaning services including vaccum cleaning,
                  AC & Refrigerator cleaning, basic cleaning , sweeping and mopping , carpet cleaning.
                </p>
                <h6 style="color:white;font-size:15px">
                  ESTIMATE PRICE RS.400 <strong>Per Hour</strong>
                </h6>
              </div>
            </div>
          </div>
          <div class="col">
            <h4 class="col-sm card-topic text-center">Outdoor Cleaning</h4>
            <div class="card">
              <img src="img/roof.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Including</h4>
                <p class="card-text">
                  We professionals provide you roof and water tank cleaning,pool cleaning,vehicle and garage,animal
                  cages cleaning and cleaning of drains.
                </p>
                <h6 style="color:white;font-size:15px">
                  ESTIMATE PRICE RS.500 <strong>Per Hour</strong>
                </h6>
              </div>
            </div>
          </div>
          <div class="col">
            <h4 class="col-sm card-topic text-center">Special Task</h4>
            <div class="card">
              <img src="img/Partyseen.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title text-center">Including</h4>
                <p class="card-text">
                  We are ready to clean your place after party,arms giving function,move-in and move-outs or any other
                  occasions with the best team of ours.
                </p>
                <h6 style="color:white;font-size:15px">
                  ESTIMATE PRICE RS.600 <strong>Per Hour</strong>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
}
                        } else {
                            echo "nothing";
                        }
                        // while ($row = mysqli_fetch_array($query)) {
                        ?>

  <!-------contact
  -->
  <section class="contact" id="contact">
    <br><br>
    <h2 class="contact-topic text-center">Contacts</h2>
    <br><br>
    
    <div class="row">
      <div class="col-md-3">
          <div class="contact-card">
              <a href="UserDashboard.php">
                  <img src="img/address.png" />
                  <h1 class="contact-title">Address :</h1>
                  <p class="contact-content">Banepa ,Chardobato-6 <br> Kavrepalanchwok, Bagmati,Nepal</p>
              </a>

          </div>
      </div>
      <div class="col-md-3">
          <div class="contact-card">
              <a href="OrderDetails.php">
                  <img src="img/mail.png" />
                  <h1 class="contact-title">Email :</h1>
                   <p class="contact-content">nisraut00@gmail.com</p>
              </a>

          </div>
      </div>
      <div class="col-md-3">
          <div class="contact-card">
              <a href="UserDetails.php">
                  <img src="img/phone.png" />
                  <h1 class="contact-title">Phone Number :</h1>
                   <p class="contact-content">+977 9843811378 <br> (9:30 AM - 6:00 PM)</p>
              </a>
          </div>
      </div>
      <div class="col-md-3">
          <div class="contact-card">
              <a href="logout.php">
                  <img src="img/workinghours.png" />
                  <h1 class="contact-title">Working hours :</h1>
                   <p class="contact-content">9:00 AM - 7:00 PM <br> Sunday - Friday</p>
              </a>

          </div>
      </div>
  </div>

  <div class="reach">
      <h1 class="main-title">  How to Reach Us?</h1>
      <p class="reach-content">     We are located near Chardobato Chowk,Banepa-6, Kavrepalanchwok.</p>
      <!-- <img src=assets/img/location.png> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28277.6895183726!2d85.50674186121526!3d27.63346007112685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb0f33b1a23b53%3A0xe8ec0b92bdf38a54!2sBanepa!5e0!3m2!1sen!2snp!4v1661341932767!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
    
  </section>


  <!---------------Reviews------------->
  <section class="reviews" id="reviews">
    <h2 class="reviews-topic text-center">Reviews</h2>
    <div class="container-fluid">
      <div class="reviews-area">

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"Yesterday I booked a employee for my residential cleaning . They provide .me good source. Through
                  the website. Very satisfying the employee they send me also very active and friendly.High recommended
                  this service."</p>
                <div class="person"><img alt="" src="img/image (1).jpg" class=" rounded-circle shadow-1-strong mb-4"
                    style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Matara</h6>
              </div>
            </div>
            <div class="carousel-item">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"I have been always this kind of website to clean standing house keeping residence and garden .The
                  employee seems to be very professional. Worthy for money highly recommended."</p>
                <div class="person"><img alt="" src="img/image.jpg" class=" rounded-circle shadow-1-strong mb-4"
                    style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Galle</h6>
              </div>
            </div>
            <div class="carousel-item">
              <div class="content text-center">
                <h5 class="carousel-topic">WHAT USERS SAYS</h5>
                <p>"Our long standing house keeper moved and I have been trouble finding a reliable replacement so I
                  decide to use a cleaning service for the first time. They were incredible friendly. Did a complete job
                  . I will be definitely calling them back.
                  Thank you."</p>
                <div class="person"><img alt="" src="img/image (2).jpg" class=" rounded-circle shadow-1-strong mb-4"
                    style="width: 150px;"></div>
                <h5 class="name">David Jones</h5>
                <h6>Hombantota</h6>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>


  <!---------FAQ- Accordion------>
  <section class="faq" id="faq">
    <div class="container col-sm-8">
      <h3 class="text-center">FAQ</h3>
      <div class="accordion" id="accordionSection">
        <div class="accordion-item mb-3">
          <h2 class="accordion-header">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapseOne">What kind of services can we get?</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#accordionSection">
            <div class="accordion-body">
              You can get residential cleaning , Greenary cleaning , outdoor cleaning and also we provide our services
              for the special events.
            </div>
          </div>
        </div>
        <div class="accordion-item  mb-3">
          <h2 class="accordion-header">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo">Do the employees have the qualifications or experience?</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionSection">
            <div class="accordion-body">
              Yes They have
            </div>
          </div>
        </div>
        <div class="accordion-item mb-3">
          <h2 class="accordion-header">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapseThree">How can I join this service as a employer?</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionSection">
            <div class="accordion-body">
              You can sign up and fill the form after the process of registration we will let you know.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
              data-bs-target="#collapsefour">Does this service provide island-wide?</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapsefour" data-bs-parent="#accordionSection">
            <div class="accordion-body">
              yes
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!--------Footer-------->

  <div class="footer">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h5>ABOUT US</h5>
            <p>At 99% client retention,we are proud to set records for this industry.My cleaner service provides
              full-service care of facilities , from daily maintence
              and cleaning.You can reach us at any time for routine care or emergency service , and make your home peace
              and attractive. </p>
          </div>
          <div class="col-md-3">
            <h5 class="sitemap">SITEMAP</h5>
            <ul class="icon">
              <li><a href="#hero">
                  <p class="bi-chevron-right">Home</p>
                </a></li>
              <li><a href="#service">
                  <p class="bi-chevron-right">Service</p>
                </a></li>
              <li><a href="#reviews">
                  <p class="bi-chevron-right">Reviews</p>
                </a></li>
              <li><a href="#faq">
                  <p class="bi-chevron-right">FAQ</p>
                </a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h5>Email</h5>
            <p>nisraut00@gmail.com</p>
            <h5>TELEPHONE</h5>
            <p>9843811378</p>
          </div>
          <div class="col-md-3">
            <h5>SOCIAL MEDIA</h5>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-linkedin"></i>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>

</html>
