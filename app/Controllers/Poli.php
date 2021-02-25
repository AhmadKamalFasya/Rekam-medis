<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\PoliModel;

class Poli extends BaseController
{
	protected $poliModel;
	public function __construct()
	{
		$this->poliModel = new PoliModel();
	}

	public function index()
	{
		//$poli = $this->poliModel->findAll();

		$data = [
			'title' => 'Poli | Klinik',
			'poli'  => $this->poliModel->getPoli()
		];
		return view('poli/index', $data);
	}

	public function detail($id)
	{
		
		$data = [
			'title' => 'Detail Poli',
			'poli'  => $this->poliModel->getPoli($id)
		];

		if(empty($data['poli'])){
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Data poli yang anda cari tidak ditemukan.');
			
		}

		return view('poli/detail', $data);
	}

	public function create()
	{

		$data = [
			'title' => 'Form Tambah Data Poli | Klinik',
			'validation' => \Config\Services::validation()
		];

		return view('poli/create', $data);
	}

	public function save()
	{

		if(!$this->validate([
		'nama_poli' => [
			'rules'  => 'required|is_unique[poli.nama_poli]',
			'errors' => [
				'required' 	=> 'Mohon maaf, Nama poli harus diisi',
				'is_unique' => 'Mohon maaf, Nama poli sudah terdaftar'
			]
		]
		])) {

			$validation = \Config\Services::validation();
			return redirect()->to('/poli/create')->withInput()->with('validation', $validation);
		}

		$this->poliModel->save([
			'nama_poli' => $this->request->getVar('nama_poli'),
			'status'	=> $this->request->getVar('status')
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/poli');
	}

	public function delete($id)
	{
		$this->poliModel->delete(['poli_id' => $id] );
		session()->setFlashdata('pesan', 'Data berhasil dihapus');

		return redirect()->to('/poli');

	}

	public function edit($id)
	{
		$data = [
			'title' => 'Form Edit Data Poli | Klinik',
			'validation' => \Config\Services::validation(),
			'poli' => $this->poliModel->getPoli($id)
		];

		return view('poli/edit', $data);	
	}


	public function update($id)
	{

		//Cek nama poli
		$oldNamaPoli = $this->poliModel->getPoli($this->request->getVar('poli_id'));
		if($oldNamaPoli['nama_poli'] == $this->request->getVar('nama_poli')){
			$rule_nama_poli = 'required';
		}else{
			$rule_nama_poli = 'required|is_unique[poli.nama_poli]';
		}

		if(!$this->validate([
		'nama_poli' => [
			'rules' 	=> $rule_nama_poli,
			'errors' => [
				'require' 	=> 'Mohon maaf, Nama poli harus diisi',
				'is_unique' => 'Mohon maaf, Nama poli sudah terdaftar'
			]
		] 
		])) {

			$validation = \Config\Services::validation();
			return redirect()->to('/poli/edit/' . $this->request->getVar('poli_id'))->withInput()->with('validation', $validation);
		}

		$this->poliModel->save([
			'poli_id' => $id,
			'nama_poli' => $this->request->getVar('nama_poli'),
			'status'	=> $this->request->getVar('status')
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah');

		return redirect()->to('/poli');
	}

	//--------------------------------------------------------------------

}
