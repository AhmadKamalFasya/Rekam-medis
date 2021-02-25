<?php namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table      = 'resep_obat';
    protected $primaryKey = 'resep_id';

    public function getResep($id = false){
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(['resep_id' => $id]);
        }
    }
}