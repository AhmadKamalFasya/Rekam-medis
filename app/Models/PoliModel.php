<?php namespace App\Models;

use CodeIgniter\Model;

class PoliModel extends Model
{
    protected $table      = 'poli';
    protected $primaryKey = 'poli_id';
    protected $allowedFields = ['nama_poli', 'status'];

    public function getPoli($id = false){
        if($id == false){
            return $this->findAll();
        }
            return $this->where(['poli_id' => $id])->first();
    }

}