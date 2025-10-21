<?php

namespace App\Models;
use CodeIgniter\Model;
use Ozdemir\DataTables\DataTables;
use Ozdemir\DataTables\Codeigniter4Adapter;

class AlatModel extends Model
{
    protected $table            = 'tb_inventoryalat';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];
    public function getAlatDataTable()
    {
        $dt = new DataTables(new Codeigniter4Adapter());
        $query = $this->select('id,nama_alat,spesifikasi,merk,tahun_perolehan,kondisi,jumlah,created_at,updated_at');
        return $dt->query($query)->generate();
    }
}
