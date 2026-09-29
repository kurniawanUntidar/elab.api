<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use App\Models\UserModel;  

class Login extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        helper('form');
        $model = new UserModel();
        $rules = [
            'login' => 'required',
            'password' => 'required|min_length[6]|max_length[255]'
        ];
        $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
        $user = $model->where('email',$this->request->getVar('email'))->first();
        if(!$user) return $this->failNotFound('Email not found');

//         return $this->respond([
//     'input_password' => $this->request->getVar('password'),
//     'hash_in_db' => $user->password_hash,
//     'verify' => password_verify($this->request->getVar('password'), $user->password_hash)
// ]);

        $verify = password_verify($this->request->getVar('password'), $user->password_hash);
        if(!$verify) return $this->fail("Password didn't match");


        $key = getenv('TOKEN_KEY');
        $payload = [
            'iat' => 1356999524,
            'nbf' => 1357000000,
            'uid' => $user->id,
            'email' => $user->email
        ];

        $token = JWT::encode($payload,$key,'HS256');
        return $this->respond($token) ;  
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
