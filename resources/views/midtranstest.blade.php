@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />

  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/13a7b28a80.js" crossorigin="anonymous"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="style/style.css" />

  <!-- logo title -->
  <link rel="icon" href="Assets/img/logo-homindo.svg" type="image/x-icon" />
  <!-- Midtrans-->
  <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-vCpvH1Y6r3kkUWqn"></script>
  <title>HOMINDO</title>
</head>

<body>
  <button type="submit" class="btn btn-danger w-100 mt-4" id="pay-button">Pay Now</button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
      window.snap.pay('{{ $snap_token }}', {
        onSuccess: function(result) {
          /* You may add your own implementation here */
          function alert() {
            success('SuccessAlert', 'Lorem ipsum dolor sit amet.');
          }
        },
        onPending: function(result) {
          /* You may add your own implementation here */
          alert("wating your payment!");
          console.log(result);
        },
        onError: function(result) {
          /* You may add your own implementation here */
          alert("payment failed!");
          console.log(result);
        },
        onClose: function() {
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      })
    });
  </script>
</body>

</html>