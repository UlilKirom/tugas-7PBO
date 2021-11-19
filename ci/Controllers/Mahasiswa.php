<?php
namespace App\Controllers;

use CodeIgniter\controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller{
  
    public function index()
    {
    $mhs=new Modelmahasiswa ();
    $data =[
        'tampildata' => $mhs->tampildata()->getresult()
];
echo view('viewtampilmahasiswa',$data);
    }

    public function formtambah()
    {
        helper('form');
        echo view('viewformtambah');
    }

    public function simpandata(){
        $data = [
            'nim' => $this->request->getpost('tnim'),
            'namamhs' => $this->request->getpost('tnama'),
            'jk' => $this->request->getpost('tjk'),
            'kota' => $this->request->getpost('tkota'),
            'alamat' => $this->request->getpost('talm'),
            'email' => $this->request->getpost('tkeml'),
            'foto' => $this->request->getpost('tfoto'),
        ];
        $mhs=new Modelmahasiswa ();
        
        $simpan = $mhs->simpan($data);

        if($simpan){
            return redirect()->to("/mahasiswa/index");
        }
    }

    function hapus(){
       $uri = service('uri');
       $nim= $uri->getSegment('3');

       $mhs=new Modelmahasiswa ();
       $mhs->hapusdata($nim);

       return redirect()->to("/mahasiswa/index");
    } 

    function formedit(){
        helper('form');
        $uri = service('uri');
       $nim= $uri->getSegment('3');

       $mhs=new Modelmahasiswa ();

       $ambildata = $mhs->ambildata($nim);

       if(count($ambildata->getresult())>0){
        $row =$ambildata->getRow(); 
        $data =[
               'nim' => $nim,
               'nama' => $row->namamhs,
               'jk' => $row->jk,
               'kota' => $row->kota,
               'email' => $row->email,
               'foto' => $row->foto,
           ];
           echo view ('viewformedit',$data);
       }
    }
}