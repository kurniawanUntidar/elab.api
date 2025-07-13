<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Database\RawSql;

class Alat extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('tb_inventoryalat');
		$data['alat'] = $builder->select('nama_alat, merk, type, picture, kategori, IK')
            ->select(new RawSql('COUNT(*) AS jumlah'))  
            ->groupBy(['nama_alat', 'merk', 'type', 'picture', 'kategori', 'IK'])
            ->get()
            ->getResultArray();
        $data['title'] = 'Alat';
        $data['menu'] = $this->menu;
        $data['active'] = 'alat';   
        return view('alat/index', $data);
    }
}
