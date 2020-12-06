<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('main/index');
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
