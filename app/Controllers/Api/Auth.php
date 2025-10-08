<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;
use App\Models\UserModel;  
use App\Cofig\Auth as AuthConfig;
use App\Entities\User;


class Auth extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */

    public function __construct()
    {
        // Most services in this controller require
        // the session to be started - so fire it up!
    //    $this->session = service('session');

        $this->config = config('Auth');
        $this->auth   = service('authentication');
    }

    public function index()
    {
        helper('form');
        $model = new UserModel();
        $rules = [
            'login' => 'required',
            'password' => 'required|min_length[6]|max_length[255]'
        ];

        $login    = $this->request->getVar('login');
        $password = $this->request->getVar('password');

        $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());

        if (! $this->auth->attempt([$type => $login, 'password' => $password])) {
            return $this->fail($this->auth->error() ?? lang('Auth.badAttempt'));
        }
        if($type=='email'){
            $user = $model->where('email',$login)->first();
        }
        if($type=='username'){
            $user = $model->where('username',$login)->first();
        }

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
