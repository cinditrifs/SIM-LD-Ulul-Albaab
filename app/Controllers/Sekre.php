<?php

use CodeIgniter\codeIgniter;
use App\Models\SuratkeluarModel;
use App\Models\SyuroModel;
use App\Models\KajianModel;
use App\Models\LpjModel;
use App\Models\ProposalModel;


namespace App\Controllers;

use Config\App;

class Sekre extends BaseController
{
    protected $suratkeluar;
    protected $syuro;
    protected $kajian;
    protected $lpj;
    protected $proposal;

    public function __construct()
    {
        $this->suratkeluar = new \App\Models\SuratkeluarModel(); //bisa di taro di base controller
        $this->syuro = new \App\Models\SyuroModel(); //bisa di taro di base controller
        $this->kajian = new \App\Models\KajianModel();
        $this->lpj = new \App\Models\LpjModel();
        $this->proposal = new \App\Models\ProposalModel();
    }
    // surat keluar yeaaa
    public function surat_keluar()
    {
        $suratkeluar = $this->suratkeluar->findAll();
        $data = [
            'suratkeluar' => $suratkeluar
        ];
        return view('sekre/surat_keluar', $data);
    }

    // untuk syuro yeaaaa
    public function syuro()
    {
        $syuro = $this->syuro->findAll();
        $data = [
            'syuro' => $syuro
        ];
        return view("sekre/syuro", $data);
    }

    public function proposal()
    {
        $proposal = $this->proposal->findAll();
        $data = [
            'proposal' => $proposal
        ];
        return view("sekre/proposal", $data);
    }

    // untuk lpj yaa
    public function lpj()
    {
        $lpj = $this->lpj->findAll();
        $data = [
            'lpj' => $lpj
        ];
        return view("sekre/lpj", $data);
    }
    // untuk kajian yeaa
    public function presensi_kajian()
    {
        $kajian = $this->kajian->findAll();
        $data = [
            'kajian' => $kajian
        ];
        return view("sekre/presensi_kajian", $data);
    }
}
