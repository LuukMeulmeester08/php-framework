<?php

namespace App\controllers;

use Framework\Response;

class TaskController
{

    public function index(): Response{
        return new Response('Task List');
    }
    public function about(): Response{
        return new Response('Add Task');
    }
}