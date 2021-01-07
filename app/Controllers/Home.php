<?php

use App\Models\HighlightModel;
use App\Models\ArtikelModel;
use App\Models\ProdakModel;
use App\Models\LogsModel;

namespace App\Controllers;

class Home extends BaseController
{
	protected $highlightModel;
	protected $artikel;
	protected $prodak;
	protected $logs;
	public function __construct()
	{
		$this->highlightModel = new \App\Models\HighlightModel(); //bisa di taro di base controller
		$this->prodak = new \App\Models\ProdakModel(); //bisa di taro di base controller
		$this->artikel = new \App\Models\ArtikelModel(); //bisa di taro di base controller
		$this->logs = new \App\Models\LogsModel();
	}
	public function Logs()
	{
		$alllogs = $this->logs->getLogs();
		$data = [
			'logs' => $alllogs
		];

		echo view('log', $data);
	}
	public function index()
	{
		$this->logs->insertLogByRoute('/');
		$this->logs->insertLogByRoute('/');
		#variable gambar namanya slider
		$slider = $this->highlightModel->findAll();
		$data = [
			'slider' => $slider
		];
		return view('main/index', $data);
	}

	public function prodak()
	{
		$prodak = $this->prodak->findAll();
		$data = [
			'prodak' => $prodak
		];
		return view('main/prodak', $data);
	}

	public function artikel()
	{
		$artikel = $this->artikel->getArtikel();
		$data = [
			'artikel' => $artikel
		];
		return view('main/artikel', $data);
	}
	public function isiartikel($slug)
	{
		$data = [
			'artikel' => $this->artikel->getArtikel($slug)
		];
		return view('main/isiartikel', $data);
	}
	public function sekret()
	{
		return view('main/sekret');
	}
	public function surat()
	{
		$this->logs->insertLogByRoute('/login_sekre');
		return view('main/surat');
	}
	public function presensi()
	{
		return view('main/presensi');
	}
	public function syuro()
	{
		return view('main/syuro');
	}
	public function lpj()
	{
		return view('main/lpj');
	}

	public function proposal()
	{
		return view('main/proposal');
	}

	//--------------------------------------------------------------------

}
