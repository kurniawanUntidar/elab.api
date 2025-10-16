<?php

namespace App\Controllers\Api;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\InfoModel;

class Home extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    use ResponseTrait;

    public function __construct()
    {
        $this->model = new InfoModel();
    }   

    public function index()
    {
        $data = $this->model->orderBy('created', 'DESC')->findAll();
        return $this->respond($data);
    }
}
