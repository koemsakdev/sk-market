<?php
session_start();
// Check if the cartsession is set, then remove it
if (isset($_SESSION['cart'])) {
  unset($_SESSION['cart']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SK Market</title>
  <link rel="shortcut icon" href="assets//public/favicon.ico" type="image/x-icon" />
  <link href="libs/animate/animate.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="libs/swiper-bundle.min.css" />
  <link rel="stylesheet" href="libs/fontawesome-6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="libs/boostrap-5.3.3/css/bootstrap.min.css" />
  <link rel="stylesheet" href="libs/owlcarousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/style-responsive.css" />
</head>

<body class="overflow-hidden">
  <input type="hidden" name="page" value="cart" id="pages" />
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <span class="loader"></span>
  </div>
  <!-- Spinner End -->

  <div id="navbar"></div>

  <!-- Register Form Start -->
  <section class="my-5 py-5">
    <div class="container py-2">
      <h2 class="display-6 fw-bold text-center text-success">Your Order has been placed successfully</h2>
      <hr class="my-3 mx-auto" />
      <p class="text-muted text-center">You can check out your order by going to the <a href="my_orders.php"
          class="text-success">My Orders</a> page.</p>
      <div class="d-flex justify-content-center">
        <a href="index.php" class="btn btn-checkout rounded-0">Continue Shopping <i
            class="fa fa-arrow-right ms-2"></i></a>
      </div>
    </div>
  </section>
  <!-- Register Form End -->

  <div id="footer"></div>

  <script src="libs/swiper-bundle.min.js"></script>
  <script src="libs/fontawesome-6.6.0/js/all.min.js"></script>
  <script src="libs/boostrap-5.3.3/js/popper.min.js"></script>
  <script src="libs/boostrap-5.3.3/js/bootstrap.min.js"></script>
  <script src="libs/jquery-3.7.1.min.js"></script>
  <script src="libs/wow/wow.min.js"></script>
  <script src="libs/easing/easing.min.js"></script>
  <script src="libs/waypoints/waypoints.min.js"></script>
  <script src="libs/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>

</html>