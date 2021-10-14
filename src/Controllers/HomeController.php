<?php
namespace Controllers;

use App\Core\Controller;

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
}