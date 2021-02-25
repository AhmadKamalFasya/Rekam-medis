<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\ObatModel;

class Obat extends BaseController
{
	protected $obatModel;
	public function __construct()
	{
		$this->obatModel = new ObatModel();
	}

	public function index()
	{

		$data = [
			'title' => 'Obat | Klinik',
			'obat'	=> $this->obatModel->findAll()	
		];

		return view('obat/index', $data);
	}

	public function create()
	{
	
		$data = [
			'title' => 'Form Input Obat | Klinik',
			'validation' => \Config\Services::validation()
		];

		return view('obat/create', $data);
	}

	public function save()
	{
			
			if(!$this->validate([
			'nama_obat' => [
				'rules'  => 'required|is_unique[obat.nama_obat]',
				'errors' => [
					'required'  => 'Mohon maaf, Nama obat harus diisi.',
					'is_unique' => 'Mohon maaf, Nama obat telah terdaftar.'
				]
			],
			'jenis_obat' => [
				'rules'   => 'required',
				'errors'  => [
					'required'  => 'Mohon maaf, Jenis obat harus diisi.'
				]
			]
			])) {
				$validation = \Config\Services::validation();
				return redirect()->to('/obat/create')->withInput()->with('validation', $validation);
			}

		$this->obatModel->save([
			'nama_obat'  => $this->request->getVar('nama_obat'),
			'jenis_obat' => $this->request->getVar('jenis_obat')
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/obat');
	}

	// public function delete($id)
	// {
	// 	$this->obatModel(['id' => $id]);
	// }
	//--------------------------------------------------------------------

}
