<?php

use App\Models\HighlightModel;

namespace App\Controllers;

class Home extends BaseController
{
	protected $highlightModel;
	public function __construct()
	{
		$this->highlightModel = new \App\Models\HighlightModel(); //bisa di taro di base controller
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
		return view('main/artikel');
	}
	public function isiartikel()
	{
		return view('main/isiartikel');
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
