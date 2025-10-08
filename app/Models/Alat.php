<?php

namespace App\Models;
use CodeIgniter\Model;
use Ozdemir\DataTables\DataTables;
use Ozdemir\DataTables\Codeigniter4Adapter;

class Alat extends Model
{
    protected $table            = 'alats';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    public function alat_json()
    {
		$db  = \Config\Database::connect();

        $dt = new Datatables(new Codeigniter4Adapter);

        $builder = $this->db->table($this->table);

        $builder->select('nama_alat, merk, type, kategori, IK, jumlah, picture');
        $query = $builder->getCompiledSelect();

        $dt->query($query);

        $dt->add('action', function($data){
        	return "<a href='#' class='btn btn-primary'>Edit</a>";
        });

        return $dt->generate();
    }
}
