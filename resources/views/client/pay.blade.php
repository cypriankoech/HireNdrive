<script src="https://checkout.flutterwave.com/v3.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/pay.css') }}" media="screen" />

<form>
    <div>
    Your order is KES54,600
  </div>
  <button type="button" id="start-payment-button" onclick="makePayment()">Pay Now</button>
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
        logo: "c:\Users\nyang\downloads\logo.png",
      },
    });
  }
</script>
