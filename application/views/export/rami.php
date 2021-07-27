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
    header("Content-Disposition: attachment; filename=DataRami.xls");
    ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>

            <tr>
                <th>No</th>
                <th>Action</th>
                <th>No. Aksesi</th>
                <th>Nama Aksesi</th>
                <th>Gambar</th>
                <th>Umur panen serat 1</th>
                <th>Umur panen serat 2</th>
                <th>Umur panen serat 3</th>
                <th>Bentuk daun</th>
                <th>Bentuk gerigi daun</th>
                <th>Panjang daun</th>
                <th>Lebar daun</th>
                <th>Luas daun</th>
                <th>Sudut daun</th>
                <th>Panjang petiole</th>
                <th>Permukaan daun</th>
                <th>Permukaan batang</th>
                <th>Bulu daun</th>
                <th>Warna batang tanaman muda</th>
                <th>Warna batang tanaman tua</th>
                <th>Warna helai daun</th>
                <th>Warna urat utama daun</th>
                <th>Warna tangkai daun</th>
                <th>Warna bunga jantan</th>
                <th>Warna bunga betina</th>
                <th>Umur berbunga</th>
                <th>Tipe pembungaan</th>
                <th>Jenis kelamin</th>
                <th>Ukuran kelopak bunga</th>
                <th>Tipe pertumbuhan tanaman</th>
                <th>Diameter batang bawah</th>
                <th>Diameter batang tengah</th>
                <th>Diameter batang atas</th>
                <th>Tinggi tanaman</th>
                <th>Jumlah ruas batang</th>
                <th>Jumlah batang</th>
                <th>Berat batang segar</th>
                <th>Berat serat kering</th>
                <th>Produksi serat kering</th>
                <th>Ketahanan hama / penyakit</th>
                <th>Ketahanan kekeringan</th>
                <th>Uji adaptasi dataran rendah</th>
                <th>Uji adaptasi pada lahan bermasalah</th>
                <th>Kekuatan serat</th>
                <th>Kehalusan serat</th>
                <?php foreach ($tabel as $tab) {
                    for ($i = 40; $i < 99; $i++) { ?>
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
            foreach ($data as $rami) {
            ?>
                <tr>
                    <td><?php echo $rami->no ?></td>
                    <td><a href="edit_rami/<?= $rami->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                        <a href="hapus_rami/<?= $rami->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                    </td>
                    <td><?php echo $rami->no_aksesi ?></td>
                    <td><?php echo $rami->nama_aksesi ?></td>
                    <td><img src="<?php echo base_url('assets/data/' . $rami->Image) ?>" width="64" /></td>
                    <td><?php echo $rami->kar_01 ?></td>
                    <td><?php echo $rami->kar_02 ?></td>
                    <td><?php echo $rami->kar_03 ?></td>
                    <td><?php if ($rami->kar_04 == 1) {
                            echo 'Ovate';
                        } else if ($rami->kar_04 == 2) {
                            echo 'Cordate';
                        } else if ($rami->kar_04 == 3) {
                            echo 'Lanceolate';
                        } else if ($rami->kar_04 == 4) {
                            echo 'Cord-lanceolate';
                        } ?></td>
                    <td><?php if ($rami->kar_05 == 1) {
                            echo 'Besar tumpul';
                        } else if ($rami->kar_05 == 2) {
                            echo 'Besar lancip';
                        } else if ($rami->kar_05 == 3) {
                            echo 'Kecil tumpul';
                        } else if ($rami->kar_05 == 4) {
                            echo 'Kecil lancip';
                        }  ?></td>
                    <td><?php echo $rami->kar_06 ?></td>
                    <td><?php echo $rami->kar_07 ?></td>
                    <td><?php echo $rami->kar_08 ?></td>
                    <td><?php if ($rami->kar_09 == 1) {
                            echo 'Erevt (0-20 derahat)';
                        } else if ($rami->kar_09 == 2) {
                            echo 'Intermidate (21-60 derajat)';
                        } else if ($rami->kar_09 == 3) {
                            echo 'Horisontal (61-100 derajat)';
                        } else if ($rami->kar_09 == 4) {
                            echo 'Descending (101-140 derajat)';
                        }  ?></td>
                    <td><?php echo $rami->kar_10 ?></td>
                    <td><?php if ($rami->kar_11 == 1) {
                            echo 'Bergelombang kasar';
                        } else if ($rami->kar_11 == 2) {
                            echo 'Bergelombang sedang';
                        } else if ($rami->kar_11 == 3) {
                            echo 'Rata';
                        } ?></td>
                    <td><?php if ($rami->kar_12 == 1) {
                            echo 'Berbulu kasar';
                        } else if ($rami->kar_12 == 2) {
                            echo 'Berbulu sedang';
                        } else if ($rami->kar_12 == 3) {
                            echo 'Berbulu halus';
                        } ?></td>
                    <td><?php if ($rami->kar_13 == 1) {
                            echo 'Kasar lebat';
                        } else if ($rami->kar_13 == 2) {
                            echo 'Kasar sedang';
                        } else if ($rami->kar_13 == 3) {
                            echo 'Kasar jarang';
                        } else if ($rami->kar_13 == 4) {
                            echo 'Halus lebat';
                        } else if ($rami->kar_13 == 5) {
                            echo 'Halus sedang';
                        } else if ($rami->kar_13 == 6) {
                            echo 'Halus jarang';
                        } ?></td>
                    <td><?php if ($rami->kar_14 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_14 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_14 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php if ($rami->kar_15 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_15 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_15 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php if ($rami->kar_16 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_16 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_16 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php if ($rami->kar_17 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_17 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_17 == 3) {
                            echo 'Coklat';
                        } else if ($rami->kar_17 == 4) {
                            echo 'Kuning';
                        } ?></td>
                    <td><?php if ($rami->kar_18 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_18 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_18 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php if ($rami->kar_19 == 0) {
                            echo 'Tipe tidak berbunga';
                        } else if ($rami->kar_19 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_19 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_19 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php if ($rami->kar_20 == 0) {
                            echo 'Tipe tidak berbunga';
                        } else if ($rami->kar_20 == 1) {
                            echo 'Hijau';
                        } else if ($rami->kar_20 == 2) {
                            echo 'Merah';
                        } else if ($rami->kar_20 == 3) {
                            echo 'Coklat';
                        } ?></td>
                    <td><?php echo $rami->kar_21 ?></td>
                    <td><?php if ($rami->kar_22 == 0) {
                            echo 'Tipe tidak berbunga';
                        } else if ($rami->kar_22 == 1) {
                            echo 'Strong (lebat)';
                        } else if ($rami->kar_22 == 2) {
                            echo 'Intermediate (sedang)';
                        } else if ($rami->kar_22 == 3) {
                            echo 'Weak (Sedikit)';
                        } ?></td>
                    <td><?php if ($rami->kar_23 == 0) {
                            echo 'No';
                        } else if ($rami->kar_23 == 1) {
                            echo 'Male';
                        } else if ($rami->kar_23 == 2) {
                            echo 'Female';
                        } ?></td>
                    <td><?php if ($rami->kar_24 == 0) {
                            echo 'No';
                        } else if ($rami->kar_24 == 1) {
                            echo 'Large';
                        } else if ($rami->kar_24 == 2) {
                            echo 'Intermediate';
                        } else if ($rami->kar_24 == 3) {
                            echo 'Small';
                        } ?></td>
                    <td><?php if ($rami->kar_25 == 1) {
                            echo 'Determinate';
                        } else if ($rami->kar_25 == 2) {
                            echo 'Intermediate';
                        } ?></td>
                    <td><?php echo $rami->kar_26 ?></td>
                    <td><?php echo $rami->kar_27 ?></td>
                    <td><?php echo $rami->kar_28 ?></td>
                    <td><?php echo $rami->kar_29 ?></td>
                    <td><?php echo $rami->kar_30 ?></td>
                    <td><?php echo $rami->kar_31 ?></td>
                    <td><?php echo $rami->kar_32 ?></td>
                    <td><?php echo $rami->kar_33 ?></td>
                    <td><?php echo $rami->kar_34 ?></td>
                    <td><?php echo $rami->kar_35 ?></td>
                    <td><?php echo $rami->kar_36 ?></td>
                    <td><?php echo $rami->kar_37 ?></td>
                    <td><?php echo $rami->kar_38 ?></td>
                    <td><?php echo $rami->kar_39 ?></td>
                    <td><?php echo $rami->kar_40 ?></td>
                    <?php if ($kps->kar_41 != null) { ?>
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