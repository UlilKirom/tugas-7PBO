<?php
namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model{
   function __construct()
   {
       $this->dbs = db_connect();
   } 
   function tampildata(){
    return $this->dbs->table('tmhs')->get();
   }

   function simpan($data){
    return $this->dbs->table('tmhs')->insert($data);
   }
   function hapusdata($nim){
    return $this->dbs->table('tmhs')->delete(['nim' => $nim]);
   }

   function ambildata($nim){
    return $this->dbs->table('tmhs')->getwhere(['nim'=>$nim]);
   }
}