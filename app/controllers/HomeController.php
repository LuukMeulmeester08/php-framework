<?php

namespace App\controllers;

use Framework\Response;

class HomeController
{
    public function index(): Response{
        return new Response('Home Page');
    }
    public function about(): Response{
        return new Response('About Page');
    }
}