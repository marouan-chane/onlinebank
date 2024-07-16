<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Authentication.css">
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
            <li class="step-wizard-item current-item">
                <span class="progress-count">1</span>
                <span class="progress-label">Billing Info</span>
            </li>
            <li class="step-wizard-item ">
                <span class="progress-count">2</span>
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
        <form method="post" action="">
          <label for="ID_Pypale">PYPALE ID</label>
          <input type="text" id="ID_Pypale" name="ID_Pypale" placeholder="Name,User Name,Email,Phone number of PyPale acount">
          <label for="amount">Amount In dollar</label>
          <input type="text" id="amount" name="amount" placeholder="Please enter the amount you want to send">
          <input type="submit" value="Next">
        </form>
      </div>
      </div>
    </section>
  </body>
</html>