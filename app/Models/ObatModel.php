<?php namespace App\Models;

use CodeIgniter\Model;

class ObatModel extends Model
{
    protected $table      = 'obat';
    protected $primaryKey = 'obat_id';
   	protected $allowedFields = ['nama_obat', 'jenis_obat'];

    public function getObat($id =  false){
        if($id == false){
            return $this->findAll();
        }else{
            return $this->where(['ibat-id' => $id]);
        }
    }
}