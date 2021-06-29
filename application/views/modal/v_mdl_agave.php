<?php $kar_data = $this->input->post('kar_data');

if (isset($kar_data) and !empty($kar_data)) {
    $records = $this->m_modal->get_search_agave($kar_data);
    $output = '';
    foreach ($records->result_array() as $row) {
?>
        <h4 class="text-center"><?= $row["nama_aksesi"] ?></h4><br>
        <div class="row">
            <div class="col-lg-6">
                <?php if ($row["kar_1"] != null) { ?>
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Umur Berbunga</label>
                            <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $row["kar_1"] ?>">
                        </div>
                        <div class="col-sm">
                            <label>Umur Berbunga</label>
                            <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $row["kar_2"] ?>">
                        </div>
                        <div class="col-sm">
                            <label>Umur Berbunga</label>
                            <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $row["kar_3"] ?>">
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    <?php }
    echo $output; ?>
<?php } else {
    echo 'WRONG!';
} ?>