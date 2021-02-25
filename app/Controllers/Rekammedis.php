<?php namespace App\Controllers	;

use CodeIgniter\Controllers;
use App\Models\RekammedisModel;

class Rekammedis extends BaseController
{
	protected $rmedisModel;
	public function __construct()
	{
		$this->rmedisModel = new RekammedisModel();
	}

	public function index()
	{
		$rmedis = $this->rmedisModel->findAll();

		$data = [
			'title'  => 'Rekam Medis | Klinik',
			'rmedis' => $rmedis
		];


		return view('rekam_medis/index', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Form Input Data Rekam Medis | Klinik'
		];

		return view('rekam_medis/create');
	}

	//--------------------------------------------------------------------

}
