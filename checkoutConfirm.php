<?php
include 'layout/header.php';
?>
<div id="wrapper-checkout-confirm">
  <div class="container">
    <div class="row">
      <div class="col-12 mx-auto" id="checkoutConfirm">
        <h3>Confirmation</h3>
        <div class="d-flex flex-column justify-content-center align-items-center mt-3 bg-white border" id='confirm'>
            <i class="fa-solid fa-circle-check"></i>
            <div class="d-flex flex-column justify-content-center align-items-center" style='border-bottom:1px dashed #C2C7D0;'>
                <div class="font-weight-bold my-4 titleSuccess">Appointment Booked Successfully</div>
                <span class="description pb-4">Appointment booked with Darren Elderon 12 Nov 2023 5:00PM to 6:00PM</span>
            </div>
            
            <button class='mt-4' id='btn-view-invoice'>View Invoice</button>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include 'layout/footer.php';
?>