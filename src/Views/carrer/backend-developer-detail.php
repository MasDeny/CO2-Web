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
                        <h1 class="font-weight-bold text-yellow">Backend Developer</h1>
                        <p class="text-black">Yogyakarta, Indonesia</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h5 class="font-weight-bold text-uppercase text-black ">content designer</h5>
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
                                    Requirements <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                            data-parent="#accordionEx">
                            <div class="card-body">
                                The successful applicant will have the following experience and skills :
                                <ul>
                                    <li>Engineering wisdom equivalent to 2 years of experiences.</li>

                                    <li>Excellent English communication skills.</li>

                                    <li>Programming language excellence in Java, Phyton, and/or Golang.</li>

                                    <li>Studying websites and apps for network traffic analysis between application and
                                        3rd party network endpoints.</li>

                                    <li>Inferring behaviours and building proofs of concept to replicate application
                                        behaviour in other environments.</li>

                                    <li>Proficiency in REST APIs, cloud services, android platform, web platform.</li>

                                    <li>Evidence of exposure to architectural patterns of a large, high scale web
                                        application (e.g. well designed APIs, high volume data pipelines, efficient
                                        algorithms).</li>

                                    <li>Knowledge about backend build and deployment.</li>

                                    <li>Familiar with unit/ function/ integration test.</li>

                                    <li>Previous experience in startups (Fintech) is highly preferred.</li>

                                    <li>Interest in APIs a plus.</li>

                                    <li>Willing to be placed in Yogyakarta</li>
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
            </div>
    </section>
<?php 
    $job = 'Backend Developer';
    $location = 'Yogyakarta';
    require APP_ROOT . '/src/Views/carrer/form-job.php';
    require_once APP_ROOT . '/src/Views/layouts/footer.php';
    require_once APP_ROOT . '/src/Views/layouts/script.php';
?>