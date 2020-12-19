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
        $this->suratkeluar = new \App\Models\SuratkeluarModel(); // bisa di taro di base controller
        $this->kajian = new \App\Models\KajianModel();
        $this->syuro = new \App\Models\SyuroModel();
        $this->lpj = new \App\Models\LpjModel();
        $this->proposal = new \App\Models\ProposalModel();
    }

    // surat keluar
    public function surat_keluar()
    {
        $suratkeluar = $this->suratkeluar->findAll();
        $data = [
            'suratkeluar' => $suratkeluar
        ];
        return view('sekre/surat_keluar', $data);
    }
    public function surat_save()
    {
        $this->suratkeluar->save([
            'nomor' => $this->request->getVar('nomor'),
            'tanggal_buat' => $this->request->getVar('tanggal_buat'),
            'tanggal_acara' => $this->request->getVar('tanggal_acara'),
            'untuk' => $this->request->getVar('untuk'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/surat');
    }

    // kajian
    public function presensi_kajian()
    {
        $kajian = $this->kajian->findAll();
        $data = [
            'kajian' => $kajian
        ];
        return view("sekre/presensi_kajian", $data);
    }
    public function presensi_save()
    {
        // ambil file
        $filePresensi = $this->request->getFile('file');
        // pindahkan file ke folder
        $filePresensi->move('img');
        //ambil nama file
        $namaPresensi = $filePresensi->getName();
        $this->kajian->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tema' => $this->request->getVar('tema'),
            'pemateri' => $this->request->getVar('pemateri'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
            'peserta_ttl' => $this->request->getVar('peserta_ttl'),
            'file' => $namaPresensi
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/presensi');
    }

    // syuro
    public function syuro()
    {
        $syuro = $this->syuro->findAll();
        $data = [
            'syuro' => $syuro
        ];
        return view("sekre/syuro", $data);
    }
    public function syuro_save()
    {
        // ambil file
        $fileSyuro = $this->request->getFile('file');
        // pindahkan file ke folder
        $fileSyuro->move('img');
        //ambil nama file
        $namaSyuro = $fileSyuro->getName();
        $this->syuro->save([
            'departemen' => $this->request->getVar('departemen'),
            'tanggal' => $this->request->getVar('tanggal'),
            'file' => $namaSyuro
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/syuro');
    }

    // lpj
    public function lpj()
    {
        $lpj = $this->lpj->findAll();
        $data = [
            'lpj' => $lpj
        ];
        return view("sekre/lpj", $data);
    }
    public function lpj_save()
    {
        // ambil file
        $filelpj = $this->request->getFile('file');
        // pindahkan file ke folder
        $filelpj->move('img');
        //ambil nama file
        $namalpj = $filelpj->getName();
        $this->lpj->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
            'file' => $namalpj
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/lpj');
    }

    // proposal
    public function proposal()
    {
        $proposal = $this->proposal->findAll();
        $data = [
            'proposal' => $proposal
        ];
        return view("sekre/proposal", $data);
    }
    public function proposal_save()
    {
        // ambil file
        $fileProposal = $this->request->getFile('file');
        // pindahkan file ke folder
        $fileProposal->move('img');
        //ambil nama file
        $namaProposal = $fileProposal->getName();
        $this->proposal->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
            'ketua_kegiatan' => $this->request->getVar('ketua_kegiatan'),
            'file' => $namaProposal
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/proposal');
    }
}
