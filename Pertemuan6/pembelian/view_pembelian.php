


<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanggan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA pelanggan ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['tanggal']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['jumlah']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?=$row['harga']?></td>
        </tr>
        <tr>
            <td>Nama Vendor</td>
            <td><?=$row['vendor']?></td>
        </tr>
        
    </tbody>
</table>