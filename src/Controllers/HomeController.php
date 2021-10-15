<?php

namespace Controllers;

use App\Core\Controller;
use App\Core\Form;

class HomeController extends Controller
{
    public function index()
    {
        $params = [
            'title' => 'Home'
        ];
        $this->view('home/home', $params);
    }
    public function aboutUs()
    {
        $params = [
            'title' => 'About Us'
        ];
        $this->view('about/about-us', $params);
    }
    public function joinUs()
    {
        $params = [
            'title' => 'Join Us '
        ];
        $this->view('join/join-us', $params);
    }
    public function contactUs()
    {
        $params = [
            'title' => 'Contact Us'
        ];
        $this->view('contact/contact-us', $params);
    }
    public function services()
    {
        $params = [
            'title' => 'Services'
        ];
        $this->view('service/more-service', $params);
    }
    public function thanks()
    {
        $params = [
            'title' => 'Our Thanks'
        ];
        $this->view('thanks/thanks-page', $params);
    }
    public function privacyAndPolicy()
    {
        $params = [
            'title' => 'Privacy Policy'
        ];
        $this->view('howto/privacy-policy', $params);
    }
    public function itOutsourcingWorks()
    {
        $params = [
            'title' => 'How It Outsourcing Works'
        ];
        $this->view('howto/how-it-outsourcing-works', $params);
    }
    public function softwareDevelopmentWorks()
    {
        $params = [
            'title' => 'How It Outsourcing Works'
        ];
        $this->view('howto/how-software-development-works', $params);
    }
    public function talentAcuquisition()
    {
        $this->view('carrer/talent-acquisition-internship-detail');   
    }
    public function backendDeveloper()
    {
        $this->view('carrer/backend-developer-detail');   
    }
    public function reactJsDeveloper()
    {
        $this->view('carrer/react-js-developer-detail');   
    }
    public function SendEmail()
    {
        $request = json_decode(json_encode($_POST));
        if ($request->project) {
            self::validationEmailProject($request);
        } else {
            # code...
        }
    }

    private static function validationEmailProject($request)
    {
        if (isset($request->website) && $request->website == "true") {
            $develop["website"] = "Website";
        }

        if (isset($request->android) && $request->android == "true") {
            $develop["android"] = "Android";
        }

        if (isset($request->ios) && $request->ios == "true") {
            $develop["ios"] = "iOS";
        }

        $project = implode(", ", $develop);

        $content = "ABOUT YOU \n From: $request->name \n Email: $request->email \n Phone Number : $request->mobilenumber \n \n ABOUT COMPANY \n Company Name : $request->companyname \n Industry : $request->industry \n Country : $request->country \n \n 
            PROJECT DETAIL \n Message: $request->message \n Amount : $request->amount \n Develop : $project";
        //echo $content;
        $recipient = "support@codingcollective.com";
        $mailheader = "From: $request->email \r\n";
        mail($recipient, $request->subject, $content, $mailheader) or die("Error!");
    }

    private static function validationEmailJob($request)
    {
        if (isset($_POST['name']))
            $name = $request;

        if (isset($_POST['email']))
            $email = $request->email;

        if (isset($_POST['mobilenumber']))
            $mobilenumber = $request->mobilenumber;

        if (isset($_POST['position']))
            $position = $request->position;

        if (isset($_FILES['file']))
            $file = $_FILES['file']['name'];


        $content = "ABOUT YOU \n From: $name \n Email: $email \n Phone Number : $mobilenumber \n Position : $position ";
        //echo $file;
        //$recipient = "jaycenlee91@gmail.com";
        $recipient = "career@codingcollective.com";
        $mailheader = "From: $email \r\n";
        mail($recipient, $request->subject, $content, $mailheader) or die("Error!");
    }
}
