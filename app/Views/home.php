<?php
$db = \Config\Database::connect();

$setting = $db->table('tbl_web')
    ->where('id_setting', '1')
    ->get()->getRowArray();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?= $title ?> | <?= $subtitle ?></title>
    <meta name="description" content="Support center home example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/kemenag.ico" />
</head>

<body>
    <!--begin::Content-->
    <div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <!--begin::Hero-->
        <div class="d-flex flex-row-fluid bgi-size-cover bgi-position-center bg-primary-o-40" style="background-image: url('<?= base_url(); ?>/assets/media/bg/bg-9.jpg')">
            <div class="container">
                <!--begin::Topbar-->
                <div class="d-flex justify-content-between align-items-center border-bottom border-white py-7">
                    <h3 class="h4 text-dark mb-0">
                        <img src="<?= base_url('logo/' . $setting['logo_sekolah']) ?>" class="max-h-50px" alt="">
                    </h3>
                    <div class="d-flex">
                        <a href="<?= base_url('auth/loginSiswa') ?>" class="btn font-weight-bolder font-size-sm btn-secondary py-3 px-6 mr-5">Login Akun</a>

                        <a href="<?= base_url('auth/register') ?>" class="btn font-weight-bolder font-size-sm btn-primary py-3 px-6">Daftar Akun</a>
                    </div>
                </div>
                <!--end::Topbar-->
                <div class="d-flex align-items-stretch text-center flex-column py-35">
                    <!--begin::Heading-->
                    <?php if (isset($ta['status'])) { ?>
                        <h1 class="text-dark font-weight-bolder mb-12"><strong> Penerimaan Peserta Didik Tahun <?= $ta['ta'] ?></strong></h1>
                    <?php } else { ?>
                        <h1 class="text-danger font-weight-bolder mb-12"> <strong>Penerimaan Peserta Didik Tahun ini Sudah Ditutup</strong></h1>
                    <?php } ?>
                    <!--end::Heading-->
                    <!--begin::Form-->
                    <form class="d-flex position-relative w-75 px-lg-40 m-auto">
                        <div class="input-group">
                            <!--begin::Icon-->
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white border-0 py-7 px-8">
                                    <span class="svg-icon svg-icon-xl">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                            </div>
                            <!--end::Icon-->
                            <!--begin::Input-->
                            <input type="text" class="form-control h-auto border-0 py-7 px-1 font-size-h6" placeholder="Ask a question" />
                            <!--end::Input-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Hero-->
        <div class="bg-primary-o-40 mb-10">
            <!--begin::Section-->
            <div class="container pb-8">
                <div class="row">
                    <div class="col-lg-4">
                        <!--begin::Callout-->
                        <div class="card card-custom wave wave-animate-slow wave-success mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon svg-icon-success svg-icon-4x">

                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->

                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-success font-weight-bold font-size-h4 mb-3">Jumlah Pendaftar</a>
                                        <div class="text-dark-75">PPDB <?= date('Y'); ?></div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                        </div>
                        <!--end::Callout-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Callout-->
                        <div class="card card-custom wave wave-animate-slow wave-warning mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon svg-icon-warning svg-icon-4x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Jumlah Laki-Laki</a>
                                        <div class="text-dark-75">PPDB <?= date('Y'); ?></div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                        </div>
                        <!--end::Callout-->
                    </div>
                    <div class="col-lg-4">
                        <!--begin::Callout-->
                        <div class="card card-custom wave wave-animate-slow wave-info mb-8 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center p-5">
                                    <!--begin::Icon-->
                                    <div class="mr-6">
                                        <span class="svg-icon svg-icon-info svg-icon-4x">
                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Content-->
                                    <div class="d-flex flex-column">
                                        <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">Jumlah Perempuan</a>
                                        <div class="text-dark-75">PPDB <?= date('Y'); ?></div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                        </div>
                        <!--end::Callout-->
                    </div>
                </div>
            </div>
            <!--end::Section-->
        </div>
        <!--begin::Section-->
        <div class="container mb-8">
            <div class="card card-custom p-6">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Tahapan Penerimaan Peserta Didik Baru <?= date('Y'); ?></h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="">
                        <!--begin::Timeline-->
                        <div class="timeline timeline-6 mt-3">
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Daftar Akun</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan1'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('auth/register') ?>" class="btn btn-primary font-weight-bold btn-sm mt-5 mb-5">Daftar Akun</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Login Akun</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-success icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan2'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('auth/loginSiswa') ?>" class="btn btn-success font-weight-bold btn-sm mt-5 mb-5">Login Akun</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Isi Form</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-danger icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan3'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('') ?>" class="btn btn-danger font-weight-bold btn-sm mt-5 mb-5">Isi Formulir</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Print Form</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan4'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('') ?>" class="btn btn-warning font-weight-bold btn-sm mt-5 mb-5">Print Pendaftaran</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Ujian</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-info icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan5'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('') ?>" class="btn btn-info font-weight-bold btn-sm mt-5 mb-5">Mengikuti Ujian</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Hasil Ujian</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-warning icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan6'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('') ?>" class="btn btn-warning font-weight-bold btn-sm mt-5 mb-5">Lihat Hasil Ujian</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item align-items-start">
                                <!--begin::Label-->
                                <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg mr-auto">Daftar Ulang</div>
                                <!--end::Label-->
                                <!--begin::Badge-->
                                <div class="timeline-badge">
                                    <i class="fa fa-genderless text-primary icon-xl icon-center"></i>
                                </div>
                                <!--end::Badge-->
                                <!--begin::Text-->
                                <div class="font-weight-mormal font-size-lg timeline-content pl-3">
                                    <?= $setting['tahapan7'] ?>
                                    <div class="row pl-3">
                                        <a href="<?= base_url('') ?>" class="btn btn-primary font-weight-bold btn-sm mt-5 mb-5">Daftar Ulang</a>
                                    </div>
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Timeline-->


                    </div>
                </div>
            </div>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="container mb-8">
            <div class="card card-custom p-6">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label">Informasi Penerimaan Peserta Didik Baru <?= date('Y'); ?></h3>
                    </div>
                </div>
                <div class="card-body">

                    <?= $setting['beranda'] ?>

                </div>
            </div>
        </div>
        <!--end::Section-->
        <!--begin::Section-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!--begin::Callout-->
                    <div class="card card-custom p-6 mb-8 mb-lg-0">
                        <div class="card-body">
                            <div class="row">
                                <!--begin::Content-->
                                <div class="col-sm-7">
                                    <h2 class="text-dark mb-4">Get in Touch</h2>
                                    <p class="text-dark-50 line-height-lg">Windows 10 automatically installs updates to make for sure</p>
                                </div>
                                <!--end::Content-->
                                <!--begin::Button-->
                                <div class="col-sm-5 d-flex align-items-center justify-content-sm-end">
                                    <a href="custom/apps/support-center/feedback.html" class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Submit a Request</a>
                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                    </div>
                    <!--end::Callout-->
                </div>
                <div class="col-lg-6">
                    <!--begin::Callout-->
                    <div class="card card-custom p-6">
                        <div class="card-body">
                            <div class="row">
                                <!--begin::Content-->
                                <div class="col-sm-7">
                                    <h2 class="text-dark mb-4">Live Chat</h2>
                                    <p class="text-dark-50 line-height-lg">Windows 10 automatically installs updates to make for sure</p>
                                </div>
                                <!--end::Content-->
                                <!--begin::Button-->
                                <div class="col-sm-5 d-flex align-items-center justify-content-sm-end">
                                    <a href="#" data-toggle="modal" data-target="#kt_chat_modal" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-6">Start Chat</a>
                                </div>
                                <!--end::Button-->
                            </div>
                        </div>
                    </div>
                    <!--end::Callout-->
                </div>
            </div>
        </div>
        <!--end::Section-->
        <!--end::Entry-->
    </div>
    <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted font-weight-bold mr-2">Copyright © <?= date('Y'); ?> PPDB
                </span>
                <a href="<?= $setting['website'] ?>" target="_blank" class="text-dark-75 text-hover-success"><?= $setting['nama_sekolah'] ?></a>
            </div>

            <!--end::Copyright-->
        </div>

        <!--end::Container-->
    </div>
    <!--end::Content-->

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/scripts.bundle.js"></script>
    <script src="<?= base_url(); ?>/assets/js/pages/widgets.js"></script>
    <!--end::Global Theme Bundle-->
</body>

</html>