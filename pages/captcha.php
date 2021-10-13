<!-- captcha import -->
    <link href="../../assets/js/puzzle-captcha/slidercaptcha.min.css" rel="stylesheet" />
    <script src="../../assets/js/puzzle-captcha/longbow.slidercaptcha.js"></script>
<div class="modal fade" id="captchaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document" style="height:100vh !important">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h5 class="modal-title text-uppercase text-center" id="exampleModalLongTitle">Slide Puzzle to Submit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pl-0 pr-0 pb-4">
            <div class="slidercaptcha">
                <div>
                    <div id="captcha"></div>
                </div>
            </div>
            <div class="modal-footer bg-transparent"></div>
            </div>
        </div>
    </div>
</div>