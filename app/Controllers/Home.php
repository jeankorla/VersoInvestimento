<?php

namespace App\Controllers;

class Home extends BaseController
{
    private $ClienteModel;

    public function __construct()
    {
        $this->ClienteModel = new ClienteModel();
    }

    public function index()
    {
        return view('index.php');
    }
}
