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
            foreach ($data as $wijen) {
            ?>
                <tr>
                    <td><?php echo $wijen->no_aksesi ?></td>
                    <td><?php echo $wijen->nama_aksesi ?></td>
                    <td><img src="<?php echo base_url('assets/data/' . $wijen->Image) ?>" width="64" /></td>
                    <td><?php if ($wijen->kar_01 == 1) {
                            echo 'Hijau';
                        } else if ($wijen->kar_01 == 2) {
                            echo 'Hijau kekuningan';
                        } else if ($wijen->kar_01 == 3) {
                            echo 'Hijau tua';
                        } else if ($wijen->kar_01 == 4) {
                            echo 'Hijau keunguan';
                        } ?></td>
                    <td><?php if ($wijen->kar_02 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($wijen->kar_02 == 1) {
                            echo 'Berbulu halus';
                        } else if ($wijen->kar_02 == 2) {
                            echo 'Berbulu';
                        } else if ($wijen->kar_02 == 3) {
                            echo 'Berbulu lebat';
                        } ?></td>
                    <td><?php if ($wijen->kar_03 == 1) {
                            echo 'Menyirip';
                        } else if ($wijen->kar_03 == 2) {
                            echo 'Campuran';
                        } else if ($wijen->kar_03 == 3) {
                            echo 'Zig-zag';
                        } ?></td>
                    <td><?php if ($wijen->kar_04 == 1) {
                            echo 'Utuh';
                        } else if ($wijen->kar_04 == 2) {
                            echo 'Berbentuk';
                        } ?></td>
                    <td><?php if ($wijen->kar_05 == 1) {
                            echo 'Datar';
                        } else if ($wijen->kar_05 == 2) {
                            echo 'Cembung';
                        } ?></td>
                    <td><?php if ($wijen->kar_06 == 1) {
                            echo 'Tegak';
                        } else if ($wijen->kar_06 == 2) {
                            echo 'Mendatar';
                        } else if ($wijen->kar_06 == 3) {
                            echo 'Menggantung';
                        } ?></td>
                    <td><?php if ($wijen->kar_07 == 1) {
                            echo 'Putih';
                        } else if ($wijen->kar_07 == 2) {
                            echo 'Putih sedikit ungu';
                        } else if ($wijen->kar_07 == 3) {
                            echo 'Putih keunguan';
                        } else if ($wijen->kar_07 == 4) {
                            echo 'Keunguan';
                        } else if ($wijen->kar_07 == 5) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($wijen->kar_08 == 1) {
                            echo 'Warna halus';
                        } else if ($wijen->kar_08 == 2) {
                            echo 'Warna tajam';
                        } ?></td>
                    <td><?php if ($wijen->kar_09 == 1) {
                            echo 'Tidak berbulu';
                        } else if ($wijen->kar_09 == 2) {
                            echo 'Berbulu';
                        } ?></td>
                    <td><?php if ($wijen->kar_10 == 1) {
                            echo 'Satu';
                        } else if ($wijen->kar_10 == 2) {
                            echo 'Dua';
                        } else if ($wijen->kar_10 == 3) {
                            echo 'Tiga';
                        } ?></td>
                    <td><?php echo $wijen->kar_11 ?></td>
                    <td><?php echo $wijen->kar_12 ?></td>
                    <td><?php if ($wijen->kar_13 == 1) {
                            echo 'Kecil panjang';
                        } else if ($wijen->kar_13 == 2) {
                            echo 'Kecil pendek';
                        } else if ($wijen->kar_13 == 3) {
                            echo 'Panjang besar';
                        } else if ($wijen->kar_13 == 4) {
                            echo 'Panjang kecil';
                        } ?></td>
                    <td><?php if ($wijen->kar_14 == 1) {
                            echo 'Dua';
                        } else if ($wijen->kar_14 == 2) {
                            echo 'Lebih dari dua';
                        } ?></td>
                    <td><?php if ($wijen->kar_15 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($wijen->kar_15 == 1) {
                            echo 'Jarang';
                        } else if ($wijen->kar_15 == 2) {
                            echo 'Rapat';
                        } ?></td>
                    <td><?php if ($wijen->kar_16 == 1) {
                            echo 'Coklat keputihan';
                        } else if ($wijen->kar_16 == 2) {
                            echo 'Coklat';
                        } else if ($wijen->kar_16 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($wijen->kar_17 == 1) {
                            echo 'Putih';
                        } else if ($wijen->kar_17 == 2) {
                            echo 'Coklat muda';
                        } else if ($wijen->kar_17 == 3) {
                            echo 'Coklat';
                        } else if ($wijen->kar_17 == 4) {
                            echo 'Coklat kemerahan';
                        } else if ($wijen->kar_17 == 5) {
                            echo 'Abu-abu';
                        } else if ($wijen->kar_17 == 6) {
                            echo 'Hitam';
                        } else if ($wijen->kar_17 == 7) {
                            echo 'Warna lainnya';
                        } ?></td>
                    <td><?php if ($wijen->kar_18 == 1) {
                            echo 'Tidak berbcabang';
                        } else if ($wijen->kar_18 == 2) {
                            echo 'Cabang dibawah';
                        } else if ($wijen->kar_18 == 3) {
                            echo 'Cabang diatas';
                        } ?></td>
                    <td><?php if ($wijen->kar_19 == 1) {
                            echo 'Kuning';
                        } else if ($wijen->kar_19 == 2) {
                            echo 'Hijau';
                        } else if ($wijen->kar_19 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($wijen->kar_20 == 0) {
                            echo 'Tidak berbulu';
                        } else if ($wijen->kar_20 == 1) {
                            echo 'Berbulu halus';
                        } else if ($wijen->kar_20 == 2) {
                            echo 'Berbulu';
                        } else if ($wijen->kar_20 == 3) {
                            echo 'Berbuulu lebat';
                        } ?></td>
                    <td><?php if ($wijen->kar_21 == 1) {
                            echo 'Segi enam (bulat)';
                        } else if ($wijen->kar_21 == 2) {
                            echo 'Segi enam';
                        } ?></td>
                    <td><?php echo $wijen->kar_22 ?></td>
                    <td><?php echo $wijen->kar_23 ?></td>
                    <td><?php echo $wijen->kar_24 ?></td>
                    <td><?php echo $wijen->kar_25 ?></td>
                    <td><?php echo $wijen->kar_26 ?></td>
                    <td><?php echo $wijen->kar_27 ?></td>
                    <td><?php if ($wijen->kar_28 == 1) {
                            echo 'Empat';
                        } else if ($wijen->kar_28 == 2) {
                            echo 'Lebih dari empat';
                        } ?></td>
                    <td><?php echo $wijen->kar_29 ?></td>
                    <td><?php echo $wijen->kar_30 ?></td>
                    <td><?php echo $wijen->kar_31 ?></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>



</body>

</html>