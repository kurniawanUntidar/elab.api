<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\RawSql;

class Alat extends BaseController
{
    protected $db;
    protected $builder;

    public function __construct()
    {
        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('tb_inventoryalat');
    }

    public function index()
    {
        
		$data['alat'] = $this->builder->select('nama_alat, merk, type, picture, kategori, IK')
            ->select(new RawSql('COUNT(*) AS jumlah'))  
            ->groupBy(['nama_alat', 'merk', 'type', 'picture', 'kategori', 'IK'])
            ->get()
            ->getResultArray();
        $data['title'] = 'Alat';
        $data['sidebarMenus'] = $this->sidebarMenus;
        return view('alat/index', $data);
    }

    public function detail($namaAlat)
    {
        $data['alat'] = $this->builder->select('id,kode, register,nama_alat, merk, type, kategori, kondisi, ketersediaan, IK')
            ->getWhere(['nama_alat'=>$namaAlat])
            ->getResultArray();
        $data['title'] = 'Alat';
        $data['sidebarMenus'] = $this->sidebarMenus; 
        return view('alat/detail', $data);
        
    }
}
