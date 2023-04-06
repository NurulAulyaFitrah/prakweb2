<!-- model dalam mvc berfungsi sebagai otak dari aplikasi 
karena memperoses data dan aturan bisnis yang terkait dengan database -->
<?php
class Pelanggan{
    private $koneksi;
    public function __construct(){
        //sebuah function yang di jalankan awalan
        global $conn;
        $this->koneksi = $conn;
    }
    public function tampilPelanggan(){
    
        $sql = "SELECT * FROM pelanggan"; 
        //kirim data select menggunakan method prepare 
        $ps = $this->koneksi->prepare($sql);
    //eksekusi data select yang sudah di siapkan menggunakan method prepare 
    //menggunakan method execute
        $ps->execute();
        //simpan data sql yang sudah di eksekusi ke dalam data array
        //menggunakan method fetchall
        $data = $ps->fetchAll();
        //kembalikan data produk dalam bentuk data array yang sudah 
        //disimpan ke dalam variable $data;
        return $data;

    }
}
?>