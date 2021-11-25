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
    $records = $this->m_modal->get_search_rami($kar_data);
    $output = '';
    foreach ($records->result_array() as $k) {
?>
        <h4 class="text-center"><?= $k["no_aksesi"] ?></h4><br>
        <img class="center" src="<?php echo base_url('assets/data/' . $k['image']) ?>" width="300" />
        <br>
        <div class="form">
            <?php if ($k["kar_1"] != null) { ?>
                <form class="user">
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>No. Aksesi</label>
                            <input type="text" class="form-control" id="no_aksesi" name="no_aksesi" placeholder="No. Aksesi" value="<?= $k['no_aksesi']; ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>No. Aksesi KNPN</label>
                            <input type="text" class="form-control" id="no_aksesi_IDN" name="no_aksesi_IDN" value="<?= $k['no_aksesi_IDN']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Aksesi</label>
                        <input type="text" class="form-control" id="nama_aksesi" name="nama_aksesi" value="<?= $k['nama_aksesi']; ?>">
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Negara Asal</label>
                            <input type="text" class="form-control" id="Negara" name="Negara" value="<?= $k['Negara']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Donor</label>
                            <input type="text" class="form-control" id="Donor" name="Donor" value="<?= $k['Donor']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Desa</label>
                            <input type="text" class="form-control" id="Desa" name="Desa" value="<?= $k['Desa']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Kecamatan</label>
                            <input type="text" class="form-control" id="Kecamatan" name="Kecamatan" value="<?= $k['Kecamatan']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Kabupaten</label>
                            <input type="text" class="form-control" id="Kabupaten" name="Kabupaten" value="<?= $k['Kabupaten']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Provinsi Asal</label>
                            <input type="text" class="form-control" id="Propinsi" name="Propinsi" value="<?= $k['Propinsi']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label>Posisi Lintang</label>
                            <input type="text" class="form-control" id="latittude" name="lattitude" value="<?= $k['lattitude']; ?>">
                        </div>
                        <div class="col-sm-6">
                            <label>Bujur</label>
                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $k['longitude']; ?>">
                        </div>
                    </div>
                    <hr>

                    <!-- KARAKTERISASI -->

                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Lingkar batang</label>
                            <input type="text" class="form-control" id="kar_01" name="kar_01" value="<?= $k['kar_1']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Panjang daun</label>
                            <input type="text" class="form-control" id="kar_14" name="kar_14" value="<?= $k['kar_14']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna bunga jantan</label>
                            <input type="text" class="form-control" id="kar_27" name="kar_27" value="<?= $k['kar_27']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Tebal biji</label>
                            <input type="text" class="form-control" id="kar_40" name="kar_40" value="<?= $k['kar_40']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk batang</label>
                            <input type="text" class="form-control" id="kar_02" name="kar_02" value="<?= $k['kar_2']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Lebar daun</label>
                            <input type="text" class="form-control" id="kar_15" name="kar_15" value="<?= $k['kar_15']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna bunga hermaphrodit</label>
                            <input type="text" class="form-control" id="kar_28" name="kar_28" value="<?= $k['kar_28']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bobot biji/butir</label>
                            <input type="text" class="form-control" id="kar_41" name="kar_41" value="<?= $k['kar_41']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Permukaan kulit batang</label>
                            <input type="text" class="form-control" id="kar_03" name="kar_03" value="<?= $k['kar_3']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Panjang tangkai daun</label>
                            <input type="text" class="form-control" id="kar_16" name="kar_16" value="<?= $k['kar_16']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk bunga betina</label>
                            <input type="text" class="form-control" id="kar_29" name="kar_29" value="<?= $k['kar_29']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk biji</label>
                            <input type="text" class="form-control" id="kar_42" name="kar_42" value="<?= $k['kar_42']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna kulit batang</label>
                            <input type="text" class="form-control" id="kar_04" name="kar_04" value="<?= $k['kar_4']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Ujung daun</label>
                            <input type="text" class="form-control" id="kar_17" name="kar_17" value="<?= $k['kar_17']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk bunga jantan</label>
                            <input type="text" class="form-control" id="kar_30" name="kar_30" value="<?= $k['kar_30']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Produksi biji</label>
                            <input type="text" class="form-control" id="kar_43" name="kar_43" value="<?= $k['kar_43']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk tajuk</label>
                            <input type="text" class="form-control" id="kar_05" name="kar_05" value="<?= $k['kar_5']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Daging daun</label>
                            <input type="text" class="form-control" id="kar_18" name="kar_18" value="<?= $k['kar_18']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk bunga hermaphrodit</label>
                            <input type="text" class="form-control" id="kar_31" name="kar_31" value="<?= $k['kar_31']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Produksi biji kering/phn/th</label>
                            <input type="text" class="form-control" id="kar_44" name="kar_44" value="<?= $k['kar_44']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Lebar tajuk U-S</label>
                            <input type="text" class="form-control" id="kar_06" name="kar_06" value="<?= $k['kar_6']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Periode pembungaan</label>
                            <input type="text" class="form-control" id="kar_19" name="kar_19" value="<?= $k['kar_19']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna kulit buah</label>
                            <input type="text" class="form-control" id="kar_32" name="kar_32" value="<?= $k['kar_32']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna kernel</label>
                            <input type="text" class="form-control" id="kar_45" name="kar_45" value="<?= $k['kar_45']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Luas tajuk T-B</label>
                            <input type="text" class="form-control" id="kar_07" name="kar_07" value="<?= $k['kar_7']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Mekar bunga</label>
                            <input type="text" class="form-control" id="kar_20" name="kar_20" value="<?= $k['kar_20']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna daging buah</label>
                            <input type="text" class="form-control" id="kar_33" name="kar_33" value="<?= $k['kar_33']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bobot kernel/butir</label>
                            <input type="text" class="form-control" id="kar_46" name="kar_46" value="<?= $k['kar_46']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk percabangan</label>
                            <input type="text" class="form-control" id="kar_08" name="kar_08" value="<?= $k['kar_8']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Panjang inflorensia</label>
                            <input type="text" class="form-control" id="kar_21" name="kar_21" value="<?= $k['kar_21']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bentuk buah</label>
                            <input type="text" class="form-control" id="kar_34" name="kar_34" value="<?= $k['kar_34']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Rendemen minyak</label>
                            <input type="text" class="form-control" id="kar_47" name="kar_47" value="<?= $k['kar_47']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Bentuk daun</label>
                            <input type="text" class="form-control" id="kar_09" name="kar_09" value="<?= $k['kar_9']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Total bunga</label>
                            <input type="text" class="form-control" id="kar_22" name="kar_22" value="<?= $k['kar_22']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bobot buah</label>
                            <input type="text" class="form-control" id="kar_35" name="kar_35" value="<?= $k['kar_35']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bilangan asam</label>
                            <input type="text" class="form-control" id="kar_48" name="kar_48" value="<?= $k['kar_48']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna daun</label>
                            <input type="text" class="form-control" id="kar_10" name="kar_10" value="<?= $k['kar_10']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah bunga betina</label>
                            <input type="text" class="form-control" id="kar_23" name="kar_23" value="<?= $k['kar_23']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bobot kulit buah</label>
                            <input type="text" class="form-control" id="kar_36" name="kar_36" value="<?= $k['kar_36']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bilangan penyabunan</label>
                            <input type="text" class="form-control" id="kar_49" name="kar_49" value="<?= $k['kar_49']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Warna pucuk daun</label>
                            <input type="text" class="form-control" id="kar_11" name="kar_11" value="<?= $k['kar_11']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah bunga jantan</label>
                            <input type="text" class="form-control" id="kar_24" name="kar_24" value="<?= $k['kar_24']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna tempurung biji</label>
                            <input type="text" class="form-control" id="kar_37" name="kar_37" value="<?= $k['kar_37']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Bilangan iod</label>
                            <input type="text" class="form-control" id="kar_50" name="kar_50" value="<?= $k['kar_50']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Tekstur daun</label>
                            <input type="text" class="form-control" id="kar_12" name="kar_12" value="<?= $k['kar_12']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah bunga hermaphrodite</label>
                            <input type="text" class="form-control" id="kar_25" name="kar_25" value="<?= $k['kar_25']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Jumlah biji perbuah</label>
                            <input type="text" class="form-control" id="kar_38" name="kar_38" value="<?= $k['kar_38']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Viskositas</label>
                            <input type="text" class="form-control" id="kar_51" name="kar_51" value="<?= $k['kar_51']; ?>" readonly>
                        </div>
                    </div>
                    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
                    <div class="form-group row">
                        <div class="col-sm">
                            <label>Pertulangan daun</label>
                            <input type="text" class="form-control" id="kar_13" name="kar_13" value="<?= $k['kar_13']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Warna bunga betina</label>
                            <input type="text" class="form-control" id="kar_26" name="kar_26" value="<?= $k['kar_26']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Ratio panjang/lebar biji</label>
                            <input type="text" class="form-control" id="kar_39" name="kar_39" value="<?= $k['kar_39']; ?>" readonly>
                        </div>
                        <div class="col-sm">
                            <label>Densitas</label>
                            <input type="text" class="form-control" id="kar_52" name="kar_52" value="<?= $k['kar_52']; ?>" readonly>
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group row">
                    <?php foreach ($idkar as $das) : ?>
                        <?php if ($das['kar'] == 'kar_44') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $k['kar_44']; ?>" readonly>
                            </div>
                        <?php } else {
                            echo null;
                        } ?>
                        <?php if ($das['kar'] == 'kar_45') {

                        ?>
                            <div class="col-md-4 top-buffer">
                                <label><?= $das['question']; ?></label>
                                <input type="text" class="form-control" id="<?= $das['kar']; ?>" name="<?= $das['kar']; ?>" value="<?= $kx['kar_45']; ?>" readonly>
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
