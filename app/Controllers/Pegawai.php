<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
	protected $pegawaiModel;
	public function __construct()
	{
		$this->pegawaiModel = new PegawaiModel();
	}

	public function index()
	{
		$data = [
			'title'	  => 'Pegawai | Klinik',
			'pegawai' => $this->pegawaiModel->getPegawai()
		];
		return view('pegawai/index', $data);
	}

	public function detail($id)
	{
		$data = [
			'title' => 'Detail Pegawai | Klinik',
			'pegawai' => $this->pegawaiModel->getPegawai($id)
		];

		return view('pegawai/detail', $data);
	}

	//--------------------------------------------------------------------

}
