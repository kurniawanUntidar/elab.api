<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'sidebarMenus' => $this->sidebarMenus, 
            'active' => 'dashboard',
        ];
        return view('users/dashboard',$data);
    }

    public function profile(){

        $data = [
            'title' => 'My Profile',
            'sidebarMenus' => $this->sidebarMenus, 
            'active' => 'dashboard',
        ];
        return view('users/profile',$data);
    }

    public function edit(){

        $data = [
            'title' => 'Edit My Profile',
            'sidebarMenus' => $this->sidebarMenus, 
            'active' => 'dashboard',
        ];
        return view('users/edit',$data);
    }

    public function changepassword(){

        $data = [
            'title' => 'Change Password',
            'sidebarMenus' => $this->sidebarMenus, 
            'active' => 'dashboard',
        ];
        return view('users/changepassword',$data);
    }



}
