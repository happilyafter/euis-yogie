<?php 
        include "koneksi.php";

        //proses eksekusi
        $nama_pegawai = $_POST['nama_pegawai'];
        $komentar = $_POST['komentar'];

        // $tambahdata = "INSERT INTO `tbl_pegawai` (`id`, `nama_pegawai`, `komentar`, `status`) VALUES (NULL, '$nama_pegawai', '$komentar', 1)";
        // mysqli_query($koneksi, $tambahdata);

        //Query input menginput data kedalam tabel barang
        $sql="insert into tbl_pegawai (`id`, `nama_pegawai`, `komentar`, `status`) VALUES (NULL, '$nama_pegawai', '$komentar', 1)";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($koneksi,$sql);

?>