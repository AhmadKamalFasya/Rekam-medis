<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\PasienModel;

class Pasien extends BaseController
{
	protected $pasienModel;
	public function __construct()
	{
		$this->pasienModel = new PasienModel();
	}

	public function index()
	{
		$pasien = $this->pasienModel->findAll();

		$data = [
			'title' => 'Pasien | Klinik',
			'pasien' => $pasien
		];

		return view('pasien/index', $data);
	}

	//--------------------------------------------------------------------

}
