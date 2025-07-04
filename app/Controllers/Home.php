<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard',
        ];
        return view('users/dashboard',$data);
    }
}
