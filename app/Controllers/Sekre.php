<?php

use CodeIgniter\codeIgniter;
use App\Models\SuratkeluarModel;
use App\Models\SyuroModel;
use App\Models\KajianModel;
use App\Models\LpjModel;
use App\Models\ProposalModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\DownloadResponse;

namespace App\Controllers;

use Config\App;

class Sekre extends BaseController
{
    protected $suratkeluar;
    protected $syuro;
    protected $kajian;
    protected $lpj;
    protected $proposal;
    protected $logs;

    public function __construct()
    {
        $this->suratkeluar = new \App\Models\SuratkeluarModel(); // bisa di taro di base controller
        $this->kajian = new \App\Models\KajianModel();
        $this->syuro = new \App\Models\SyuroModel();
        $this->lpj = new \App\Models\LpjModel();
        $this->proposal = new \App\Models\ProposalModel();
        $this->logs = new \App\Models\LogsModel();
    }

    // SURAT KELUAR
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
        $this->logs->insertLogByRoute('/surat_save');
        $this->suratkeluar->save([
            'nomor' => $this->request->getVar('nomor'),
            'tanggal_buat' => $this->request->getVar('tanggal_buat'),
            'tanggal_acara' => $this->request->getVar('tanggal_acara'),
            'untuk' => $this->request->getVar('untuk'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);
        session()->setFlashdata('pesan', 'Data Surat Keluar Berhasil Ditambahkan');
        return redirect()->to('/surat');
    }
    public function surat_delete($id)
    {
        $this->logs->insertLogByRoute('/sekre/surat_delete/' . $id);
        $this->suratkeluar->delete($id);
        session()->setFlashdata('pesan', 'Surat Keluar Berhasil Dihapus');
        return redirect()->to('/sekre/surat_keluar');
    }

    // PRESENSI KAJIAN
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
        $this->logs->insertLogByRoute('/presensi_save');
        // ambil file
        $filePresensi = $this->request->getFile('file');
        // pindahkan file ke folder
        $filePresensi->move('upload');
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
        session()->setFlashdata('pesan', 'Data Presensi Kajian Berhasil Ditambahkan');
        return redirect()->to('/presensi');
    }
    public function kajian_delete($id)
    {
        $this->logs->insertLogByRoute('/sekere/kajian_delete/' . $id);
        $this->kajian->delete($id);
        session()->setFlashdata('pesan', 'Presensi Kajian Berhasil Dihapus');
        return redirect()->to('/sekre/presensi_kajian');
    }

    // LAPORAN SYURO
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
        $this->logs->insertLogByRoute('/syuro_save');
        // ambil file
        $fileSyuro = $this->request->getFile('file');
        // pindahkan file ke folder
        $fileSyuro->move('upload');
        //ambil nama file
        $namaSyuro = $fileSyuro->getName();
        $this->syuro->save([
            'departemen' => $this->request->getVar('departemen'),
            'tanggal' => $this->request->getVar('tanggal'),
            'file' => $namaSyuro
        ]);
        session()->setFlashdata('pesan', 'Data Laporan Syuro Berhasil Ditambahkan');
        return redirect()->to('/syuro');
    }
    public function syuro_delete($id)
    {
        $this->logs->insertLogByRoute('/sekre/syuro_delete/' . $id);
        $this->syuro->delete($id);
        session()->setFlashdata('pesan', 'Laporan Syuro Berhasil Dihapus');
        return redirect()->to('/sekre/syuro');
    }

    // LPJ
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
        $this->logs->insertLogByRoute('/lpj_save');
        // ambil file
        $filelpj = $this->request->getFile('file');
        // pindahkan file ke folder
        $filelpj->move('upload');
        //ambil nama file
        $namalpj = $filelpj->getName();
        $this->lpj->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
            'file' => $namalpj
        ]);
        session()->setFlashdata('pesan', 'Data LPJ Berhasil Ditambahkan');
        return redirect()->to('/lpj');
    }
    public function lpj_delete($id)
    {
        $this->logs->insertLogByRoute('/admin/lpj_delete/' . $id);
        $this->lpj->delete($id);
        session()->setFlashdata('pesan', 'LPJ Berhasil Dihapus');
        return redirect()->to('/sekre/lpj');
    }
    function lpj_download($file)
    {
        //get file info from database
        // $filelpj = $this->request->getFile('file');
        // get name 
        // $namalpj = $filelpj->getName();
        $filelpj = '/upload/' . $file;
        return $this->response->download($filelpj, null);

        // return $this->response->download($namalpj, $filelpj);
    }

    // PROPOSAL
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
        $this->logs->insertLogByRoute('/proposal_save');
        // ambil file
        $fileProposal = $this->request->getFile('file');
        // pindahkan file ke folder
        $fileProposal->move('upload');
        //ambil nama file
        $namaProposal = $fileProposal->getName();
        $this->proposal->save([
            'kegiatan' => $this->request->getVar('kegiatan'),
            'tanggal_kegiatan' => $this->request->getVar('tanggal_kegiatan'),
            'ketua_kegiatan' => $this->request->getVar('ketua_kegiatan'),
            'file' => $namaProposal
        ]);
        session()->setFlashdata('pesan', 'Data Proposal Berhasil Ditambahkan');
        return redirect()->to('/proposal');
    }
    public function proposal_delete($id)
    {
        $this->logs->insertLogByRoute('/sekre/proposal_delete/' . $id);
        $this->proposal->delete($id);
        session()->setFlashdata('pesan', 'File Proposal Berhasil Dihapus');
        return redirect()->to('/sekre/proposal');
    }
}
