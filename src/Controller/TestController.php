<?php

namespace scabedo\samplehello\Controller;

class TestController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    /**
     * @Route('/saludo', name: 'saludo')]
     */
    public function index()
    {
        return $this->json('Hello world');
    }
}