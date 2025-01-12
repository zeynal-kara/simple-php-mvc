<?php

namespace App\Controllers;

use SimpleMVC\Core\Controller;
use SimpleMVC\Utils\Response;

class HomeController extends Controller
{
    public function index($req): Response
    {
        return $this->render('guest/index');
    }
}