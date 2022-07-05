<?php
$db = \Config\Database::connect();

$cs = $db->table('tbl_siswa')
    ->where('status_pendaftaran', '0')
    ->get()->getRowArray();
?>

<?= $this->extend('templates/pt_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Tabel Input Nilai Ujian
                    <span class="d-block text-muted pt-2 font-size-sm"> Penerimaan Peserta Didik Baru <?= date('Y'); ?> </span>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Button-->
                <button type="button" class="btn btn-warning font-weight-bolder mr-2" data-toggle="modal" data-target="#inputNilai">
                    <i class="flaticon-edit"></i>
                    Input Nilai
                </button>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom nowrap" mode="datatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>No. Daftar</th>
                        <th>NISN</th>
                        <th>Nama Lengkap</th>
                        <th>Nilai Ujian</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($ppdb as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['no_pendaftaran'] ?></td>
                            <td><?= $value['nisn'] ?></td>
                            <td><?= $value['nama_siswa'] ?></td>
                            <td><?= $value['nilai_ujian'] ?></td>
                            <td class="dt-center">
                                <span class="btn btn-danger btn-sm label-inline font-weight-bolder  mr-2">Tidak Lulus</span>
                                <span class="btn btn-success btn-sm label-inline font-weight-bolder  mr-2">Lulus</span>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->

    <!-- Modal input nilai ujian -->
    <?php foreach ($ppdb as $key => $value) { ?>
        <div class="modal fade" id="inputNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <?php echo form_open('ujian/insertNilai/') ?>
                    <!--begin::Form-->
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Input Nilai Ujian</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form class="form-group">
                        <div class="modal-body">
                            <div class="card-body">
                                <table class="table table-separate table-head-custom nowrap" mode="datatable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>No. Daftar</th>
                                            <th>NISN</th>
                                            <th>Nama Lengkap</th>
                                            <th>Nilai Ujian</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($ppdb as $key => $value) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $value['no_pendaftaran'] ?></td>
                                                <td><?= $value['nisn'] ?></td>
                                                <td><?= $value['nama_siswa'] ?></td>
                                                <td>
                                                    <input type="text" class="form-control" name="nilai_ujian[]" value="<?= $value['nilai_ujian'] ?>" />
                                                </td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary font-weight-bold" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary font-weight-bold">Selesai</button>
                        </div>
                    </form>
                    <!--end::Form-->


                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- Modal input nilai ujian -->

    <?= $this->endSection('content'); ?>