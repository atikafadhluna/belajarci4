<?php
$db = \Config\Database::connect();

$setting = $db->table('tbl_web')
    ->where('id_setting', '1')
    ->get()->getRowArray();
?>

<?= $this->extend('templates/cs_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <div class="card-header text-center pb-0">
        <div class="card-title">
            <h6 class="card-label">
                <div class="text-center font-size-h6-lg d-flex flex-column font-weight-normal">
                    <?= $setting['info_ujian'] ?>
                </div>
                <div class="card-footer text-center mt-8">
                    <a href="<?= base_url('csiswa/index'); ?>" class="btn btn-secondary btn-lg font-weight-bold">Kembali ke halaman utama</a>
                </div>
            </h6>
        </div>
    </div>

    <?= $this->endSection(''); ?>