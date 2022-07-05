<?php
$db = \Config\Database::connect();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>

<?= $this->extend('templates/auth'); ?>

<?= $this->section('content'); ?>
<?php if (isset($ta['status'])) { ?>
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/assets/media/bg/bg-auth.png);">
                <div class="login-form text-center text-dark p-7 position-relative overflow-hidden">

                    <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <!--begin::Login Header-->
                            <div class="d-flex flex-center mb-10">
                                <a href="#">
                                    <img src="<?= base_url(); ?>/assets/media/logos/kemenag.png" class="max-h-75px" alt="" />
                                </a>
                            </div>
                            <!--end::Login Header-->
                            <!--begin::Login Sign in form-->
                            <div class="login-signin">
                                <div class="mb-15">
                                    <h3 class=" font-weight-bold text-dark">Halaman Pendaftaran Akun</h3>
                                    <p class="text-dark-75 font-weight-normal">PPDB ONLINE | MTsN 4 ACEH BESAR</p>

                                </div>
                                <?php session()->getFlashdata('errors') ?>
                                <?php echo form_open('auth/saveregister') ?>
                                <div class="form" id="kt_login_signin_form">
                                    <div class="form-group">
                                        <input class="form-control h-auto text-dark bg-dark-o-10 rounded-pill border-0 py-4 px-8 <?= $validation->hasError('nama_siswa') ? 'is-invalid' : ''; ?>" type="text" placeholder="Nama Lengkap" name="nama_siswa" value="<?= old('nama_siswa'); ?>" />
                                        <div class="invalid-feedback text-left pl-2">
                                            <?= $validation->getError('nama_siswa'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control h-auto text-dark bg-dark-o-10 rounded-pill border-0 py-4 px-8 <?= $validation->hasError('telepon_siswa') ? 'is-invalid' : ''; ?>" type="text" placeholder="No. Telepon (Wa)" name="telepon_siswa" value="<?= old('telepon_siswa'); ?>" />
                                        <div class="invalid-feedback text-left pl-2">
                                            <?= $validation->getError('telepon_siswa'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control h-auto text-dark bg-dark-o-10 rounded-pill border-0 py-4 px-8 <?= $validation->hasError('nisn') ? 'is-invalid' : ''; ?>" type="text" placeholder="NISN" name="nisn" value="<?= old('nisn'); ?>" />
                                        <div class="invalid-feedback text-left pl-2">
                                            <?= $validation->getError('nisn'); ?>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control h-auto text-dark bg-dark-o-10 rounded-pill border-0 py-4 px-8 <?= $validation->hasError('password') ? 'is-invalid' : ''; ?>" type="password" placeholder="Password" name="password" value="<?= old('password'); ?>" />
                                        <div class="invalid-feedback text-left pl-2">
                                            <?= $validation->getError('password'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control h-auto text-dark bg-dark-o-10 rounded-pill border-0 py-4 px-8 <?= $validation->hasError('cpassword') ? 'is-invalid' : ''; ?>" type="password" placeholder="Konfirmasi Password" name="cpassword" />
                                        <div class="invalid-feedback text-left pl-2">
                                            <?= $validation->getError('cpassword'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group text-center mt-10">
                                        <button type="submit" class="btn btn-pill btn-warning opacity-90 px-15 py-3">Daftar Akun</button>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                            <!--end::Login Sign in form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->

<?php } else { ?>
    <h1 class="text-danger font-weight-bolder mb-12"> <strong>Penerimaan Peserta Didik Tahun ini Sudah Ditutup</strong></h1>
<?php } ?>

<?= $this->endSection(''); ?>