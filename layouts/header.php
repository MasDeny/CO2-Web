
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-0">
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
    <!--/.Navbar -->