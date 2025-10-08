<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    protected $table            = 'tb_info';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kategori_id','judul','penulis','isi','gambar','created'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

     // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created';
 

}
