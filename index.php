<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="stylesheet" href="./assets/css/product.css">
  <link rel="stylesheet" href="./assets/css/splitting.css">
  <link rel="hdoahdi" href="./assets/css/splitting-cells.css">
  <!-- <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css"> -->

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

  <link rel="PHP" src="./wp-pages/nav.php" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet" />
  <title>Document</title>
</head>

<body>
  <?php include 'wp-pages/nav.php'; ?>
  <div class="margin-left">

    <div class="container">
      <h2>Carousel Example</h2>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="la.jpg" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="chicago.jpg" alt="Chicago" style="width:100%;">
          </div>

          <div class="item">
            <img src="ny.jpg" alt="New york" style="width:100%;">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <!-- START SEARCH BY CATEGORY -->

    <section class="full-box padding-50">
      <div class=" category-title" data-splitting>
        <span>Search By Category</span>
      </div>
      <div class="card-container">
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-engine.svg" alt="">
          </div>
          <span class="card-content">Engine</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-gear.svg" alt="">
          </div>
          <span class="card-content">Transmission</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-brakes.svg" alt="">
          </div>
          <span class="card-content">Brakes</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-suspension.svg" alt="">
          </div>
          <span class="card-content">Suspension</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-electrical-system.svg" alt="">
          </div>
          <span class="card-content">Electrical System</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-cooling-system.svg" alt="">
          </div>
          <span class="card-content">Cooling System</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-exhaust-system.svg" alt="">
          </div>
          <span class="card-content">Exhaust System</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-steering-system.svg" alt="">
          </div>
          <span class="card-content">Steering System</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-fuel-system.svg" alt="">
          </div>
          <span class="card-content">Fuel System</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-body-and-exterior.svg" alt="">
          </div>
          <span class="card-content">Body and Exterior</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-Interior-components.svg" alt="">
          </div>
          <span class="card-content">Interior Components</span>
        </div>
        <div class="card cursor">
          <div class="card-icon">
            <img src="./assets/images/icon-wheels-and-tires.svg" alt="">
          </div>
          <span class="card-content">Wheels and Tires</span>
        </div>

      </div>
    </section>

    <!-- END SEARCH BY CATEGORY -->


    <section class="full-box padding-50">
      <div class="category-title" data-splitting>
        <span>Why Choose Aftermarket Products</span>
      </div>

      <div class="card-container">
        <div class="card">
          <div class="card-icon">
            <img src="./assets/images/icon-original-products.svg" alt="">
          </div>
          <span class="aftermarket-title">Original Products</span>
          <p class="simple-word">Only reliable parts from trusted Aftermarket brands</p>
          <div class="card-bott-dot">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <img src="./assets/images/icon-affordable-rates.svg" alt="">
          </div>
          <span class="aftermarket-title">Affordable Rates</span>
          <p class="simple-word">Repairing a damaged vehicle can be expensive. Using the aftermarket products is a good solution if you're on a budget</p>
          <div class="card-bott-dot">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div class="card">
          <div class="card-icon">
            <img src="./assets/images/icon-engine.svg" alt="">
          </div>
          <span class="card-content">Engine</span>
          <div class="card-bott-dot">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

      </div>
    </section>
  </div>
  <!-- <script src="360deg.js"></script> -->
  <script src="/assets/js/splitting.min.js"></script>
  <script>
    Splitting();
  </script>
</body>

</html>