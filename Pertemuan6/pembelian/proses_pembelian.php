<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_tanggal = $_POST['tanggal'];
   $_nomor = $_POST['nomor'];
   $_produk = $_POST['produk_id'];
   $_jumlah = $_POST['jumlah'];
   $_harga = $_POST['harga'];
   $_vendor = $_POST['vendor'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_tanggal; // ? 1
   $ar_data[]=$_nomor; // ? 2
   $ar_data[]=$_produk;// 3
   $ar_data[]=$_jumlah;
   $ar_data[]=$_harga;
   $ar_data[]=$_vendor; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pembelian (tanggal,nomor,produk_id,jumlah,
    harga,vendor) VALUES (?,?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pembelian SET tanggal=?,nomor=?,produk_id=?,
    jumlah=?,harga=?,vendor_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:list_pembelian.php');
?>