
<?php
//require 'config.php';

$grand_total = 0;
$allItems = '';
$items = [];

$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
// $stmt = $conn->prepare($sql);
// $stmt->execute();
// $result = $stmt->get_result();
// while ($row = $result->fetch_assoc()) {
//   $grand_total += $row['total_price'];
//   $items[] = $row['ItemQty'];
// }
// $allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Gacheru">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
</head>

<body>
<style>
  header {
    position: relative;
  }
</style>
<header>
        <a href="{{ asset('storage/file.txt') }}" class="logo"><img src="images/download.png" alt=""></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="{{ route('home') }}">Home</a></li>
        </ul>
        <div class="header-btn">
            @guest
            @if (Route::has('login'))
            <a href="{{ route('login') }}" class="register">{{ __('Register') }}</a>
            @endif

            @if (Route::has('register'))
            <a href="{{ route('login') }}" class="login">{{ __('Login') }}</a>
            @endif
            @else
            <a href="#" class="register">{{ Auth::user()->name }}</a>
            <a class="login" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </header>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <!-- <h6 class="lead"><b><i>Car : </i></b>$car['model'] </h6> -->
          <!-- <h6 class="lead"><b>Pickup Charge : </b>Free</h6> -->
          <h5><b>Total Amount Payable : </b><?= number_format($grand_total, 2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <!-- <input type="hidden" name="car" value="$car['id'] "> -->
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ Auth::user()->name }}" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Enter E-Mail"  value="{{ Auth::user()->email }}" required>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>
          </div>
          <h6 class="text-center lead"><b><i>Select Payment Mode</i></b></h6>
          <div class="dropdown">

            <div id="myDropdown1" class="dropdown-content">
              <a href="#Cash" onclick="Cash()"><span style="color:black">Cash on Pickup</a> <br>
              <a href="#Mobile" onclick="Mobile()"><span style="color:black">Mobile Money</a> <br>
              <a href="#Card" onclick="Card()"><span style="color:black">Debit/Credit Card</a>

            </div>
          </div>
          <script>
            function programmingList() {
              document.getElementById("myDropdown1").classList.toggle("show");
            }

            function Cash() {
              window.location.replace("End.php");
            }

            function Mobile() {
              window.location.replace("Pay.php");
            }

            function Card() {
              window.location.replace("Pay.php");
            }
          </script>
          <!--  <div class="form-group">
            
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block"> 
          </div>
        </form>
      </div> -->
      </div>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

    <script type="text/javascript">
      $(document).ready(function() {

        // Sending Form data to the server
        $("#placeOrder").submit(function(e) {
          e.preventDefault();
          $.ajax({
            url: 'action.php',
            method: 'post',
            data: $('form').serialize() + "&action=order",
            success: function(response) {
              $("#order").html(response);
            }
          });
        });

        // Load total no.of items added in the cart and display in the navbar
        load_cart_item_number();

        function load_cart_item_number() {
          $.ajax({
            url: 'action.php',
            method: 'get',
            data: {
              cartItem: "cart_item"
            },
            success: function(response) {
              $("#cart-item").html(response);
            }
          });
        }
      });
    </script>
</body>

</html>