<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function helloWorld(){
        $connection = $this->getDoctrine()->getConnection();
        $connection->connect();
        dd($connection->isConnected());
    }
}