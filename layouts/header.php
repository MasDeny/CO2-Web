
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-0" id="mobile-hidden">
        <div class="container">
            <a class="navbar-brand pb-3" href="home">
                <img src="../assets/img/logo/logo.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item pl-3">
                        <a class="nav-link py-3 text-uppercase font-weight-bold <?php if(!empty($_GET['page'])&&$_GET['page']=='about-us'){echo'active';} ?>" href="about-us">about us
                        </a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link py-3 text-uppercase font-weight-bold <?php if(!empty($_GET['page'])&&$_GET['page']=='service'){echo'active';} ?>" href="service">services</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link py-3 text-uppercase font-weight-bold <?php if(!empty($_GET['page'])&&$_GET['page']=='join-us'){echo'active';} ?>" href="join-us">join us</a>
                    </li>
                    <li class="nav-item pl-3">
                        <a class="nav-link py-3 text-uppercase font-weight-bold <?php if(!empty($_GET['page'])&&$_GET['page']=='contact-us'){echo'active';} ?>" href="contact-us">contact</a>
                    </li>
                    <li class="nav-item pl-3 mb-2">
                        <a class="nav-link btn btn-rounded bg-yellow text-uppercase font-weight-bold px-4" href="home#tell-us-home" style="font-size:16px;">work with us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- mobile -->
    <div class="main-container container-sm mx-auto pl-0 pr-0" id="mobile-shown">
        <div class="bg-dark header">
            <div class="d-inline-block pl-4">
                <a href="home">
                    <img class="text-right" src="../assets/img/logo/logo.png">
                </a>
            </div>
            <div class="d-inline-block nav-side">
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" class="btn text-white p-3 button-collapse"><i
                        class="fas fa-bars"></i></a>
                <!-- Sidebar navigation -->
                <div id="slide-out" class="side-nav fixed wide">
                    <ul class="custom-scrollbar">
                        <!-- Side navigation links -->
                        <li>
                            <ul class="collapsible collapsible-accordion">
                                <li><a class="collapsible-header waves-effect arrow-r text-yellow font-weight-bold"
                                        href="about-us">ABOUT US</a>
                                </li>
                                <hr class="border-grey">
                                <li><a class="collapsible-header waves-effect arrow-r text-yellow font-weight-bold"
                                        href="service">SERVICES</a>
                                </li>
                                <hr class="border-grey">
                                <li><a class="collapsible-header waves-effect arrow-r text-yellow font-weight-bold"
                                        href="join-us">JOIN US</a>
                                </li>
                                <hr class="border-grey">
                                <li><a class="collapsible-header waves-effect arrow-r text-yellow font-weight-bold"
                                        href="contact-us">CONTACT US</a>
                                </li>
                            </ul>
                        </li>
                        <!--/. Side navigation links -->
                    </ul>
                    <div class="sidenav-bg bg-dark"></div>
                </div>
                <!--/. Sidebar navigation -->
            </div>
        </div>
    </div>

    
    <!--/.Navbar -->