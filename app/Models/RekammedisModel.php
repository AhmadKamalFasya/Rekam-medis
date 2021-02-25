<?php namespace App\Models;

use CodeIgniter\Model;
    
class RekammedisModel extends Model
{
    protected $table      = 'rekam_medis';
    protected $primaryKey = 'rm_id';

    public function getRekam($id = false){
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(['rm_id' => $id])->first();
        }
    }

}