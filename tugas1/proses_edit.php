<?php
include "koneksi.php";
$id = $_GET['id'];
$tanggal= $_GET['tanggal'];
$deskripsi = $_GET['deskripsi'];
$nama = $_GET['nama'];
$notelpon = $_GET['tlpon'];

$edit = $_GET['edit'];

if ($edit) {
    $sql = mysqli_query($connect, "UPDATE job
    SET id='$id', tanggal='$tanggal', deskripsi='$deskripsi', nama='$nama', tlpon='$notelpon'
    WHERE id='$id'");
    
    if ($sql) { ?>
    <script>
        alert('Update Data Sukses');
        window.location.href = "tampilan.php";
    </script>
    
<?php
    }else {
        echo "Update Data Gagal";
    }
}
var_dump($sql);
?>