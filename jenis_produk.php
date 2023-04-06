<?php
$model = new Jenis_produk();
$data_jenis_produk = $model->tampilJenis_produk();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
              <li class="breadcrumb-item active">Jenis Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
<section class="content">
<div class="row">
    <div class="col-12">
         <table class="table table-striped table-responsive">
             <thead>
                 <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                
                </tr>
            </thead>
            <tbody>
                <!-- cetak data array produk -->
                <?php
                $no = 1;
                foreach ($data_jenis_produk as $value) {
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value ['nama'] ?></td>
            
                </tr>
                <?php
                $no++;
                }
                ?>   
            </tbody>
        </table>
    </div>
</div>
</section>
<!-- /.content -->
</div>

