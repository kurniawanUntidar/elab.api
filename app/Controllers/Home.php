<?php

namespace App\Controllers;
use App\Models\InfoModel;

class Home extends BaseController
{
    protected $InfoModel;

    public function __construct()
    {
        $this->InfoModel = new InfoModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'active' => 'home',
            'info' => $this->InfoModel->orderBy('created', 'DESC')->findAll()
        ];
        return view('home', $data);
    }
}
