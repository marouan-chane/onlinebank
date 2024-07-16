<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Payement.css">
    <title></title>
  </head>
  <body>
    <section>
      <header>
        <div class="navigation">
          <img src="images.jpeg">
        </div>
      </header>
      <div class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item">
                <a href="Authentication.html"><span class="progress-count">1</span></a>
                <span class="progress-label">Billing Info</span>
            </li>
            <li class="step-wizard-item current-item">
                <span class="progress-count ">2</span>
                <span class="progress-label">Payment Method</span>
            </li>
            <li class="step-wizard-item " >
                <span class="progress-count">3</span>
                <span class="progress-label">Checkout</span>
            </li>
        </ul>
      </div>
      <div class="content">
        <div class="platforme">
          <form method="post" action="checkout.php">
          <label for="ID_Pypale"> RIB</label>
          <input type="text" id="ID_Pypale" name="ID_Pypale" placeholder="Enter your card RIB">
      
          <label for="amount">CVV</label>
          <input type="text" id="amount" name="amount" placeholder="Enter your card CVV">

          <label for="amount">Card Expiration Date</label>
          <input type="text" id="amount" name="amount" placeholder="Enter your card expiration date">
          <input type="submit" value="Next">
        </form>
      </div>
      </div>
    </section>
  </body>
</html>