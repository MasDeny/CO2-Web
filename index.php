<?php

function isMobile(){
    if(!empty($_SERVER['HTTP_USER_AGENT'])){
       $user_ag = $_SERVER['HTTP_USER_AGENT'];
       if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$user_ag)){
          return true;
       };
    };
    return false;
}

$page = !empty($_REQUEST["page"]) ? $_REQUEST["page"] : "home";
// layout up
if ($page!=='thanks') {
    include('./layouts/meta.php');
    include("./layouts/header.php");
    include('./layouts/banner.php');
}

// router
switch ($page) {
    case 'home':
        include("./pages/home.php");
        break;

    case 'about-us':
        include("./pages/about-us.php");
        break;

    case 'service':
        include("./pages/service.php");
        break;
    
    case 'join-us':
        include("./pages/join-us.php");
        break; 

    case 'contact-us':
        include("./pages/contact-us.php");
        break;
        
    case 'backend-developer-detail':
        include("./pages/backend-developer-detail.php");
        break;  

    case 'fullstack-qa-engineer-detail':
        include("./pages/fullstack-qa-engineer-detail.php");
        break; 

    case 'it-qa-engineer-detail':
        include("./pages/it-qa-engineer-detail.php");
        break;  


    case 'senior-graphic-design-detail':
        include("./pages/senior-graphic-design-detail.php");
        break; 

    case 'senior-legal-detail':
        include("./pages/senior-legal-detail.php");
        break;  

    case 'how-it-outsourcing-works':
        include("./pages/how-it-outsourcing-works.php");
        break; 

    case 'how-software-development-works':
        include("./pages/how-software-development-works.php");
        break; 

    case 'react-js-developer-detail':
        include("./pages/react-js-developer-detail.php");
        break;  
        
    case 'talent-acquisition-internship-detail':
        include("./pages/talent-acquisition-internship-detail.php");
        break;  

    case 'privacy-policy':
        include("./pages/privacy-policy.php");
        break;

    case 'thanks':
        include("./pages/how-it-outsourcing-works.php");
        break; 
    
    default:
        include("./pages/home.php");
        break;  
}

// footer
$page!=='thanks'&&include("./layouts/footer.php");
include("./layouts/script.php");
?>