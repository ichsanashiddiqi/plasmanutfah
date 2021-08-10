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
    header("Content-Disposition: attachment; filename=DataKapuk.xls");
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>

            <tr>
                <th>No</th>
                <th>Action</th>
                <th>No. Aksesi</th>
                <th>Nama Aksesi</th>
                <th>Gambar</th>
                <th>Tipe kapuk</th>
                <th>Tipe percabangan</th>
                <th>Sifat meluruhkan cabang bawah</th>
                <th>Banir pada pangkal cabang</th>
                <th>Banir pada pangkal akar</th>
                <th>Intensitas duri pada batang</th>
                <th>Bentuk duri pada batang</th>
                <th>Intensitas duri pada cabang</th>
                <th>Bentuk duri pada cabang</th>
                <th>Bulan keluar bunga</th>
                <th>Warna bunga</th>
                <th>Buah di pohon</th>
                <th>Ujung buah yang berlebih</th>
                <th>Kelurusan buah</th>
                <th>Jumlah ruang buah</th>
                <th>Bentuk daun</th>
                <th>Warna pupus (daun pucuk)</th>
                <th>Berat 1000 biji</th>
                <th>Warna biji</th>
                <th>Warna serat</th>
                <th>Panjang buah(cm)</th>
                <th>Diameter buah(cm)</th>
                <th>Berat buah glb</th>
                <th>Jumah buah/ph</th>
                <th>Rendemen serat(%)</th>
                <th>Rendemen kulit(%)</th>
                <th>Rendemen biji(%)</th>
                <th>Rendemen ganung(%)</th>
                <th>Hasil serat(g/ph)</th>
                <th>Diameter kanopi US</th>
                <th>Diameter kanopi BT</th>
                <th>Panjang daun(cm)</th>
                <th>Lebar daun(cm)</th>
                <?php foreach ($tabel as $tab) {
                    for ($i = 33; $i < 99; $i++) { ?>
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
            foreach ($data as $kapuk) {
            ?>
                <tr>
                    <td><?php echo $kapuk->no ?></td>
                    <td><a href="edit_kapuk/<?= $kapuk->no_aksesi; ?>"><i class="fas fa-edit" style="color: chartreuse;"></i></a>
                        <a href="hapus_kapuk/<?= $kapuk->no_aksesi; ?>"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                    </td>
                    <td><?php echo $kapuk->no_aksesi ?></td>
                    <td><?php echo $kapuk->nama_aksesi ?></td>
                    <td><img src="<?php echo base_url('assets/data/' . $kapuk->Image) ?>" width="64" /></td>
                    <td><?php if ($kapuk->kar_1 == 1) {
                            echo 'Indica';
                        } else if ($kapuk->kar_1 == 2) {
                            echo 'Carabia';
                        } else if ($kapuk->kar_1 == 3) {
                            echo 'Hibrida (campuran)';
                        } ?></td>
                    <td><?php if ($kapuk->kar_2 == 1) {
                            echo 'Perempuan';
                        } else if ($kapuk->kar_2 == 2) {
                            echo 'Lanang';
                        } else if ($kapuk->kar_2 == 3) {
                            echo 'Minyak (campuran)';
                        } else if ($kapuk->kar_2 == 4) {
                            echo 'Sapu';
                        } else if ($kapuk->kar_2 == 5) {
                            echo 'Tidak Teratur';
                        } ?></td>
                    <td><?php if ($kapuk->kar_3 == 1) {
                            echo 'Ada';
                        } else if ($kapuk->kar_3 == 2) {
                            echo 'Tidak Ada';
                        } ?></td>
                    <td><?php if ($kapuk->kar_4 == 1) {
                            echo 'Tidak Ada';
                        } else if ($kapuk->kar_4 == 2) {
                            echo 'Kecil';
                        } else if ($kapuk->kar_4 == 3) {
                            echo 'Sedang';
                        } else if ($kapuk->kar_4 == 4) {
                            echo 'Besar';
                        }  ?></td>
                    <td><?php if ($kapuk->kar_5 == 1) {
                            echo 'Tidak Ada';
                        } else if ($kapuk->kar_5 == 2) {
                            echo 'Kecil';
                        } else if ($kapuk->kar_5 == 3) {
                            echo 'Sedang';
                        } else if ($kapuk->kar_5 == 4) {
                            echo 'Besar';
                        } ?></td>
                    <td><?php if ($kapuk->kar_6 == 1) {
                            echo 'Sedikit';
                        } else if ($kapuk->kar_6 == 2) {
                            echo 'Sedang';
                        } else if ($kapuk->kar_6 == 3) {
                            echo 'Banyak';
                        }  ?></td>
                    <td><?php if ($kapuk->kar_7 == 1) {
                            echo 'Pendek Besar';
                        } else if ($kapuk->kar_7 == 2) {
                            echo 'Pendek Kecil';
                        } else if ($kapuk->kar_7 == 3) {
                            echo 'Panjang Besar';
                        } else if ($kapuk->kar_7 == 4) {
                            echo 'Panjang Kecil';
                        } else if ($kapuk->kar_7 == 5) {
                            echo 'Bentuk Lainnya';
                        } ?></td>
                    <td><?php if ($kapuk->kar_8 == 1) {
                            echo 'Sedikit';
                        } else if ($kapuk->kar_8 == 2) {
                            echo 'Sedang';
                        } else if ($kapuk->kar_8 == 3) {
                            echo 'Banyak';
                        } ?></td>
                    <td><?php if ($kapuk->kar_9 == 1) {
                            echo 'Pendek Besar';
                        } else if ($kapuk->kar_9 == 2) {
                            echo 'Pendek Kecil';
                        } else if ($kapuk->kar_9 == 3) {
                            echo 'Panjang Besar';
                        } else if ($kapuk->kar_9 == 4) {
                            echo 'Panjang Kecil';
                        } else if ($kapuk->kar_9 == 5) {
                            echo 'Bentuk Lainnya';
                        } ?></td>
                    <td><?php echo $kapuk->kar_10 ?></td>
                    <td><?php echo $kapuk->kar_11 ?></td>
                    <td><?php if ($kapuk->kar_12 == 1) {
                            echo 'Mudah Pecah';
                        } else if ($kapuk->kar_12 == 2) {
                            echo 'Tidak Mudah Pecah';
                        } ?></td>
                    <td><?php if ($kapuk->kar_13 == 1) {
                            echo 'Pendek';
                        } else if ($kapuk->kar_13 == 2) {
                            echo 'Sedang';
                        } else if ($kapuk->kar_13 == 3) {
                            echo 'Panjang';
                        } ?></td>
                    <td><?php if ($kapuk->kar_14 == 1) {
                            echo 'Lurus';
                        } else if ($kapuk->kar_14 == 2) {
                            echo 'Melengkung';
                        }  ?></td>
                    <td><?php echo $kapuk->kar_15 ?></td>
                    <td><?php if ($kapuk->kar_16 == 1) {
                            echo 'Menjari';
                        } else if ($kapuk->kar_16 == 2) {
                            echo 'Menjari Dangkal';
                        } else if ($kapuk->kar_16 == 3) {
                            echo 'Tunggal';
                        } else if ($kapuk->kar_16 == 3) {
                            echo 'Bentuk Lainnya';
                        } ?></td>
                    <td><?php if ($kapuk->kar_17 == 1) {
                            echo 'Merah';
                        } else if ($kapuk->kar_17 == 2) {
                            echo 'Kuning';
                        } else if ($kapuk->kar_17 == 3) {
                            echo 'Hijau';
                        } else if ($kapuk->kar_17 == 3) {
                            echo 'Lainnya';
                        } ?></td>
                    <td><?php echo $kapuk->kar_18 ?></td>
                    <td><?php echo $kapuk->kar_19 ?></td>
                    <td><?php if ($kapuk->kar_20 == 1) {
                            echo 'Putih';
                        } else if ($kapuk->kar_20 == 2) {
                            echo 'Krem';
                        } else if ($kapuk->kar_20 == 3) {
                            echo 'Tunggal';
                        } else if ($kapuk->kar_20 == 3) {
                            echo 'Putih Keabu-abuan';
                        } ?></td>
                    <td><?php echo $kapuk->kar_21 ?></td>
                    <td><?php echo $kapuk->kar_22 ?></td>
                    <td><?php echo $kapuk->kar_23 ?></td>
                    <td><?php echo $kapuk->kar_24 ?></td>
                    <td><?php echo $kapuk->kar_25 ?></td>
                    <td><?php echo $kapuk->kar_26 ?></td>
                    <td><?php echo $kapuk->kar_27 ?></td>
                    <td><?php echo $kapuk->kar_28 ?></td>
                    <td><?php echo $kapuk->kar_29 ?></td>
                    <td><?php echo $kapuk->kar_30 ?></td>
                    <td><?php echo $kapuk->kar_31 ?></td>
                    <td><?php echo $kapuk->kar_32 ?></td>
                    <td><?php echo $kapuk->kar_33 ?></td>
                    <?php if ($kapuk->kar_34 != null) { ?>
                        <td><?php if ($kapuk->kar_34 > 0) {
                                echo $kapuk->kar_34;
                            ?></td>
                    <?php } else if ($kapuk->kar_34 == null) { ?>
                        <td><?php echo null;
                            } ?></td>
                        <?php } ?><?php if ($kapuk->kar_35 != null) { ?>
                        <td><?php if ($kapuk->kar_35 > 0) {
                                            echo $kapuk->kar_35;
                            ?></td>
                    <?php } else if ($kapuk->kar_35 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_36 != null) { ?>
                        <td><?php if ($kapuk->kar_36 > 0) {
                                            echo $kapuk->kar_36;
                            ?></td>
                    <?php } else if ($kapuk->kar_36 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_37 != null) { ?>
                        <td><?php if ($kapuk->kar_37 > 0) {
                                            echo $kapuk->kar_37;
                            ?></td>
                    <?php } else if ($kapuk->kar_37 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_38 != null) { ?>
                        <td><?php if ($kapuk->kar_38 > 0) {
                                            echo $kapuk->kar_38;
                            ?></td>
                    <?php } else if ($kapuk->kar_38 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_39 != null) { ?>
                        <td><?php if ($kapuk->kar_39 > 0) {
                                            echo $kapuk->kar_39;
                            ?></td>
                    <?php } else if ($kapuk->kar_39 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_40 != null) { ?>
                        <td><?php if ($kapuk->kar_40 > 0) {
                                            echo $kapuk->kar_40;
                            ?></td>
                    <?php } else if ($kapuk->kar_40 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_41 != null) { ?>
                        <td><?php if ($kapuk->kar_41 > 0) {
                                            echo $kapuk->kar_41;
                            ?></td>
                    <?php } else if ($kapuk->kar_41 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_42 != null) { ?>
                        <td><?php if ($kapuk->kar_42 > 0) {
                                            echo $kapuk->kar_42;
                            ?></td>
                    <?php } else if ($kapuk->kar_42 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_43 != null) { ?>
                        <td><?php if ($kapuk->kar_43 > 0) {
                                            echo $kapuk->kar_43;
                            ?></td>
                    <?php } else if ($kapuk->kar_43 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_44 != null) { ?>
                        <td><?php if ($kapuk->kar_44 > 0) {
                                            echo $kapuk->kar_44;
                            ?></td>
                    <?php } else if ($kapuk->kar_44 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_45 != null) { ?>
                        <td><?php if ($kapuk->kar_45 > 0) {
                                            echo $kapuk->kar_45;
                            ?></td>
                    <?php } else if ($kapuk->kar_45 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_46 != null) { ?>
                        <td><?php if ($kapuk->kar_46 > 0) {
                                            echo $kapuk->kar_46;
                            ?></td>
                    <?php } else if ($kapuk->kar_46 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_47 != null) { ?>
                        <td><?php if ($kapuk->kar_47 > 0) {
                                            echo $kapuk->kar_47;
                            ?></td>
                    <?php } else if ($kapuk->kar_47 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_48 != null) { ?>
                        <td><?php if ($kapuk->kar_48 > 0) {
                                            echo $kapuk->kar_48;
                            ?></td>
                    <?php } else if ($kapuk->kar_48 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_49 != null) { ?>
                        <td><?php if ($kapuk->kar_49 > 0) {
                                            echo $kapuk->kar_49;
                            ?></td>
                    <?php } else if ($kapuk->kar_49 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_50 != null) { ?>
                        <td><?php if ($kapuk->kar_50 > 0) {
                                            echo $kapuk->kar_50;
                            ?></td>
                    <?php } else if ($kapuk->kar_50 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_51 != null) { ?>
                        <td><?php if ($kapuk->kar_51 > 0) {
                                            echo $kapuk->kar_51;
                            ?></td>
                    <?php } else if ($kapuk->kar_51 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_52 != null) { ?>
                        <td><?php if ($kapuk->kar_52 > 0) {
                                            echo $kapuk->kar_52;
                            ?></td>
                    <?php } else if ($kapuk->kar_52 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_53 != null) { ?>
                        <td><?php if ($kapuk->kar_53 > 0) {
                                            echo $kapuk->kar_53;
                            ?></td>
                    <?php } else if ($kapuk->kar_53 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_54 != null) { ?>
                        <td><?php if ($kapuk->kar_54 > 0) {
                                            echo $kapuk->kar_54;
                            ?></td>
                    <?php } else if ($kapuk->kar_54 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_55 != null) { ?>
                        <td><?php if ($kapuk->kar_55 > 0) {
                                            echo $kapuk->kar_55;
                            ?></td>
                    <?php } else if ($kapuk->kar_55 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_56 != null) { ?>
                        <td><?php if ($kapuk->kar_56 > 0) {
                                            echo $kapuk->kar_56;
                            ?></td>
                    <?php } else if ($kapuk->kar_56 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_57 != null) { ?>
                        <td><?php if ($kapuk->kar_57 > 0) {
                                            echo $kapuk->kar_57;
                            ?></td>
                    <?php } else if ($kapuk->kar_57 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_58 != null) { ?>
                        <td><?php if ($kapuk->kar_58 > 0) {
                                            echo $kapuk->kar_58;
                            ?></td>
                    <?php } else if ($kapuk->kar_58 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_59 != null) { ?>
                        <td><?php if ($kapuk->kar_59 > 0) {
                                            echo $kapuk->kar_59;
                            ?></td>
                    <?php } else if ($kapuk->kar_59 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kapuk->kar_60 != null) { ?>
                        <td><?php if ($kapuk->kar_60 > 0) {
                                            echo $kapuk->kar_60;
                            ?></td>
                    <?php } else if ($kapuk->kar_60 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                    <?php } ?>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>