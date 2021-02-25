<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\ResepModel;

class Resep extends BaseController
{
	protected $ResepModel;
	public function __construct()
	{
		$this->resepModel = new ResepModel();
	}

	public function index()
	{
		$resep = $this->resepModel->findAll();
		$data = [
			'title' => 'Resep Obat | Klinik',
			'resep' => $resep
		];

		return view('resep/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Input Resep Obat | Klinik',
		];

		return view('resep/create');
	}
	//--------------------------------------------------------------------

}
