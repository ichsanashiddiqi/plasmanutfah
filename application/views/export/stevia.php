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
    header("Content-Disposition: attachment; filename=DataStevia.xls");
    ?>

    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>

            <tr>
                <th>No</th>
                <!-- <th>Action</th> -->
                <th>No. Aksesi</th>
                <th>Nama Aksesi</th>
                <?php foreach ($tabel as $tab) {
                    for ($i = 1; $i < 99; $i++) { ?>
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
            foreach ($data as $kps) {
            ?>
                <tr>
                    <td><?php echo $kps->no ?></td>
                    <td><?php echo $kps->no_aksesi ?></td>
                    <td><?php echo $kps->nama_aksesi ?></td>
                    <?php if ($kps->kar_1 != null) { ?>
                        <td><?php if ($kps->kar_1 > 0) {
                                echo $kps->kar_1;
                            ?></td>
                    <?php } else if ($kps->kar_1 == null) { ?>
                        <td><?php echo null;
                            } ?></td>
                        <?php } ?><?php if ($kps->kar_2 != null) { ?>
                        <td><?php if ($kps->kar_2 > 0) {
                                            echo $kps->kar_2;
                            ?></td>
                    <?php } else if ($kps->kar_2 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_3 != null) { ?>
                        <td><?php if ($kps->kar_3 > 0) {
                                            echo $kps->kar_3;
                            ?></td>
                    <?php } else if ($kps->kar_3 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_4 != null) { ?>
                        <td><?php if ($kps->kar_4 > 0) {
                                            echo $kps->kar_4;
                            ?></td>
                    <?php } else if ($kps->kar_4 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_5 != null) { ?>
                        <td><?php if ($kps->kar_5 > 0) {
                                            echo $kps->kar_5;
                            ?></td>
                    <?php } else if ($kps->kar_5 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_6 != null) { ?>
                        <td><?php if ($kps->kar_6 > 0) {
                                            echo $kps->kar_6;
                            ?></td>
                    <?php } else if ($kps->kar_6 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_7 != null) { ?>
                        <td><?php if ($kps->kar_7 > 0) {
                                            echo $kps->kar_7;
                            ?></td>
                    <?php } else if ($kps->kar_7 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_8 != null) { ?>
                        <td><?php if ($kps->kar_8 > 0) {
                                            echo $kps->kar_8;
                            ?></td>
                    <?php } else if ($kps->kar_8 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_9 != null) { ?>
                        <td><?php if ($kps->kar_9 > 0) {
                                            echo $kps->kar_9;
                            ?></td>
                    <?php } else if ($kps->kar_9 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_10 != null) { ?>
                        <td><?php if ($kps->kar_10 > 0) {
                                            echo $kps->kar_10;
                            ?></td>
                    <?php } else if ($kps->kar_10 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_11 != null) { ?>
                        <td><?php if ($kps->kar_11 > 0) {
                                            echo $kps->kar_11;
                            ?></td>
                    <?php } else if ($kps->kar_11 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_12 != null) { ?>
                        <td><?php if ($kps->kar_12 > 0) {
                                            echo $kps->kar_12;
                            ?></td>
                    <?php } else if ($kps->kar_12 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_13 != null) { ?>
                        <td><?php if ($kps->kar_13 > 0) {
                                            echo $kps->kar_13;
                            ?></td>
                    <?php } else if ($kps->kar_13 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_14 != null) { ?>
                        <td><?php if ($kps->kar_14 > 0) {
                                            echo $kps->kar_14;
                            ?></td>
                    <?php } else if ($kps->kar_14 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_15 != null) { ?>
                        <td><?php if ($kps->kar_15 > 0) {
                                            echo $kps->kar_15;
                            ?></td>
                    <?php } else if ($kps->kar_15 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_16 != null) { ?>
                        <td><?php if ($kps->kar_16 > 0) {
                                            echo $kps->kar_16;
                            ?></td>
                    <?php } else if ($kps->kar_16 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_17 != null) { ?>
                        <td><?php if ($kps->kar_17 > 0) {
                                            echo $kps->kar_17;
                            ?></td>
                    <?php } else if ($kps->kar_17 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_18 != null) { ?>
                        <td><?php if ($kps->kar_18 > 0) {
                                            echo $kps->kar_18;
                            ?></td>
                    <?php } else if ($kps->kar_18 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_19 != null) { ?>
                        <td><?php if ($kps->kar_19 > 0) {
                                            echo $kps->kar_19;
                            ?></td>
                    <?php } else if ($kps->kar_19 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_20 != null) { ?>
                        <td><?php if ($kps->kar_20 > 0) {
                                            echo $kps->kar_20;
                            ?></td>
                    <?php } else if ($kps->kar_20 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_21 != null) { ?>
                        <td><?php if ($kps->kar_21 > 0) {
                                            echo $kps->kar_21;
                            ?></td>
                    <?php } else if ($kps->kar_21 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_22 != null) { ?>
                        <td><?php if ($kps->kar_22 > 0) {
                                            echo $kps->kar_22;
                            ?></td>
                    <?php } else if ($kps->kar_22 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_23 != null) { ?>
                        <td><?php if ($kps->kar_23 > 0) {
                                            echo $kps->kar_23;
                            ?></td>
                    <?php } else if ($kps->kar_23 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_24 != null) { ?>
                        <td><?php if ($kps->kar_24 > 0) {
                                            echo $kps->kar_24;
                            ?></td>
                    <?php } else if ($kps->kar_24 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_25 != null) { ?>
                        <td><?php if ($kps->kar_25 > 0) {
                                            echo $kps->kar_25;
                            ?></td>
                    <?php } else if ($kps->kar_25 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_26 != null) { ?>
                        <td><?php if ($kps->kar_26 > 0) {
                                            echo $kps->kar_26;
                            ?></td>
                    <?php } else if ($kps->kar_26 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_27 != null) { ?>
                        <td><?php if ($kps->kar_27 > 0) {
                                            echo $kps->kar_27;
                            ?></td>
                    <?php } else if ($kps->kar_27 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_28 != null) { ?>
                        <td><?php if ($kps->kar_28 > 0) {
                                            echo $kps->kar_28;
                            ?></td>
                    <?php } else if ($kps->kar_28 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_29 != null) { ?>
                        <td><?php if ($kps->kar_29 > 0) {
                                            echo $kps->kar_29;
                            ?></td>
                    <?php } else if ($kps->kar_29 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_30 != null) { ?>
                        <td><?php if ($kps->kar_30 > 0) {
                                            echo $kps->kar_30;
                            ?></td>
                    <?php } else if ($kps->kar_30 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_31 != null) { ?>
                        <td><?php if ($kps->kar_31 > 0) {
                                            echo $kps->kar_31;
                            ?></td>
                    <?php } else if ($kps->kar_31 == null) { ?>
                        <td><?php echo null;
                                        } ?></td>
                        <?php } ?><?php if ($kps->kar_32 != null) { ?>
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
                    <?php } ?>


                </tr>
            <?php } ?>
        </tbody>
    </table>



</body>

</html>