<?php
namespace Controllers;

use App\Core\Controller;

class HomeController extends Controller
{    
    public function index()
    {
        $this->view('home/home');
    }
    public function aboutUs()
    {
        $this->view('about/about-us');
    }
    public function joinUs()
    {
        $this->view('join/join-us');
    }
    public function contactUs(){
        $this->view('contact/contact-us');
    }
    public function services()
    {
        $this->view('service/more-service');
    }
    public function thanks()
    {
        $this->view('thanks/thanks-page');
    }
}