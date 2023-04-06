<?php
if (isset($_POST['iddel'])) {
    require_once 'dbkoneksi.php';
    $_iddel = $_POST['iddel'];
    $sql = "DELETE FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_iddel]);
    //redirect page
    header('location:list_produk.php');
}
?>