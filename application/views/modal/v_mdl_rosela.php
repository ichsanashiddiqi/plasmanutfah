<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>
<?php $kar_data = $this->input->post('kar_data');

if (isset($kar_data) and !empty($kar_data)) {
    $records = $this->m_modal->get_search_rosela($kar_data);
    $output = '';
    foreach ($records->result_array() as $kps) {
?>
        <h4 class="text-center"><?= $kps["no_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $kps['image']) ?>" width="300" />
        <br>
        <div class="form">
            <?php if ($kps["kar_1"] != null) { ?>
                <form class="user" method="post">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>No. Aksesi</label>
                            <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" value="<?= $kps['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>No. Aksesi KNPN</label>
                            <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $kps['no_aksesi_IDN']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesi</label>
                        <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $kps['nama_aksesi']; ?>" readonly>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Negara Asal</label>
                            <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $kps['Negara']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Donor</label>
                            <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $kps['Donor']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Desa</label>
                            <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $kps['Desa']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $kps['Kecamatan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $kps['Kabupaten']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Provinsi Asal</label>
                            <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $kps['Propinsi']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Posisi Lintang</label>
                            <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $kps['lattitude']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Bujur</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $kps['longitude']; ?>" readonly>
                        </div>
                    </div>
                    <hr>

                <?php } ?>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <?php if ($das['kar'] == 'kar_1') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_1']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>
                        <?php if ($das['kar'] == 'kar_2') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_2']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_3') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_3']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_4') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_4']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_5') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_5']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_6') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_6']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_7') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_7']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_8') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_8']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_9') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_9']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_10') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_10']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_11') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_11']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_12') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_12']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_13') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_13']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_14') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_14']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_15') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_15']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_16') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_16']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>

                        <?php if ($das['kar'] == 'kar_17') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kps['kar_17']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>


                    <?php endforeach; ?>

                </div>
        </div>
    <?php }
    echo $output; ?>
<?php } else {
    echo 'WRONG!';
} ?>