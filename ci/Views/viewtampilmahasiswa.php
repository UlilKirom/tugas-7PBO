
<!DOCTYPE html>
<html>
<head>
    <title >TUGAS PBO CRUD PHP & MY SQL </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

    <H1 class="text-center"> TUGAS PBO CRUD PHP & MY SQL </H1>
    <h5 class="text-center">Mutiara Vebriani (20051214014)</h5>
    <p>
         <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formtambah')?>'">
             Tambah data
         </button>
     </p>
<!-- TABEL AWAL -->
<div class="card mt-5">
      <div class="card-header bg-success text-white">
        Data Mahasiswa Sistem Informasi 2020 B UNESA
      </div>
      <div class="card-body">
       <table class="table table-bordered table-striped">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Email</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
        <tbody>
               <?php
               $no =0;
               foreach ($tampildata as $row): 
                $no++;
               ?>
               <tr>
            <th><?= $no; ?></th>
            <td><?= $row->nim ?></td>
            <td><?= $row->namamhs ?></td>
            <td><?= $row->jk ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->kota ?></td>
            <td><?= $row->email ?></td>
            <td><?= $row->foto ?></td>
            <td>
                <button type="button" onclick="hapus('<?= $row->nim ?>')">
                Hapus
                </button>

                <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formedit/'.$row->nim)?>'">
             Edit
         </button>
            </td>
               </tr>
               <?php 
endforeach;
?>

	   </table>
	  </div>
	</div>
	<!-- TABEL AKHIR -->

    </tbody>
       </table>
           <script>
               function hapus(nim){
                   pesan= confirm('Yakin menghapus data mahasiswa?');
                   if(pesan){
                       window.location.href=("<?= site_url('mahasiswa/hapus/')?>")+nim;
                   }else return false;
               }
               </script>
           </html>

         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>