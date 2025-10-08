<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\RawSql;

class Bahan extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_inventorybahan');
    }

    public function index()
    {
        
		$data['bahan'] = $this->builder->select('nama, type, spesifikasi, nilai, jumlah, satuan,datasheet')
            ->groupBy(['nama', 'type', 'spesifikasi', 'nilai', 'jumlah','satuan','datasheet'])
            ->get()
            ->getResultArray();
        $data['title'] = 'bahan';
        $data['sidebarMenus'] = $this->sidebarMenus;
        return view('bahan/index', $data);
    }

    public function detail($namabahan)
    {
        $data['bahan'] = $this->builder->select('id,kode, register,nama_bahan, merk, type, kategori, kondisi, ketersediaan, IK')
            ->getWhere(['nama_bahan'=>$namabahan])
            ->getResultArray();
        $data['title'] = 'bahan';
        $data['sidebarMenus'] = $this->sidebarMenus;
        return view('bahan/detail', $data);
        
    }
}
