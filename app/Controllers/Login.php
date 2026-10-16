<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class Login extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    use ResponseTrait;
    public function index()
    {
        helper(['form']);
        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return $this->fail($this->validator->getErrors());
        }

        $model = new UserModel();
        $user = $model->where('email', $this->request->getVar('email'))->first();
        if (!$user) {
            return $this->failNotFound($this->request->getVar('email').' not found');
        }
        $verified = password_verify($this->request->getVar('password'), $user['password']);
        if(!$verified) {
            return $this->fail('Incorrect password');
        }
        return $this->respond(['message' => 'Login successful', 'user' => $user]);

        //
    }
   }
