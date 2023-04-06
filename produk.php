<?php
$models = new produk();
$data_produk = $models->tampilProduk();
?>
<div class="content-wrapper">
    <div class = "content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
                            <th>Min Stok</th>
                            <th>Jenis Produk</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_produk as $row){
                        ?>   
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['kode']?></td>
                            <td><?= $row ['nama']?></td>
                            <td><?= $row ['harga_beli']?></td>
                            <td><?= $row ['harga_jual']?></td>
                            <td><?= $row ['stok']?></td>
                            <td><?= $row ['min_stok']?></td>
                            <td><?= $row ['jenis']?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbdody>
                </table>
            </div>
        </div>
    </div>
</div>