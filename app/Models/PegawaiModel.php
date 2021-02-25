<?php namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table      = 'pegawai';
    protected $primaryKey = 'pegawai_id';

    public function getPegawai($id = false){
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(['pegawai_id' => $id])->first();
        }
    }
}