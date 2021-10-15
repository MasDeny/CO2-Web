<?php
$page = !empty($_REQUEST["page"]) ? $_REQUEST["page"] : "home";
switch($page){
    case 'home':
        $title = 'Coding Collective: Software Developer Outsourcing Company';
        $description = 'Build your business by setting up a remote team of software developers. Hire vetted full-stack, frontend, backend, mobile developers.';
        break;
    case 'about-us':
        $title = 'About-us || Coding Collective: Software Developer Outsourcing Company';
        $description = 'Build your business by setting up a remote team of software developers. Hire vetted full-stack, frontend, backend, mobile developers.';
        break;
    case 'contact-us':
        $title = 'contact-us || Coding Collective: Software Developer Outsourcing Company';
        $description = 'Build your business by setting up a remote team of software developers. Hire vetted full-stack, frontend, backend, mobile developers.';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TF3995W');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF3995W" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
<!-- End Google Tag Manager (noscript) -->
    
    <meta name="description" content="We Provide Software Development Service">
    <meta name="image" content="https://codingcollective.com/images/share.jpg">
    <!-- Schema.org for Google -->
    <!--<meta itemprop="name" content="Codding Collective">
    <meta itemprop="description" content="We Provide Software Development Service">
    <meta itemprop="image" content="https://codingcollective.com/images/servicemenu.jpg"> -->
    <!-- Mobile App for iOS & Android -->
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="og:description" content="We Provide Software Development Service">
    <meta property="og:type" content="website">
    <meta property="og:image" itemprop="image"  content="https://codingcollective.com/images/share.jpg">
    <meta property="og:title" content="Coding Collective">
    
    <!-- twitter -->
    <meta name="twitter:title" content="Codding collective">
    <meta name="twitter:description" content="We Provide Software Development Service">
    <meta name="twitter:image" content="https://codingcollective.com/images/share.jpg">
    <meta name="twitter:card" content="summary_large_image">

    <!-- <meta property="og:image" content="https://codingcollective.com/images/servicemenu.jpg"/>  -->
      
    <!-- Primary Meta Tags -->
    <title><?php echo $title;?></title>
    <meta name="title" content="<?php echo $title;?>">
    <meta name="description" content="<?php echo $description;?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://metatags.io/">
    <meta property="og:title" content="Coding Collective: Software Developer Outsourcing Company">
    <meta property="og:description" content="Build your business by setting up a remote team of software developers. Hire vetted full-stack, frontend, backend, mobile developers.">
    <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Coding Collective: Software Developer Outsourcing Company">
    <meta property="twitter:description" content="Build your business by setting up a remote team of software developers. Hire vetted full-stack, frontend, backend, mobile developers.">
    <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
    
    <title>Coding Collective</title>
    <!-- MDB icon -->
    <link rel="icon" href="../assets/img/co2-favicon.png" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../assets/css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VDVHZFK49Q"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VDVHZFK49Q');
    </script>
</head>
<body>
