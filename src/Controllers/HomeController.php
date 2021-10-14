<?php
namespace Controllers;

use App\Core\Controller;

class HomeController extends Controller
{    
    public function index()
    {
        $this->render('home/home');
    }
    public function aboutUs()
    {
        $this->render('about/about-us');
    }
    public function joinUs()
    {
        $this->render('join/join-us');
    }
    public function contactUs(){
        $this->render('contact/contact-us');
    }
    public function services()
    {
        $this->render('service/more-service');
    }
    public function thanks()
    {
        $this->render('thanks/thanks-page');
    }
}