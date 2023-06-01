<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Faq;
use Source\Models\Trainer;

class Web
{

    private $view;

    public function __construct(){

        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");

    }

    public function home()
    {
  
        echo $this->view->render("home");

    }

    public function about()
    {
        //echo "Olá, Mundo! Sobre";
        echo $this->view->render("about");

    }

    public function location()
    {
        echo $this->view->render("about");
    }

    public function schedule()
    {
        echo $this->view->render("schedule");
    }

    public function blog (){
        echo $this->view->render("blog");
    }
    public function contact (){
        echo $this->view->render("contact");
    } 
    public function faq () {
        $faqs = new Faq();
        //var_dump($faqs->selectAll());
        echo $this->view->render("home",[
            "faqs" => $faqs->selectAll(),
        ]);
    }

    /*public function trainer (array $data) {
        $courses = new Course();
        if(!empty($data["category"])){

        }
       
    }*/
    public function faqFirst(){
        $faq1 = new Faq();
        //$faq = $faqs->selectFirst();
    
        echo $this->view->render("home", [
            "faq1" => $faq->selectFirst(),
        ]);
    }
    

    
}