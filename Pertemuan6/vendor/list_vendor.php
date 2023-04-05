<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM vendor";
   $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_vendor.php" role="button">Create Vendor</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr style="text-align: center;">
            <th>No</th>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Kota</th>
            <th>Kontak</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
        <tr style="text-align: center;">
            <td><?=$nomor?></td>
            <td><?=$row['nomor']?></td>
            <td><?=$row['nama']?></td>
            <td><?=$row['kota']?></td>
            <td><?=$row['kontak']?></td>                
            <td>
                <a class="btn btn-primary" href="view_vendor.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="edit_vendor.php?idedit=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_vendor.php?iddel=<?=$row['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data Pelanggan <?=$row['nama']?>?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>