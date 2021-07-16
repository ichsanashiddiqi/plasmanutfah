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
            foreach ($data as $kps) :
            ?>
                <tr>
                    <td><?php echo $kps['no'] ?></td>
                    <td><?php echo $kps['no_aksesi'] ?></td>
                    <td><?php echo $kps['nama_aksesi'] ?></td>
                    <td><?php echo $kps['kar_01'] ?></td>
                    <td><?php echo $kps['kar_02'] ?></td>
                    <td><?php echo $kps['kar_03'] ?></td>
                    <td><?php echo $kps['kar_04'] ?></td>
                    <td><?php echo $kps['kar_05'] ?></td>
                    <td><?php echo $kps['kar_06'] ?></td>
                    <td><?php echo $kps['kar_07'] ?></td>
                    <td><?php echo $kps['kar_08'] ?></td>
                    <td><?php echo $kps['kar_09'] ?></td>
                    <td><?php echo $kps['kar_10'] ?></td>
                    <td><?php echo $kps['kar_11'] ?></td>
                    <td><?php echo $kps['kar_12'] ?></td>
                    <td><?php echo $kps['kar_13'] ?></td>
                    <td><?php echo $kps['kar_14'] ?></td>
                    <td><?php echo $kps['kar_15'] ?></td>
                    <td><?php echo $kps['kar_16'] ?></td>
                    <td><?php echo $kps['kar_17'] ?></td>
                    <td><?php echo $kps['kar_18'] ?></td>
                    <td><?php echo $kps['kar_19'] ?></td>
                    <td><?php echo $kps['kar_20'] ?></td>
                    <td><?php echo $kps['kar_21'] ?></td>
                    <td><?php echo $kps['kar_22'] ?></td>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</body>

</html>