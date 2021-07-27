<html>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=DataWijen.xls");
    ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>

            <tr>
                <th>No</th>
                <!-- <th>Action</th> -->
                <th>No. Aksesi</th>
                <th>Nama Aksesi</th>
                <th>Warna daun</th>
                <th>Bulu daun</th>
                <th>Posisi daun</th>
                <th>Bentuk daun</th>
                <th>Permukaan daun</th>
                <th>Sudut daun pada batang</th>
                <th>Warna mahkota bunga</th>
                <th>Warna bibir bunga</th>
                <th>Bulu mahkota bunga</th>
                <th>Jumlah bunga per buku</th>
                <th>Bunga pertama pada ruas ke</th>
                <th>Rata-rata panjang ruas</th>
                <th>Bentuk polong</th>
                <th>Jumlah kelopak polong</th>
                <th>Kerapatan bulu polong</th>
                <th>Warna polong kering</th>
                <th>Warna biji</th>
                <th>Cabang</th>
                <th>Warna batang</th>
                <th>Bulu batang</th>
                <th>Penampang batang</th>
                <th>Umur 50% berbunga</th>
                <th>Umur 75% masa panen</th>
                <th>Tinggi tanaman</th>
                <th>Jumlah cabang per tanaman</th>
                <th>Jumlah polong per tanaman</th>
                <th>Jumlah polong per ruas</th>
                <th>Jumlah lokul per polong</th>
                <th>Panjang polong</th>
                <th>Jumlah biji per polong</th>
                <th>Hasil biji per 15 m persegi</th>


                <?php foreach ($tabel as $tab) :
                    for ($i = 1; $i < 99; $i++) { ?>
                        <?php if ($tab['kar'] == "kar_$i") { ?>
                            <th>
                                <?php echo $tab['question']; ?>
                            </th>
                        <?php } ?>
                    <?php } ?>
                <?php endforeach ?>

            </tr>
        </thead>
        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
        <tbody>
            <?php
            foreach ($data as $kps) {
            ?>
                <tr>
                    <td><?php echo $kps->no_aksesi ?></td>
                    <td><?php echo $kps->nama_aksesi ?></td>
                    <td><img src="<?php echo base_url('assets/data/' . $kps->Image) ?>" width="64" /></td>
                    <td><?php if ($kps->kar_01 == 1) {
                            echo 'Hijau';
                        } else if ($kps->kar_01 == 2) {
                            echo 'Hijau kekuningan';
                        } else if ($kps->kar_01 == 3) {
                            echo 'Hijau tua';
                        } else if ($kps->kar_01 == 4) {
                            echo 'Hijau keunguan';
                        } ?></td>
                    <td><?php if ($kps->kar_02 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($kps->kar_02 == 1) {
                            echo 'Berbulu halus';
                        } else if ($kps->kar_02 == 2) {
                            echo 'Berbulu';
                        } else if ($kps->kar_02 == 3) {
                            echo 'Berbulu lebat';
                        } ?></td>
                    <td><?php if ($kps->kar_03 == 1) {
                            echo 'Menyirip';
                        } else if ($kps->kar_03 == 2) {
                            echo 'Campuran';
                        } else if ($kps->kar_03 == 3) {
                            echo 'Zig-zag';
                        } ?></td>
                    <td><?php if ($kps->kar_04 == 1) {
                            echo 'Utuh';
                        } else if ($kps->kar_04 == 2) {
                            echo 'Berbentuk';
                        } ?></td>
                    <td><?php if ($kps->kar_05 == 1) {
                            echo 'Datar';
                        } else if ($kps->kar_05 == 2) {
                            echo 'Cembung';
                        } ?></td>
                    <td><?php if ($kps->kar_06 == 1) {
                            echo 'Tegak';
                        } else if ($kps->kar_06 == 2) {
                            echo 'Mendatar';
                        } else if ($kps->kar_06 == 3) {
                            echo 'Menggantung';
                        } ?></td>
                    <td><?php if ($kps->kar_07 == 1) {
                            echo 'Putih';
                        } else if ($kps->kar_07 == 2) {
                            echo 'Putih sedikit ungu';
                        } else if ($kps->kar_07 == 3) {
                            echo 'Putih keunguan';
                        } else if ($kps->kar_07 == 4) {
                            echo 'Keunguan';
                        } else if ($kps->kar_07 == 5) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($kps->kar_08 == 1) {
                            echo 'Warna halus';
                        } else if ($kps->kar_08 == 2) {
                            echo 'Warna tajam';
                        } ?></td>
                    <td><?php if ($kps->kar_09 == 1) {
                            echo 'Tidak berbulu';
                        } else if ($kps->kar_09 == 2) {
                            echo 'Berbulu';
                        } ?></td>
                    <td><?php if ($kps->kar_10 == 1) {
                            echo 'Satu';
                        } else if ($kps->kar_10 == 2) {
                            echo 'Dua';
                        } else if ($kps->kar_10 == 3) {
                            echo 'Tiga';
                        } ?></td>
                    <td><?php echo $kps->kar_11 ?></td>
                    <td><?php echo $kps->kar_12 ?></td>
                    <td><?php if ($kps->kar_13 == 1) {
                            echo 'Kecil panjang';
                        } else if ($kps->kar_13 == 2) {
                            echo 'Kecil pendek';
                        } else if ($kps->kar_13 == 3) {
                            echo 'Panjang besar';
                        } else if ($kps->kar_13 == 4) {
                            echo 'Panjang kecil';
                        } ?></td>
                    <td><?php if ($kps->kar_14 == 1) {
                            echo 'Dua';
                        } else if ($kps->kar_14 == 2) {
                            echo 'Lebih dari dua';
                        } ?></td>
                    <td><?php if ($kps->kar_15 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($kps->kar_15 == 1) {
                            echo 'Jarang';
                        } else if ($kps->kar_15 == 2) {
                            echo 'Rapat';
                        } ?></td>
                    <td><?php if ($kps->kar_16 == 1) {
                            echo 'Coklat keputihan';
                        } else if ($kps->kar_16 == 2) {
                            echo 'Coklat';
                        } else if ($kps->kar_16 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($kps->kar_17 == 1) {
                            echo 'Putih';
                        } else if ($kps->kar_17 == 2) {
                            echo 'Coklat muda';
                        } else if ($kps->kar_17 == 3) {
                            echo 'Coklat';
                        } else if ($kps->kar_17 == 4) {
                            echo 'Coklat kemerahan';
                        } else if ($kps->kar_17 == 5) {
                            echo 'Abu-abu';
                        } else if ($kps->kar_17 == 6) {
                            echo 'Hitam';
                        } else if ($kps->kar_17 == 7) {
                            echo 'Warna lainnya';
                        } ?></td>
                    <td><?php if ($kps->kar_18 == 1) {
                            echo 'Tidak berbcabang';
                        } else if ($kps->kar_18 == 2) {
                            echo 'Cabang dibawah';
                        } else if ($kps->kar_18 == 3) {
                            echo 'Cabang diatas';
                        } ?></td>
                    <td><?php if ($kps->kar_19 == 1) {
                            echo 'Kuning';
                        } else if ($kps->kar_19 == 2) {
                            echo 'Hijau';
                        } else if ($kps->kar_19 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($kps->kar_20 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($kps->kar_20 == 1) {
                            echo 'Berbulu halus';
                        } else if ($kps->kar_20 == 2) {
                            echo 'Berbulu';
                        } else if ($kps->kar_20 == 3) {
                            echo 'Berbuulu lebat';
                        } ?></td>
                    <td><?php if ($kps->kar_21 == 1) {
                            echo 'Segi enam (bulat)';
                        } else if ($kps->kar_21 == 2) {
                            echo 'Segi enam';
                        } ?></td>
                    <td><?php echo $kps->kar_22 ?></td>
                    <td><?php echo $kps->kar_23 ?></td>
                    <td><?php echo $kps->kar_24 ?></td>
                    <td><?php echo $kps->kar_25 ?></td>
                    <td><?php echo $kps->kar_26 ?></td>
                    <td><?php echo $kps->kar_27 ?></td>
                    <td><?php if ($kps->kar_28 == 1) {
                            echo 'Empat';
                        } else if ($kps->kar_28 == 2) {
                            echo 'Lebih dari empat';
                        } ?></td>
                    <td><?php echo $kps->kar_29 ?></td>
                    <td><?php echo $kps->kar_30 ?></td>
                    <td><?php echo $kps->kar_31 ?></td>
                    <?php if ($kps->kar_32 != null) { ?>
                        <td><?php if ($kps->kar_32 > 0) {
                                echo $kps->kar_32;
                            ?></td>
                    <?php } else if ($kps->kar_32 == null) { ?>
                        <td><?php echo null;
                            } ?></td>
                        <?php } ?><?php if ($kps->kar_33 != null) { ?>
                        <td><?php if ($kps->kar_33 > 0) {
                                            echo $kps->kar_33;
                            ?></td>
                    <?php } else if ($kps->kar_33 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_34 != null) { ?>
                        <td><?php if ($kps->kar_34 > 0) {
                                            echo $kps->kar_34;
                            ?></td>
                    <?php } else if ($kps->kar_34 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_35 != null) { ?>
                        <td><?php if ($kps->kar_35 > 0) {
                                            echo $kps->kar_35;
                            ?></td>
                    <?php } else if ($kps->kar_35 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_36 != null) { ?>
                        <td><?php if ($kps->kar_36 > 0) {
                                            echo $kps->kar_36;
                            ?></td>
                    <?php } else if ($kps->kar_36 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_37 != null) { ?>
                        <td><?php if ($kps->kar_37 > 0) {
                                            echo $kps->kar_37;
                            ?></td>
                    <?php } else if ($kps->kar_37 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_38 != null) { ?>
                        <td><?php if ($kps->kar_38 > 0) {
                                            echo $kps->kar_38;
                            ?></td>
                    <?php } else if ($kps->kar_38 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_39 != null) { ?>
                        <td><?php if ($kps->kar_39 > 0) {
                                            echo $kps->kar_39;
                            ?></td>
                    <?php } else if ($kps->kar_39 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_40 != null) { ?>
                        <td><?php if ($kps->kar_40 > 0) {
                                            echo $kps->kar_40;
                            ?></td>
                    <?php } else if ($kps->kar_40 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_41 != null) { ?>
                        <td><?php if ($kps->kar_41 > 0) {
                                            echo $kps->kar_41;
                            ?></td>
                    <?php } else if ($kps->kar_41 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_42 != null) { ?>
                        <td><?php if ($kps->kar_42 > 0) {
                                            echo $kps->kar_42;
                            ?></td>
                    <?php } else if ($kps->kar_42 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_43 != null) { ?>
                        <td><?php if ($kps->kar_43 > 0) {
                                            echo $kps->kar_43;
                            ?></td>
                    <?php } else if ($kps->kar_43 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_44 != null) { ?>
                        <td><?php if ($kps->kar_44 > 0) {
                                            echo $kps->kar_44;
                            ?></td>
                    <?php } else if ($kps->kar_44 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_45 != null) { ?>
                        <td><?php if ($kps->kar_45 > 0) {
                                            echo $kps->kar_45;
                            ?></td>
                    <?php } else if ($kps->kar_45 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_46 != null) { ?>
                        <td><?php if ($kps->kar_46 > 0) {
                                            echo $kps->kar_46;
                            ?></td>
                    <?php } else if ($kps->kar_46 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_47 != null) { ?>
                        <td><?php if ($kps->kar_47 > 0) {
                                            echo $kps->kar_47;
                            ?></td>
                    <?php } else if ($kps->kar_47 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_48 != null) { ?>
                        <td><?php if ($kps->kar_48 > 0) {
                                            echo $kps->kar_48;
                            ?></td>
                    <?php } else if ($kps->kar_48 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_49 != null) { ?>
                        <td><?php if ($kps->kar_49 > 0) {
                                            echo $kps->kar_49;
                            ?></td>
                    <?php } else if ($kps->kar_49 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_50 != null) { ?>
                        <td><?php if ($kps->kar_50 > 0) {
                                            echo $kps->kar_50;
                            ?></td>
                    <?php } else if ($kps->kar_50 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_51 != null) { ?>
                        <td><?php if ($kps->kar_51 > 0) {
                                            echo $kps->kar_51;
                            ?></td>
                    <?php } else if ($kps->kar_51 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_52 != null) { ?>
                        <td><?php if ($kps->kar_52 > 0) {
                                            echo $kps->kar_52;
                            ?></td>
                    <?php } else if ($kps->kar_52 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_53 != null) { ?>
                        <td><?php if ($kps->kar_53 > 0) {
                                            echo $kps->kar_53;
                            ?></td>
                    <?php } else if ($kps->kar_53 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_54 != null) { ?>
                        <td><?php if ($kps->kar_54 > 0) {
                                            echo $kps->kar_54;
                            ?></td>
                    <?php } else if ($kps->kar_54 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_55 != null) { ?>
                        <td><?php if ($kps->kar_55 > 0) {
                                            echo $kps->kar_55;
                            ?></td>
                    <?php } else if ($kps->kar_55 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_56 != null) { ?>
                        <td><?php if ($kps->kar_56 > 0) {
                                            echo $kps->kar_56;
                            ?></td>
                    <?php } else if ($kps->kar_56 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_57 != null) { ?>
                        <td><?php if ($kps->kar_57 > 0) {
                                            echo $kps->kar_57;
                            ?></td>
                    <?php } else if ($kps->kar_57 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_58 != null) { ?>
                        <td><?php if ($kps->kar_58 > 0) {
                                            echo $kps->kar_58;
                            ?></td>
                    <?php } else if ($kps->kar_58 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_59 != null) { ?>
                        <td><?php if ($kps->kar_59 > 0) {
                                            echo $kps->kar_59;
                            ?></td>
                    <?php } else if ($kps->kar_59 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_60 != null) { ?>
                        <td><?php if ($kps->kar_60 > 0) {
                                            echo $kps->kar_60;
                            ?></td>
                    <?php } else if ($kps->kar_60 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>



</body>

</html>