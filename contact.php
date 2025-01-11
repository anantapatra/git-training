<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome To Website</title>
  <meta name="keyword" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="css/animate.css">
	<!-- css file load -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="assets/owlCarousel/owl.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="assets/css/main.css" type="text/css" />
</head>

<body>

  <!--header include start -->
  <?php include "header.php" ?>
  <!--header include end -->

  <!--page header section start-->
  <section class="page-banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-6">
          <div class="hero-content-wrap text-white position-relative fadeInUp animated">
            <h1 class="text-white">Contact Us</h1>
            <p class="lead">24/7 Expert Hosting Support Our Customers Love</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="img-wrap fadeInUp animated">
            <img src="assets/images/banner/call-center-support.svg" alt="email hosting" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--page header section end-->

  <!--our contact promo start-->
  <section class="section contact-promo-section">
    <div class="container">
      <div class="row justify-content-md-center justify-content-sm-center">
        <div class="col-md-4">
          <div class="card single-promo-card text-center pt-2 fadeInUp animated">
            <div class="card-body">
              <div class="pb-2">
                <span class="fas fa-envelope icon-size-lg color-primary"></span>
              </div>
              <div class="pt-2">
                <h5>Mail Us</h5>
                <p class="mb-0 text">sales@matrixinfoweb.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card single-promo-card text-center pt-2 fadeInUp animated">
            <div class="card-body">
              <div class="pb-2">
                <span class="fas fa-headset icon-size-lg color-primary"></span>
              </div>
              <div class="pt-2">
                <h5>Call</h5>
                <p class="mb-0 text">+91 8080222028/29</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card single-promo-card text-center pt-2 fadeInUp animated">
            <div class="card-body">
              <div class="pb-2">
                <span class="fas fa-map-marker-alt icon-size-lg color-primary"></span>
              </div>
              <div class="pt-2">
                <h5>Visit Us</h5>
                <p class="mb-0">341, Gala Complex, Gala Ind. Estate, Dumping Road, Mulund (W), Mumbai - 400080.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--our contact promo end-->

  <!--our contact section start-->
  <section class="contact-us-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-12 pb-3 message-box d-none">
          <div class="alert alert-danger"></div>
        </div>
        <div class="col-md-12 col-lg-12">
          <div class="contact-us-form-wrap bg-light position-relative">
            <form action="" method="POST" id="contactForm" class="contact-us-form fadeInUp animated" novalidate="true">
              <input type="hidden" name="csrfToken" id="csrfToken"
                value="bc23fef1e8ddd54fbe4b5da5f3c297d1dd37e757bbd180781b3cb385f14f3fe2">
              <div class="form-row">
                <div class="col-md-12 col-12">
                  <h2>Send Us a Message</h2>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name"
                      required="required">
                  </div>
                </div>
                 <div class="col-md-12 col-12">
                  <div class="form-group">
                    <input type="number" class="form-control" name="number" id="number" placeholder="Enter Number"
                      required="required">
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email"
                      required="required">
                  </div>
                </div>
                <div class="col-md-12 col-12">
                  <div class="form-group">
                    <textarea name="message" id="message" class="form-control" rows="5" cols="25"
                      placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="col-sm-12 mt-3 text-center">
                  <button type="submit" class="btn btn-primary" id="btnContactUs">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--our contact section end-->


  <!--Footer include start -->
  <?php include "footer.php" ?>
  <!--Footer include end -->


</body>

</html>