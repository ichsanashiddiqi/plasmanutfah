<html>

<head>
    <title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>

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
    header("Content-Disposition: attachment; filename=DataKenaf.xls");
    ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>

            <tr>
                <th>No</th>
                <th>Action</th>
                <th>No. Aksesi</th>
                <th>Nama Aksesi</th>
                <th>Gambar</th>
                <th>Warna batang 1</th>
                <th>Warna batang 2</th>
                <th>Warna daun</th>
                <th>Warna urat daun</th>
                <th>Warna tepi daun</th>
                <th>Warna petiol daun</th>
                <th>Warna stipul daun</th>
                <th>Warna kuncup bunga</th>
                <th>Warna bunga 1</th>
                <th>Warna bunga 2</th>
                <th>Warna buah</th>
                <th>Warna biji</th>
                <th>Permukaan batang</th>
                <th>Tipe buah</th>
                <th>Bentuk biji</th>
                <th>Tipe percabangan</th>
                <th>Bentuk daun</th>
                <th>Permukaan daun</th>
                <th>Ada tidaknya stipul</th>
                <th>Panjang daun</th>
                <th>Lebar daun</th>
                <th>Sudut daun</th>
                <th>Panjang petiole</th>
                <th>Umur bunga 1</th>
                <th>Umur bunga 50% 2</th>
                <th>Panen serat 3</th>
                <th>Panen benih 4</th>
                <th>Tinggi tanaman</th>
                <th>Diameter batang bawah</th>
                <th>Diameter batang tengah</th>
                <th>Diameter batang atas</th>
                <th>Diameter kayu</th>
                <th>Jumlah ruas</th>
                <th>Berat 1000 biji</th>
                <th>Berat serat kering</th>
                <th>Berat kayu kering</th>
                <?php foreach ($tabel as $tab) {
                    for ($i = 36; $i < 99; $i++) { ?>
                        <?php if ($tab->kar == "kar_$i") { ?>
                            <th>
                                <?php echo $tab->question; ?>
                            </th>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>

            </tr>
        </thead>
        <!-- <a class="pull-right btn btn-warning btn-large" style="margin-right:40px" href="<?= base_url('export/exportBro'); ?>">
                            <i class="fa fa-file-excel-o"></i> Export to Excel</a> -->
        <tbody>
            <?php
            foreach ($data as $kenaf) {
            ?>
                <tr>
                    <td><?php echo $kenaf->no ?></td>
                    <td><a href="edit_kenaf/<?= $kenaf->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                        <a href="hapus_kenaf/<?= $kenaf->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                    </td>
                    <td><?php echo $kenaf->no_aksesi ?></td>
                    <td><?php echo $kenaf->nama_aksesi ?></td>
                    <td><img src="<?php echo base_url('assets/data/' . $kenaf->Image) ?>" width="64" /></td>
                    <td><?php if ($kenaf->kar_1 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_1 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_1 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_1 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_1 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_1 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_2 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_2 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_2 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_2 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_2 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_2 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_3 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_3 == 2) {
                            echo 'Merah';
                        } else if ($kenaf->kar_3 == 3) {
                            echo 'Hijau Tua';
                        } else if ($kenaf->kar_3 == 4) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_4 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_4 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_4 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_4 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_4 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_4 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_5 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_5 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_5 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_5 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_5 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_5 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_6 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_6 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_6 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_6 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_6 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_6 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_7 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_7 == 2) {
                            echo 'Hijau Kombinasi Merah';
                        } else if ($kenaf->kar_7 == 3) {
                            echo 'Hijau Kombinasi Coklat';
                        } else if ($kenaf->kar_7 == 4) {
                            echo 'Merah';
                        } else if ($kenaf->kar_7 == 5) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_7 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_8 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_8 == 2) {
                            echo 'Kuning';
                        } else if ($kenaf->kar_8 == 3) {
                            echo 'Merah';
                        } else if ($kenaf->kar_8 == 4) {
                            echo 'Ungu';
                        } else if ($kenaf->kar_8 == 5) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_9 == 1) {
                            echo 'Kuning';
                        } else if ($kenaf->kar_9 == 2) {
                            echo 'Merah';
                        } else if ($kenaf->kar_9 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($kenaf->kar_10 == 1) {
                            echo 'Kuning';
                        } else if ($kenaf->kar_10 == 2) {
                            echo 'Merah';
                        } else if ($kenaf->kar_10 == 3) {
                            echo 'Ungu';
                        } ?></td>
                    <td><?php if ($kenaf->kar_11 == 1) {
                            echo 'Hijau';
                        } else if ($kenaf->kar_11 == 2) {
                            echo 'Kuning';
                        } else if ($kenaf->kar_11 == 3) {
                            echo 'Merah';
                        } else if ($kenaf->kar_11 == 4) {
                            echo 'Ungu';
                        } else if ($kenaf->kar_11 == 5) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_12 == 1) {
                            echo 'Abu-abu';
                        } else if ($kenaf->kar_12 == 2) {
                            echo 'Coklat';
                        } else if ($kenaf->kar_12 == 3) {
                            echo 'Coklat Kemarahan';
                        } else if ($kenaf->kar_12 == 4) {
                            echo 'Ungu';
                        } else if ($kenaf->kar_12 == 5) {
                            echo 'Biru';
                        } else if ($kenaf->kar_12 == 6) {
                            echo 'Warna Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_13 == 1) {
                            echo 'Halus';
                        } else if ($kenaf->kar_13 == 2) {
                            echo 'Berbulu';
                        } else if ($kenaf->kar_13 == 3) {
                            echo 'Berduri';
                        } else if ($kenaf->kar_13 == 4) {
                            echo 'Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_14 == 1) {
                            echo 'Dehiscent/Buah mudah pecah';
                        } else if ($kenaf->kar_14 == 2) {
                            echo 'Buah tidak mudah pecah';
                        } ?></td>
                    <td><?php if ($kenaf->kar_15 == 1) {
                            echo 'Reniform';
                        } else if ($kenaf->kar_15 == 2) {
                            echo 'Subreniform';
                        } else if ($kenaf->kar_15 == 3) {
                            echo 'Angular';
                        } else if ($kenaf->kar_15 == 4) {
                            echo 'Bentuk Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_16 == 1) {
                            echo 'Sangat Sedikit';
                        } else if ($kenaf->kar_16 == 11) {
                            echo 'Tidak Bercabang (=1)';
                        } else if ($kenaf->kar_16 == 13) {
                            echo 'Rudimenter (=2)';
                        } else if ($kenaf->kar_16 == 3) {
                            echo 'Sedikit';
                        } else if ($kenaf->kar_16 == 5) {
                            echo 'Sedang';
                        } else if ($kenaf->kar_16 == 7) {
                            echo 'Banyak (=3)';
                        } else if ($kenaf->kar_16 == 9) {
                            echo 'Sangat Banyak (=4)';
                        } ?></td>
                    <td><?php if ($kenaf->kar_17 == 1) {
                            echo 'Jantung';
                        } else if ($kenaf->kar_17 == 2) {
                            echo 'Semi Menjari (=2)';
                        } else if ($kenaf->kar_17 == 3) {
                            echo 'Menjari (=3)';
                        } else if ($kenaf->kar_17 == 4) {
                            echo 'Ovate';
                        } else if ($kenaf->kar_17 == 5) {
                            echo 'Ovate Lanceolate';
                        } else if ($kenaf->kar_17 == 6) {
                            echo 'Lanceolate';
                        } else if ($kenaf->kar_17 == 7) {
                            echo 'Eliptical';
                        } ?></td>
                    <td><?php if ($kenaf->kar_18 == 1) {
                            echo 'Halus';
                        } else if ($kenaf->kar_18 == 2) {
                            echo 'Berbulu';
                        } else if ($kenaf->kar_18 == 3) {
                            echo 'Berduri';
                        } else if ($kenaf->kar_18 == 4) {
                            echo 'Berbulu dan Berduri';
                        } else if ($kenaf->kar_18 == 5) {
                            echo 'Tipe Lainnya';
                        } ?></td>
                    <td><?php if ($kenaf->kar_19 == 1) {
                            echo 'Ada Stipul (=1)';
                        } else if ($kenaf->kar_19 == 2) {
                            echo 'Tidak Ada Stipul (=1)';
                        } else if ($kenaf->kar_19 == 3) {
                            echo 'Lain-lain';
                        } ?></td>
                    <td><?php echo $kenaf->kar_20 ?></td>
                    <td><?php echo $kenaf->kar_21 ?></td>
                    <td><?php if ($kenaf->kar_22 == 1) {
                            echo 'Erect (0-20 derajat)';
                        } else if ($kenaf->kar_22 == 2) {
                            echo 'Semi Erect (21-40 derajat)';
                        } else if ($kenaf->kar_22 == 3) {
                            echo 'Intermediate (41-60 derajat)';
                        } else if ($kenaf->kar_22 == 4) {
                            echo 'Semi Intermediate (61-80 derajat)';
                        } else if ($kenaf->kar_22 == 5) {
                            echo 'Horisontal (81-100 derajat)';
                        } else if ($kenaf->kar_22 == 6) {
                            echo 'Semi Horisontal (101-120 derajat)';
                        } else if ($kenaf->kar_22 == 7) {
                            echo 'Descending (121-140 derajat)';
                        } else if ($kenaf->kar_22 == 8) {
                            echo 'Semi Descending (141-160 derajat)';
                        } else if ($kenaf->kar_22 == 9) {
                            echo 'Drooping (161-180 derajat)';
                        } ?></td>
                    <td><?php echo $kenaf->kar_23 ?></td>
                    <td><?php echo $kenaf->kar_24 ?></td>
                    <td><?php echo $kenaf->kar_25 ?></td>
                    <td><?php echo $kenaf->kar_26 ?></td>
                    <td><?php echo $kenaf->kar_27 ?></td>
                    <td><?php echo $kenaf->kar_28 ?></td>
                    <td><?php echo $kenaf->kar_29 ?></td>
                    <td><?php echo $kenaf->kar_30 ?></td>
                    <td><?php echo $kenaf->kar_31 ?></td>
                    <td><?php echo $kenaf->kar_32 ?></td>
                    <td><?php echo $kenaf->kar_33 ?></td>
                    <td><?php echo $kenaf->kar_34 ?></td>
                    <td><?php echo $kenaf->kar_35 ?></td>
                    <td><?php echo $kenaf->kar_36 ?></td>
                    <?php if ($kenaf->kar_37 != null) { ?>
                        <td><?php if ($kenaf->kar_37 > 0) {
                                echo $kenaf->kar_37;
                            ?></td>
                    <?php } else if ($kenaf->kar_37 == null) { ?>
                        <td><?php echo null;
                            } ?></td>
                        <?php } ?><?php if ($kenaf->kar_38 != null) { ?>
                        <td><?php if ($kenaf->kar_38 > 0) {
                                            echo $kenaf->kar_38;
                            ?></td>
                    <?php } else if ($kenaf->kar_38 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_39 != null) { ?>
                        <td><?php if ($kenaf->kar_39 > 0) {
                                            echo $kenaf->kar_39;
                            ?></td>
                    <?php } else if ($kenaf->kar_39 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_40 != null) { ?>
                        <td><?php if ($kenaf->kar_40 > 0) {
                                            echo $kenaf->kar_40;
                            ?></td>
                    <?php } else if ($kenaf->kar_40 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_41 != null) { ?>
                        <td><?php if ($kenaf->kar_41 > 0) {
                                            echo $kenaf->kar_41;
                            ?></td>
                    <?php } else if ($kenaf->kar_41 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_42 != null) { ?>
                        <td><?php if ($kenaf->kar_42 > 0) {
                                            echo $kenaf->kar_42;
                            ?></td>
                    <?php } else if ($kenaf->kar_42 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_43 != null) { ?>
                        <td><?php if ($kenaf->kar_43 > 0) {
                                            echo $kenaf->kar_43;
                            ?></td>
                    <?php } else if ($kenaf->kar_43 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_44 != null) { ?>
                        <td><?php if ($kenaf->kar_44 > 0) {
                                            echo $kenaf->kar_44;
                            ?></td>
                    <?php } else if ($kenaf->kar_44 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_45 != null) { ?>
                        <td><?php if ($kenaf->kar_45 > 0) {
                                            echo $kenaf->kar_45;
                            ?></td>
                    <?php } else if ($kenaf->kar_45 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_46 != null) { ?>
                        <td><?php if ($kenaf->kar_46 > 0) {
                                            echo $kenaf->kar_46;
                            ?></td>
                    <?php } else if ($kenaf->kar_46 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_47 != null) { ?>
                        <td><?php if ($kenaf->kar_47 > 0) {
                                            echo $kenaf->kar_47;
                            ?></td>
                    <?php } else if ($kenaf->kar_47 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_48 != null) { ?>
                        <td><?php if ($kenaf->kar_48 > 0) {
                                            echo $kenaf->kar_48;
                            ?></td>
                    <?php } else if ($kenaf->kar_48 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_49 != null) { ?>
                        <td><?php if ($kenaf->kar_49 > 0) {
                                            echo $kenaf->kar_49;
                            ?></td>
                    <?php } else if ($kenaf->kar_49 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_50 != null) { ?>
                        <td><?php if ($kenaf->kar_50 > 0) {
                                            echo $kenaf->kar_50;
                            ?></td>
                    <?php } else if ($kenaf->kar_50 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_51 != null) { ?>
                        <td><?php if ($kenaf->kar_51 > 0) {
                                            echo $kenaf->kar_51;
                            ?></td>
                    <?php } else if ($kenaf->kar_51 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_52 != null) { ?>
                        <td><?php if ($kenaf->kar_52 > 0) {
                                            echo $kenaf->kar_52;
                            ?></td>
                    <?php } else if ($kenaf->kar_52 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_53 != null) { ?>
                        <td><?php if ($kenaf->kar_53 > 0) {
                                            echo $kenaf->kar_53;
                            ?></td>
                    <?php } else if ($kenaf->kar_53 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_54 != null) { ?>
                        <td><?php if ($kenaf->kar_54 > 0) {
                                            echo $kenaf->kar_54;
                            ?></td>
                    <?php } else if ($kenaf->kar_54 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_55 != null) { ?>
                        <td><?php if ($kenaf->kar_55 > 0) {
                                            echo $kenaf->kar_55;
                            ?></td>
                    <?php } else if ($kenaf->kar_55 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_56 != null) { ?>
                        <td><?php if ($kenaf->kar_56 > 0) {
                                            echo $kenaf->kar_56;
                            ?></td>
                    <?php } else if ($kenaf->kar_56 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_57 != null) { ?>
                        <td><?php if ($kenaf->kar_57 > 0) {
                                            echo $kenaf->kar_57;
                            ?></td>
                    <?php } else if ($kenaf->kar_57 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_58 != null) { ?>
                        <td><?php if ($kenaf->kar_58 > 0) {
                                            echo $kenaf->kar_58;
                            ?></td>
                    <?php } else if ($kenaf->kar_58 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_59 != null) { ?>
                        <td><?php if ($kenaf->kar_59 > 0) {
                                            echo $kenaf->kar_59;
                            ?></td>
                    <?php } else if ($kenaf->kar_59 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kenaf->kar_60 != null) { ?>
                        <td><?php if ($kenaf->kar_60 > 0) {
                                            echo $kenaf->kar_60;
                            ?></td>
                    <?php } else if ($kenaf->kar_60 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>