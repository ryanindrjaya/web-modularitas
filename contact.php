<html>

<body>

  <?php
  require(__DIR__ . '/komponen/nav-index.php');
  ?>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Web Modularitas</title>
  </head>

  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-white text-center">
      <h1>CONTACT US</h1>
    </div>
  </div>

  <section class=" contact section-padding" id="contact">
    <div class="container">
      <div class="row">

        <div class="col-lg-7 col-12 mx-auto">
          <br><br>
          <h2 class="mb-4 text-center" data-aos="fade-up">Dont' be shy, write to us</h2>
          <br><br>
          <div class="col-lg-6 col-6">
            <label for="name" class="form-label"><b>Name<b> <sup class="text-danger">*</sup></label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
          </div>

          <div class="col-lg-6 col-6">
            <br><label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>
            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
          </div>

          <div class="col-lg-6 col-6">
            <br><label for="number" class="form-label"><b>Phone Number<b> <sup class="text-danger">*</sup></label>
            <input type="text" name="number" id="name" class="form-control" placeholder="Your Phone Number" required>
          </div>

          <div class="col-12 my-4">
            <label for="message" class="form-label">How can we help?</label>
            <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>
          </div>

          <div class="col-12">
            <label for="services" class="form-label">Services<sup class="text-danger">*</sup></label>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-check">
              <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input">
              <label class="form-check-label" for="checkbox1">Branding</label>
            </div>
          </div>

          <div class="col-lg-4 col-12 my-2 my-lg-0">
            <div class="form-check">
              <input type="checkbox" id="checkbox2" name="checkbox2" class="form-check-input">
              <label class="form-check-label" for="checkbox2">Digital Experiences</label>
            </div>
          </div>

          <div class="col-lg-4 col-12">
            <div class="form-check">
              <input type="checkbox" id="checkbox3" name="checkbox3" class="form-check-input">
              <label class="form-check-label" for="checkbox3">About Our Product</label>
            </div>
          </div>
        </div>

        <div class="col-lg-5 col-12 mx-auto mt-5 submit-btn">
          <button type="submit" class="form-control submit-btn">Send Message</button><br>
        </div>
      </div>

    </div>
  </section>

  <?php
  require(__DIR__.'/komponen/footer.php');
  ?>

</body>

</html>