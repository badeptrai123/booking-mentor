<?php
include 'layout/header.php';
?>
<div id="wrapper-checkout">
  <div id="checkout">
      <div class="row">
        <div class="col-md-7 col-lg-8">
          <h3>Checkout</h3>
          <form action="./checkoutConfirm.php">
          <div class="contentCheckout bg-white">
            <h4>Personal Information</h4>
            <div class='borderDash'></div>
            <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                    <label for="firstName" class="form-label" style='font-weight:600;'>First Name</label>
                    <input type="text" placeholder="Enter Name" id='firstName' class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 item">
                <label for="lastName" class="form-label" style='font-weight:600;'>Last Name</label>
                    <input type="text" placeholder="Enter Name" id='lastName' class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                <label for="email" class="form-label" style='font-weight:600;'>Email</label>
                    <input type="text" placeholder="Enter Email" id='email' class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 mt-4">
                <label for="phoneNumber" class="form-label" style='font-weight:600;'>Phone Number</label>
                    <input type="text" placeholder="Enter Number" id='phoneNumber' class="form-control">
                </div>
            </div>
            <h4>Payment Method</h4>
            <div class='borderDash'></div>
            <div class="d-flex align-items-center mb-3">
                <input class="bg-black mr-2"  type="radio" name="checkout" id="creditCard">
                <label class="form-check-label typeCheckout" for="creditCard">
                    Credit Card
                </label>
            </div>
            <div class="row mb-4">
                <div class="col-md-6 col-sm-12">
                    <label for="nameOnCard" class="form-label" style='font-weight:600;'>Name on Card</label>
                    <input type="text" placeholder="Enter Name" id='nameOnCard' class="form-control">
                </div>
                <div class="col-md-6 col-sm-12 item">
                <label for="cardNumber" class="form-label" style='font-weight:600;'>Card Number</label>
                    <input type="text" placeholder="Enter Name" id='cardNumber' class="form-control">
                </div>
                <div class="col-md-6 mt-4 col-sm-12">
                <label for="expiredDate" class="form-label" style='font-weight:600;'>Expiry Date</label>
                    <input type="text" placeholder="Enter Date" id='expiredDate' class="form-control">
                </div>
                <div class="col-md-6 mt-4 col-sm-12">
                <label for="cvv" class="form-label" style='font-weight:600;'>CVV</label>
                    <input type="text" placeholder="CVV" id='cvv' class="form-control">
                </div>
            </div>
            <div class="d-flex align-items-center mb-3">
                <input class="bg-black mr-2"  type="radio" name="checkout" id="creditCard">
                <label class="form-check-label typeCheckout" for="creditCard">
                    PayPal
                </label>
            </div>
            <div class="d-flex align-items-center mb-3">
                <input class="bg-black mr-2 accepted"  type="checkbox">
                <label class="form-check-label labelAccept" for="creditCard">
                    I have read and accepted Terms & Conditions
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-confirm-booking">Confirm Booking</button>
          </div>
        </div>
        </form>
        <div class="col-md-5 col-lg-4">
          <h3>Booking Summary</h3>
          <div class="contentBooking bg-white">
          <div class="infoPersonal">
                <div class="row ">
                    <div class="col-md-5">
                    <img src="assets/images/avatar.png" class="w-100 h-100 object-fit-cover" alt="">
                    </div>
                    <div class="col-md-7 d-flex justify-content-center align-items-md-start flex-column">
                        <div class='namePerson'>John Perrin</div>
                        <div class="d-flex align-items-center mt-2">
                            <i class="fa-solid fa-star mr-1"></i>
                            <span>4.8</span>
                        </div>
                        <div class='jobName mt-3'>Digital Marketing</div>
                    </div>
                </div>
            </div>
            <div class='borderDash'></div>
            <div class="infoBooking">
                <div class="d-flex justify-content-between align-items-center">
                    <span class='name'>Date</span>
                    <span class='value'>23-12-2023</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class='name'>Time</span>
                    <span class='value'>10:00 AM</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class='name'>Consulting Fee</span>
                    <span class='value'>$100</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class='name'>Booking Fee</span>
                    <span class='value'>$10</span>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <span class='name'>Video Call</span>
                    <span class='value'>$50</span>
                </div>
            </div>
            <div class='borderDash'></div>
            <div class="d-flex justify-content-between align-items-center summary mb-3">
                <span class='total'>Total</span>
                <span class='value'>$160</span>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php
include 'layout/footer.php';
?>