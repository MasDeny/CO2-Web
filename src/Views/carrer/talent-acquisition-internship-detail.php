<?php 
    require_once APP_ROOT . '/src/Views/layouts/meta.php';
    require_once APP_ROOT . '/src/Views/layouts/header.php';
?>
    <section class="job-opening">
        <div class="container">
            <div class="pt-5 pb-5">
                <div class="row mb-5">
                    <div class="col-lg-6 col-md-6">
                        <h5 class="font-weight-bold text-uppercase text-black mb-4">job openings</h5>
                        <h1 class="font-weight-bold text-yellow">Talent Acquisition Internship</h1>
                        <p class="text-black">Yogyakarta, Indonesia</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5 class="font-weight-bold text-uppercase text-black ">Talent Acquisition Internship</h5>
                        <p class="text-black">Join our team of researchers and designers to plan, craft and create
                            customer-centric experiences for our clients. Help design the user
                            experience That will enable users to achieve their goals. As we continue
                            to expand the company, we are looking for new staff to be the part of
                            our big family. Well, are you the one we are looking for? Check the
                            requirements below and apply. See you.</p>
                    </div>
                </div>

                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1"
                                aria-expanded="true" aria-controls="collapseOne1">
                                <h5 class="mb-0 text-black font-weight-bold">
                                    Company Details<i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                Fast-growing and developing IT business solution enterprise in South East Asia. We
                                provide the best solution for your business need.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0 text-black font-weight-bold">
                                    Job Descriptions: <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                <ul>
                                    <li>You will be in charge of supporting the recruitment process, including posting
                                        Job Ads, selecting candidates, and interviewing candidates.</li>

                                    <li>You will work closely to the HR and Business Development teams. </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header rgba-stylish-strong z-depth-1 mb-1" role="tab" id="headingTwo3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo3"
                                aria-expanded="false" aria-controls="collapseTwo3">
                                <h5 class="mb-0 text-black font-weight-bold">
                                    Job Requirements: <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo3" class="collapse" role="tabpanel" aria-labelledby="headingTwo3"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                <ul>
                                    <li>Fresh graduates.</li>

                                    <li>Preferred background but not limited to Psychology, Human Resource Management,
                                        Humanities, Business Administration, Social Science.</li>

                                    <li>Willing to work in Yogyakarta. </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->
                    <p class="text-black mt-4 text-center font-weight-bold">Send your CV (and portfolio, if any) to:
                        career@codingcollective.com</p>
                    <div class="text-center">
                        <div class="d-inline-block">
                            <a class="btn btn-dark text-uppercase font-weight-bold text-yellow btn-rounded"
                                data-toggle="modal" data-target="#exampleModalCenter" href="">apply now</a>
                        </div>
                        <div class="d-inline-block">
                            <a class="btn bg-yellow text-uppercase font-weight-bold text-black btn-rounded"
                                href="whatsapp://send?text=Join our Fabulous Team of Intelligent Individuals. Check it out! https://demo.codingcollective.com/join.php">tell
                                your friend</a>
                        </div>
                    </div>
                </div>
                <!-- Accordion wrapper -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                                    <h3 class="text-yellow font-weight-bold">Talent Acquisition Internship</h3>
                                    <p class="text-black mb-0">Yogyakarta</p>
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
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        required>
                                                    <label for="subject" class="">Your Name <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="email" id="email" name="email" class="form-control"
                                                        required>
                                                    <label for="subject" class="">Email <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="mobilenumber" name="mobilenumber"
                                                        class="form-control" required>
                                                    <label for="subject" class="">Mobile Number <span
                                                            class="text-danger">*</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="position" name="position"
                                                        class="form-control" value="Talent Acquisitions Internship"
                                                        required>
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
                                                <input type="file" name="file" id="file" class="file-upload"
                                                    data-max-file-size="8M" />
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
            </div>
    </section>
<?php 
    require_once APP_ROOT . '/src/Views/layouts/footer.php';
    require_once APP_ROOT . '/src/Views/layouts/script.php';
?>
