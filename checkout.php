<?php
session_start();

if (isset($_POST['checkout'])) {
  $grand_total = $_POST['grand_total'];
  // Remove commas and convert to float
  $grand_total = (float) str_replace(',', '', $grand_total);
  $grand_total = number_format($grand_total, 2, '.', ',');
  $_SESSION['total'] = $grand_total;
} else {
  $grand_total = (float) str_replace(',', '', 0);
  $_SESSION['total'] = $grand_total;
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
      <h2 class="display-6 fw-bold text-center">Check Out</h2>
      <hr class="my-3 mx-auto" />

      <div class="row justify-content-center">
        <div class="col-md-6">
          <form method="post" action="place_order.php">
            <div class="row g-2">
              <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control rounded-0" id="name" value="Testing User" name="name" />
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control rounded-0" id="email" value="example.test@gmail.com" name="email" />
              </div>
              <div class="col-md-6">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control rounded-0" id="phone" value="081234567890" name="phone" />
              </div>
              <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control rounded-0" id="city" value="Phnom Penh" name="city" />
              </div>
              <div class="col-md-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control rounded-0" id="address" value="123 Main St, Phnom Penh" name="address" />
              </div>


              <div class="d-flex gap-3 align-items-center justify-content-end">
                <h5 class="fw-bold mt-1">Total:</h5>
                <p class="fs-4 mb-1">
                  $<span id="cart-grand-total"><?php echo $grand_total; ?></span>
                </p>
              </div>
              <div class="col-md-12 d-flex justify-content-end">
                <!-- Show the grand total amount -->

                <button type="submit" class="btn btn-checkout" type="submit" name="place_order">
                  Check Out
                </button>
              </div>
            </div>
          </form>
        </div>
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