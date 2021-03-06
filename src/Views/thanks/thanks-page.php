<!-- <div class="container our-sevice"> -->
<?php 
    require_once APP_ROOT . '/src/Views/layouts/meta.php';
    require_once APP_ROOT . '/src/Views/layouts/header.php';
?>
<div class="thanks-page">
    <div class="container">
        <div class="row pt-3">
            <div class="col-lg-6 col-md-6 text-left">
                <h1 class="font-weight-bold text-uppercase text-black">THANKYOU!</h1>
                <p class="text-black">Thank you for submitting your inquiries, we will contact you shortly</p>
                <div class="pt-5 pb-5">
                    <a href="home" class="btn bg-yellow btn-rounded text-uppercase text-black font-weight-bold mb-4">BACK TO HOME</a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 text-right" id="mobile-hidden">
                <img class="img-fluid" src="../assets/img/logo/ic-thanks.png">
            </div>
        </div>
    </div>
</div>
<?php 
    require_once APP_ROOT . '/src/Views/layouts/footer.php';
    require_once APP_ROOT . '/src/Views/layouts/script.php';
?>