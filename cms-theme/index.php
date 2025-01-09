<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Culley & McAlpine</title>
  <meta name="description" content="solicitor website" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
</head>

<body>
 <?php
 include 'header.php'
 ?>

  <!-- Main Content -->
  <main class="container my-5">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 mb-4 mb-md-0">
        <img src="./assets/bridge.jpg" alt="header image" class="img-fluid rounded">
      </div>
      <div class="col-12 col-md-6">
        <h3>Welcome to Culley & McAlpine</h3>
        <p>We are one of the leading Solicitors firms based in Perth, Scotland.</p>
        <p>The Firm was founded in 2000, and our current team of solicitors has over 100 years of experience. </p>
        <p>Much of our work comes from referrals and repeat clients. We pride ourselves on delivering the highest
          standard of care and tailoring our services to best meet your needs.</p>
      </div>
    </div>
  </main>

  <!-- Get in touch -->
  <section class="bg-light py-5">
    <div class="container">
      <h3 class="text-center mb-4">Here's how to get in touch</h3>
      <div class="row text-center g-4">
        <!-- Opening Times -->
        <div class="col-12 col-md-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h4>Open Monday to Friday</h4>
              <p>9.00am-1.00pm</p>
              <p><strong>Closed for Lunch 1.00pm-2.00pm</strong></p>
              <p>2.00pm-5.00pm</p>
            </div>
          </div>
        </div>
        <!-- Contact Information -->
        <div class="col-12 col-md-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h4>Contact Information</h4>
              <div class="d-flex justify-content-center align-items-center">
                <img src="./assets/telephone.png" alt="telephone" width="20px" class="me-2" />
                <p>01738 626644</p>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <img src="./assets/fax.png" alt="fax" width="20px" class="me-2" />
                <p>01738 625511</p>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <img src="./assets/mail.png" alt="email" width="20px" class="me-2" />
                <p>enquiries@culleymcalpine.co.uk</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Address -->
        <div class="col-12 col-md-4">
          <div class="card h-100 shadow">
            <div class="card-body">
              <h4>Address</h4>
              <p>40 - 42 South Street</p>
              <p>PERTH</p>
              <p>PH2 8PD</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How to find us -->
  <section class="py-5">
    <div class="container">
      <h3 class="text-center mb-4">How to find us</h3>
      <div class="ratio ratio-16x9">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2208.2216793838434!2d-3.4283305999999896!3d56.39500100000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48863b110be51be5%3A0x53a57647bc371ba3!2sCulley%20%26%20McAlpine!5e0!3m2!1sen!2suk!4v1724323271098!5m2!1sen!2suk"
          allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

<?php 
include 'footer.php'
?>

  <!-- Bootstrap JS Bundle with Popper -->
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
