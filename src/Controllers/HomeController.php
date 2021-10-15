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
    public function contactUs(){
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
    public function SendEmail()
    {
        $request = json_decode(json_encode($_POST));
        var_dump($request);
        // if(isset($request->website) && $request->website=="true") {
        //     $develop["website"] = "Website";
        // }

        // if(isset($request->android) && $request->android=="true") {
        //     $develop["android"] = "Android";
        // }

        // if(isset($request->ios) && $request->ios=="true") {
        //     $develop["ios"] = "iOS";
        // }

        // $project = implode(", ",$develop);
        // $content="ABOUT YOU \n From: $request->name \n Email: $request->email \n Phone Number : $request->mobilenumber \n \n ABOUT COMPANY \n Company Name : $request->companyname \n Industry : $$request->industry \n Country : $$request->country \n \n 
        // PROJECT DETAIL \n Message: $request->message \n Amount : $request->amount \n Develop : $project";
        // //echo $content;
        // $recipient = "support@codingcollective.com";
        // $mailheader = "From: $request->email \r\n";
        // mail($recipient, $request->subject, $content, $mailheader) or die("Error!");
        // $message = "email sent!";
    }
    
    private function validationEmailProject($request)
    {
        $output = Form::validations([
            [$request->title, 'required', 'Please enter a title for the post!'],
            [$request->subtitle, 'required', 'Please enter a subtitle for the post!'],
            [$request->body, 'required', 'Please enter a body for the post!'],
        ]);

        if ($output['status'] == 'OK') {
            if (isset($_FILES['image']['type'])) {
                Form::upload($_FILES['image'], ['jpeg', 'jpg','png'], 5000000, '../public/assets/images/', 85);
            }
        } else {
            $output['status'] = 'ERROR';
            $output['message'] = 'There is an error! Please try again.';
        }

        echo json_encode($output);
        
    }

    private function validationEmailJob($data)
    {
        
    }
}