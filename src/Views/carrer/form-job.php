<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-yellow">
                <h5 class="modal-title text-uppercase" id="exampleModalLongTitle">join with us</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pl-0 pr-0">
                <div class="bg-lightgrey3 pl-4 pr-4 pb-4 pt-0 text-center">
                    <h5 class="black-text font-weight-bold text-uppercase">apply for</h5>
                    <h3 class="text-yellow font-weight-bold"><?php echo $job ?></h3>
                    <p class="text-black mb-0"><?php echo $location ?></p>
                </div>
                <div class="pl-4 pr-4 pt-3">
                    <div class="text-center">
                        <p class="mb-4 text-black">Send your resume to us.</p>
                    </div>
                    <form id="contact-form" name="contact-form" action="mail-job.php" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    <label for="subject" class="">Your Name <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    <label for="subject" class="">Email <span class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="mobilenumber" name="mobilenumber" class="form-control"
                                        required>
                                    <label for="subject" class="">Mobile Number <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="position" name="position" class="form-control"
                                        value="<?php echo $job ?>" required>
                                    <label for="subject" class="">Position Applied <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <h6 class="text-black font-weight-bold">Upload either DOC, DOCX, PDF,<br /> or
                            TXT file types (8MB max)</h6>
                    </div>

                    <div class="p-1 text-center border-dotted rounded">
                        <div class=" bg-lightblue pt-4 pb-4">
                            <div class="file-upload-wrapper">
                                <input type="file" name="file" id="file" class="file-upload" data-max-file-size="8M" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center mt-4">
                    <a onclick="document.getElementById('contact-form').submit();"
                        class="btn bg-yellow text-uppercase font-weight-bold text-black btn-rounded d-inline-block mt-1"
                        data-toggle="modal" data-target="#exampleModalCenter">send</a>
                    <a href=""
                        class="btn btn-dark text-uppercase font-weight-bold text-yellow btn-rounded d-inline-block">close</a>
                </div>
            </div>
        </div>
    </div>
</div>