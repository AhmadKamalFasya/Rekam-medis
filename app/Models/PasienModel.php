<?php namespace App\Models;

use CodeIgniter\Model;

class PasienModel extends Model
{
    protected $table      = 'pasien';
    protected $primaryKey = 'pasien_id';

    public function getPasien($id = false){
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(['pasien_id' => $id]);
        }
    }
}