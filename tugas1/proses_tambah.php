<?php
    include "koneksi.php";

    $tanggal= $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $nama = $_POST['nama'];
    $notelpon = $_POST['tlpon'];


    $tambah = $_POST['tambah'];

    if ($tambah){
        $sql = mysqli_query($connect, "INSERT INTO job
        VALUES('', '$tanggal', '$deskripsi','$nama','$notelpon')");
        if($sql){?>
            <script>
                alert('Tambah Data Sukses');
                window.location.href = "tampilan.php";
            </script>
    <?php
        }else{
            echo "Tambah Data Gagal";
        }
    }
    
    ?>