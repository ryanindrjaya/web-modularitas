<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Web Modularitas</title>
</head>

<body>

  <!-- Navbar -->
  <?php
  require(__DIR__ . '/komponen/nav-index.php');
  ?>

  <!-- Banner Image -->
  <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-white text-center">
      <h1>ABOUT US</h1>
    </div>
  </div>

  <div class="text-center">
    <img src="img/about1.png" class="rounded" alt="...">
  </div>

  <div class="text-center">
    <img src="img/about2.png" class="rounded" alt="...">
  </div>

  <!-- Content -->
  <div class="container my-5 d-grid gap-5">
    <div class="p-5 border">
      <h1 align="center">What Customers Say About Us</h1>
      <p><br /></p>
      <p align="center">
        The product is original, the accessories are complete, the quality is also very good, smooth, and fast response. thanks!!!
      </p>
      <hr>
      <p align="center">
        I give 5 stars, the service is very fast response and can give choices which basically can make customers more satisfied and not lose when buying gadgets. good job!!
      </p>
      <hr>
      <p align="center">
        At first, I was skeptical about all this, so I bought the cheapest phone i could find on this site. Their service was excellent to my surprise and the quality of the phone was great!
      </p>
      <hr>
      <p align="center">
        High quality product and service, this is a right place for you. Would definitely recommended to my friends and family.
      </p>
      <hr>
      <p align="center">
        I recommend to all of you who have a low budget but want to find a safe website with quality products. Friendly service and won't disappoint
      </p>
    </div>
  </div>

  <div class="card p-5">
    <div class="card-header">
      <h1>Frequently Asked Questions (FAQ)</h1>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What are the differences or advantages it has over the others
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">All the products we sell are original, legal, and 100% functional (including screens, battery health, etc.)</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            How can I make sure your gadget is fully functional?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">As a reminder, all gadgets sold on our website are 100% functional and legitimate. The gadget packaging comes with a QR code on the label linking to a detailed web report on the gadget’s generic information and the functional tests passed.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Is it safe to buy here?
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Yes,100% legitimate. All gadgets on our platform are 100% functional and comply with the Indonesian Government's strict regulations (Permendag No. 78 year 2019). All gadgets have passed 90+ functionality checkpoints test before you could find them here. We also have an ongoing and constant quality control monitoring over the products on our website.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
            Do you currently have a mobile application?
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">For the moment, we’re operating solely through our website, but subscribe to our newsletter for future changes!</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            When will I receive my order?
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">We will ship your order within 2-3 working days. Once shipped, you will receive a confirmation email to follow the status of your order.</div>
        </div>
      </div>
    </div>
  </div>

  <!-- FOOTER -->
  <?php
  require(__DIR__ . '/komponen/footer.php');
  ?>

  <!-- Bootstrap CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Script khusus untuk HOME PAGE!! -->
  <script src="home.js" type="text/javascript"></script>
</body>

</html>