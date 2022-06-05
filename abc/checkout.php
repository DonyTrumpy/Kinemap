<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// require '../vendor/autoload.php';
require_once('../stripe/init.php');


// include('../vendor/stripe/stripe-php/init.php');
// require_once('../vendor/stripe/stripe-php/config.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Kinemap | Sign Up</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../js/bootstrap.min.css">
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <script src="https://js.stripe.com/v3/"></script>

<style>

  @import url('https://fonts.googleapis.com/css?family=Montserrat');
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

  body {
    font-family: 'Montserrat', sans-serif;
    background-color: #fff;
    color: #C1B846;
  }


  ::selection{
  background-color:#49E038;
  color:#fff;
  }


  ::-webkit-scrollbar {
  	background: #ddd;
  	width: 12px;
  }

  ::-webkit-scrollbar-track {
  	box-shadow: inset 0 0 10px #00000070;
  	border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
  	background: #3E3A3A;
  	border-radius: 10px;
  }

  nav{
    display: flex;
    height: 70px;
    width: 90%;
    background: #fff;
    align-items: center;
    justify-content: space-between;
    padding: 0 50px 0 100px;
    flex-wrap: wrap;
    border-bottom: 2px solid rgba(255,255, 255, 0.2);
    border-top: 2px solid rgba(255,255, 255, 0.2);
    position: sticky;
    top: 0;
    border-bottom-color:#059041;
  }
  @media screen and (min-width: 851px) {
  nav {
      width:88.2%;
    }
  }
  @media screen and (max-width: 850px) {
    nav {
      width:68.2%;
    }
  }

  nav ul{
    display: flex;
    flex-wrap: wrap;
    list-style: none;
  }
  nav ul li{
    padding-top:15px;
    padding-bottom:15px;
    margin-left: 3vw;
  }
  nav ul li a{
    color: #000;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;
  }

  nav ul li:hover{
    background: #059041;
  }
  nav .menu-btn i{
    color: #fff;
    font-size: 22px;
    cursor: pointer;
    display: none;
  }


  @media (max-width: 920px) {
    nav .menu-btn i{
      display: block;
    }

    nav ul{
      position: fixed;
      top: 80px;
      left: -300%;
      background: #111;
      height: 100vh;
      width: 100%;
      text-align: center;
      display: block;
      transition: all 0.3s ease;
    }

    nav ul li a:hover{
      background: none;
    }
  }









.hovv:hover{color:#fff; text-decoration: none;}


  .popup .overlay {
    position:fixed;
    top:0px;
    left:0px;
    width:100vw;
    height:190vh;
    background:rgba(0,0,0,0.7);
    z-index:1;
    display:none;
  }

  .popup .content {
    position:absolute;
    top:40%;
    left:50%;
    border-radius: 16px;
    transform:translate(-50%,-50%) scale(0);
    background:#fff;
    color:#059041;
    width:500px;
    height:350px;
    z-index:2;
    text-align:center;
    padding:20px;
    box-sizing:border-box;
    font-family:"Open Sans",sans-serif;
  }

  .popup .close-btn {
    cursor:pointer;
    position:absolute;
    right:20px;
    top:20px;
    width:30px;
    height:30px;
    background:#222;
    color:#fff;
    font-size:25px;
    font-weight:600;
    line-height:30px;
    text-align:center;
    border-radius:50%;
  }

  .popup.active .overlay {
    display:block;
  }

  .popup.active .content {
    transition:all 300ms ease-in-out;
    transform:translate(-50%,-50%) scale(1);
  }

  #PopPop {
    position:absolute;
    top:17px;
    left:85%;
    transform:translate(-98%,-5%);
    border:none;
    color:#222;
    font-family: 'Montserrat', sans-serif;
    background:#fff;
    padding:5px 3px;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    letter-spacing: 1px;

  }
  #PopPop:hover{background:#059041;color:#fff;}

  #a{color:#000; text-decoration: none;}
  #a:hover{background:#059041;color:#fff;}

@media screen and (max-width: 450px){#PopPop{left:90%;}}

#Logo{margin-left:30px;}

@media screen and (max-width: 850px) {
  #Logo {
    margin-left:0px;
  }
}
@media screen and (max-width: 450px){#Logo{margin-left: -80px;}}

#WTFF{display:none;height: 40px;width:100%;background:#059041;border-bottom-left-radius:18px;border-bottom-right-radius: 18px;}
@media screen and (max-width: 920px) {
  #WTFF {
    display: block;
  }
  #WTFF a{color:#fff;text-decoration: none;margin-left: 15vw;}
}
@media screen and (max-width: 450px){#WTFF a{margin-left: 7vw;}}

.container1{
  position: relative;
  width:35%;
  margin:20px;
  height:200px;
  background:#059041;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}

.container1:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}

#h11 {
  color: #fff;
  font-weight:500;


  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:35%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h11 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h11 {
    font-size: 14px;left:8vw;
  }
}


.container2{
  position: relative;
  width: 35%;
  margin:20px;
  height:200px;
  background:#C28F36;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}
.container2:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h12 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:35%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h12 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h12 {
    font-size: 14px;left:8vw;
  }
}


.container3{
  position: relative;
  width:35%;;
  margin:20px;
  height:200px;
  background:#2D754C;
  color:#fff;
  display:flex;
  justify-content: space-between;
  align-items:center;
  border-radius: 12px;
  left: 30%;
  text-decoration: none;
}
.container3:hover{left:29%; box-shadow: 5px 10px #888888; transition:0.3s;}
#h13 {
  color: #fff;
  font-weight:500;
  font-size:2vw;
  letter-spacing:2px;
  margin-bottom:150px;
  margin-left:36%;

  border-radius:8px;
}

@media screen and (min-width: 851px) {
#h13 {
    font-size: 24px;
  }
}
@media screen and (max-width: 850px) {
  #h13 {
    font-size: 14px;left:8vw;
  }
}




.P{position:absolute;top:30%;left:14vw;text-decorations:none;align-items: center;}
@media screen and (min-width: 851px) {
.P {
    font-size: 14px;
  }
}
@media screen and (max-width: 850px) {
  .P {
    font-size: 12px;
    left:8vw;
  }
}


.Price{}

#Nice{position: absolute;left:18%;top:-80%;}


</style>


  </head>

    <body>
      <nav >
           <img src = "../images/KinemapFullLogooo.png" id="Logo" alt = "Logo" onclick="window.location='../'"
           style ="width: 142px; height : 50px;" >

           <ul>
     <li><a class="hovv" href="../home/home_en.php">HOME</a></li>
     <li><a class="hovv" href="../map/map_en.php">MAP</a></li>
     <li><a class="hovv" href="../login/login.php">LOG IN | SIGN UP</a></li>

     </ul>

          <div id="WTF">

          </div>

     </nav>


     <div id="WTFF">
       <a href="../home/home_en.php">HOME</a>
       <a href="../map/map_en.php">MAP</a>
       <a href="../login/login.php">LOG IN | SIGN UP</a>
     </div>



      <div class="popup" id="popup-1">
        <div class="overlay"></div>
        <div class="content">
          <div class="close-btn" onclick="togglePopup()">&times;</div>
          <h1>Select a language</h1><br><br>
          <a id="a" href="../source/select_plans.php"> English</a><br><br>
          <a id="a" href="../source/select_plans_fr.php"> Français</a><br><br>
          <a id="a" href="../source/select_plans_ne.php"> Nederlands</a><br><br>
          <a id="a" href="../source/select_plans_de.php"> Deutsch</a>
        </div>
      </div>

      <button id="PopPop" onclick="togglePopup()">Language</button>
      <script type="text/javascript">
      function togglePopup(){
      document.getElementById("popup-1").classList.toggle("active");
      }
      </script>



      <?php
        // Set your secret key. Remember to switch to your live secret key in production!
        // See your keys here: https://dashboard.stripe.com/account/apikeys
            $price_plan = $_GET['price'] * 100;
            try {

              //Test
              // \Stripe\Stripe::setApiKey('sk_test_51H7IJCDMthw1GFyQKBjXBj3GLcKA8vY49PyTxAACEdTjtFv4vLo7UR2hoim4boDxGOfmpnvGYpve26PtktCc0VBv00MGRhW383');

              //Live
              \Stripe\Stripe::setApiKey('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');

                $intent = \Stripe\PaymentIntent::create([
                  'amount' => $price_plan,
                  'currency' => 'eur',
                  // Verify your integration in this guide by including this parameter
                  'metadata' => ['integration_check' => 'accept_a_payment'],
                ]);
            } catch(\Stripe\Exception\CardException $e) {
              // Since it's a decline, \Stripe\Exception\CardException will be caught
               $body = $e->getJsonBody();
                $err  = $body['error'];
               print('Status is:' . $e->getHttpStatus() . "\n");
                print('Type is:' . $err['type'] . "\n");
                print('Code is:' . $err['code'] . "\n");
                // param is '' in this case
                print('Param is:' . $err['param'] . "\n");
                print('Message is:' . $err['message'] . "\n");
            } catch (\Stripe\Exception\RateLimitException $e) {
              // Too many requests made to the API too quickly
              alert("Too many requests made to the API too quickly");
            } catch (\Stripe\Exception\InvalidRequestException $e) {
              // Invalid parameters were supplied to Stripe's API
              alert("Invalid parameters were supplied to Stripe's API");
            } catch (\Stripe\Exception\AuthenticationException $e) {
              // Authentication with Stripe's API failed
              // (maybe you changed API keys recently)
              alert("Authentication with Stripe's API failed");
            } catch (\Stripe\Exception\ApiConnectionException $e) {
              // Network communication with Stripe failed
              alert("Network communication with Stripe failed");
            } catch (\Stripe\Exception\ApiErrorException $e) {
              // Display a very generic error to the user, and maybe send
              // yourself an email
              alert("Display a very generic error to the user, and maybe send");
            } catch (Exception $e) {
              // Something else happened, completely unrelated to Stripe
              alert("completely unrelated to Stripe");
            }




   ?>

<script>
// Set your publishable key: remember to change this to your live publishable key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
// Test
// var stripe = Stripe('pk_test_51H7IJCDMthw1GFyQ44S8MN3KL1NH4QIZutzE5aqyK5bu7C7tDBLgZY15OU1w627Bwdx0eggOfROC7OH8fGqtMXmg00Qb6IgMnN');
//Live
var stripe = Stripe('pk_live_51H7IJCDMthw1GFyQA71FrI3CsWOS2QQFMfTizWW1LbgGKlNVCICKv76zHzGVA1unb6U1rJ8PcmXYS4bN3wC68ynx00B6tzKF5t');
var elements = stripe.elements();
</script>

          <!-- Style this section to make changes on stripe checkout Alex (Muhammad Zubair)-->
          <div class="row"  style="margin-bottom: 250px;"></div>

            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-3">
                <h4 id="Nice">Total Amount: €<?php echo $_GET['price']; ?></h4>
                <form id="payment-form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Card Name</label>
                    <input type="text" class="form-control" id="full_name" placeholder="Enter name" required=>
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                      <div id="card-element">
                      <!-- Elements will create input elements here -->
                      </div>
                  </div>
                  <!-- We'll put the error messages in this element -->
                  <div class="form-group">
                    <div id="card-errors" role="alert"></div>
                  </div>

                  <div>
                    <br>
                    <div class="form-group" style="text-align: center;">
                      <button id="submit" class="btn btn-success btn-lg" style="border-radius: 12px;width: 50%;">Pay</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
          <!-- Style Above from this section to make changes on stripe checkout Alex (Muhammad Zubair)-->
<script type="text/javascript">
  var clientSecret = '<?php echo $intent->client_secret; ?>';
  var elements = stripe.elements();
  var style = {
    base: {
      color: "#32325d",
    }
  };

    var card = elements.create("card", { style: style });
    card.mount("#card-element");



    card.on('change', ({error}) => {
      const displayError = document.getElementById('card-errors');
      if (error) {
        displayError.textContent = error.message;
      } else {
        displayError.textContent = '';
      }
    });


    var form = document.getElementById('payment-form');


    form.addEventListener('submit', function(ev) {
      document.getElementById("submit").disabled = true;
      var full_name = document.getElementById("full_name").value;
      ev.preventDefault();
      stripe.confirmCardPayment(clientSecret, {
        payment_method: {
          card: card,
          billing_details: {
            name: full_name
          }
        }
      }).then(function(result) {
        if (result.error) {
          document.getElementById("submit").disabled = false;
          // Show error to your customer (e.g., insufficient funds)
        } else {
          // The payment has been processed!
          if (result.paymentIntent.status === 'succeeded') {
            window.location = "../abc/signup.php?plan=<?php echo $_GET['plan']; ?>&price=<?php echo $_GET['price']; ?>";
            // Show a success message to your customer
            // There's a risk of the customer closing the window before callback
            // execution. Set up a webhook or plugin to listen for the
            // payment_intent.succeeded event that handles any business critical
            // post-payment actions.
          }
        }
      });
    });
</script>


  </body>
</html>
