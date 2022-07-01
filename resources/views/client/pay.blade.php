<script src="https://checkout.flutterwave.com/v3.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/pay.css') }}" media="screen" />
<title>Payment</title>
<form>
  <center>
    <div>
      <h3><b><i>Your order is<span style="color:purple;"> KES 54,600</span></i></b></h3>
      <button type="button" id="start-payment-button" onclick="makePayment()">Pay Now</button><br>
      <img src="{{ asset('images/HIRE N DRIVE.png') }}">
    </div>
    <link rel="icon" type="image/png" href="{{ asset('images/download.png') }}">
    <style>
      body {
        background-image: url("/images/bg.jpg");
        background-size: cover;
        text-decoration-color: whitesmoke;
      }

      div {
        width: 300px;
        height: 210px;
        background-color: white;
        text-align: center;
        padding: 20px;
        padding-bottom: 20px;
      }

      img {
        width: 115px;
        height: 115px;
      }
    </style>
  </center>
</form>
<script>
  function makePayment() {
    FlutterwaveCheckout({
      public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
      tx_ref: "titanic-48981487343MDI0NzMx",
      amount: 54600,
      currency: "KES",
      payment_options: "card, banktransfer, ussd,mobilemoney",
      redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
      meta: {
        consumer_id: 23,
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "esther.gacheru@strathmore.edu",
        phone_number: "254799838487",
        name: "Esther Nyangendo Gacheru",
      },
      customizations: {
        title: "HireNDrive",
        description: "Payment for your hired car",
        logo: "download.png",
      },
    });
  }
</script>