<?php

namespace scabedo\TestBundle\Controller;

class TestController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
    public function index()
    {
        return $this->json('Hello world');
    }
}