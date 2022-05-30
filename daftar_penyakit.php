<div class="container">
<div class="col-12">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
		  <div class="card-header">
		  <h6 class="m-0 font-weight-bold text-primary">
		  <i class="fas fa-fw fa-book mr-1"></i>Daftar Penyakit Yang Terdapat Dalam Sistem
		  </h6>
		  </div>
		  
		  <div class="card-body">
			
  <?php 
  	include "admin/koneksi.php";
	$sql = "SELECT * FROM tb_penyakit ORDER BY kdpenyakit";
	$qry = mysqli_query($koneksi,$sql) or die ("SQL Error".mysqli_error($koneksi));
	$no=0;
	while ($data=mysqli_fetch_array($qry)) {
	$no++;
  ?>
  
  <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold"><?php echo $data['nama_penyakit']; ?></h6>
                </div>
                <div class="card-body">
                  <b>Defenisi:</b><br />
  <p><?php echo $data['definisi'];?></p>
  
  <b>Solusi</b><br />
  <p><?php echo $data['solusi'];?></p>
                </div>
              </div>
  
  
  <?php
  }
  ?>

		  </div>
		</div>
</div>
</div>