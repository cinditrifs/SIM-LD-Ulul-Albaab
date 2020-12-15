<?php

use App\Models\HighlightModel;
use App\Models\ArtikelModel;

namespace App\Controllers;

class Home extends BaseController
{
	protected $highlightModel;
	protected $artikel;
	public function __construct()
	{
		$this->highlightModel = new \App\Models\HighlightModel(); //bisa di taro di base controller
		$this->artikel = new \App\Models\ArtikelModel(); //bisa di taro di base controller
	}

	public function index()
	{
		#variable gambar namanya slider
		$slider = $this->highlightModel->findAll();
		$data = [
			'slider' => $slider
		];
		return view('main/index', $data);
	}
	public function prodak()
	{
		return view('main/prodak');
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

	//--------------------------------------------------------------------

}
