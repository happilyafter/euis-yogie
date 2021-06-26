
    <table class="table">

        <?php 
            include "koneksi.php";
            $sql="select * from tbl_pegawai where status=1";
            $hasil=mysqli_query($koneksi,$sql);
        ?>

        <tbody style="font-size: .8rem;">

        <?php
            while ($data = mysqli_fetch_array($hasil)) {
        ?>
            <tr>
            <b><?php echo $data['nama_pegawai'];?> </b><br>
            <?php echo $data['komentar'];?>
            <hr>
            </tr>
        <?php } ?>

        </tbody>
    </table>
