<?= $this->extend('templates/adm_layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!--begin::Content-->
    <div class="flex-row-fluid ml-lg-8">
        <!--begin::Card-->
        <?php

        if (session()->getFlashdata('message')) {
            echo '<div class="alert alert-custom alert-light-success fade show" role="alert">';
            echo '<div class="alert-text text-dark">';
            echo session()->getFlashdata('message');
            echo '</div>';
            echo '<div class="alert-close icon-dark">';
            echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
            echo '<span aria-hidden="true"><i class="ki ki-close"></i>';
            echo '</span>';
            echo '</button>';
            echo '</div>';
            echo '</div>';
        }

        ?>

        <div class="card card-custom gutter-bs">
            <!--Begin::Header-->
            <div class="card-header card-header-tabs-line">
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x" role="tablist">
                        <li class="nav-item mr-3">
                            <a class="nav-link active" data-toggle="tab" href="#profile">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Home\Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#alamat">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Map\Marker2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Alamat</span>
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="tab" href="#kontak">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group-chat.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Kontak</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data_ppdb">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                                <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1" />
                                                <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Data PPDB</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tahapan_pendaftaran">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Route.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M8,7 C7.44771525,7 7,6.55228475 7,6 C7,5.44771525 7.44771525,5 8,5 L16,5 C18.209139,5 20,6.790861 20,9 C20,11.209139 18.209139,13 16,13 L8,13 C6.8954305,13 6,13.8954305 6,15 C6,16.1045695 6.8954305,17 8,17 L17,17 C17.5522847,17 18,17.4477153 18,18 C18,18.5522847 17.5522847,19 17,19 L8,19 C5.790861,19 4,17.209139 4,15 C4,12.790861 5.790861,11 8,11 L16,11 C17.1045695,11 18,10.1045695 18,9 C18,7.8954305 17.1045695,7 16,7 L8,7 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M9.79289322,3.79289322 C10.1834175,3.40236893 10.8165825,3.40236893 11.2071068,3.79289322 C11.5976311,4.18341751 11.5976311,4.81658249 11.2071068,5.20710678 L8.20710678,8.20710678 C7.81658249,8.59763107 7.18341751,8.59763107 6.79289322,8.20710678 L3.79289322,5.20710678 C3.40236893,4.81658249 3.40236893,4.18341751 3.79289322,3.79289322 C4.18341751,3.40236893 4.81658249,3.40236893 5.20710678,3.79289322 L7.5,6.08578644 L9.79289322,3.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(7.500000, 6.000000) rotate(-270.000000) translate(-7.500000, -6.000000) " />
                                                <path d="M18.7928932,15.7928932 C19.1834175,15.4023689 19.8165825,15.4023689 20.2071068,15.7928932 C20.5976311,16.1834175 20.5976311,16.8165825 20.2071068,17.2071068 L17.2071068,20.2071068 C16.8165825,20.5976311 16.1834175,20.5976311 15.7928932,20.2071068 L12.7928932,17.2071068 C12.4023689,16.8165825 12.4023689,16.1834175 12.7928932,15.7928932 C13.1834175,15.4023689 13.8165825,15.4023689 14.2071068,15.7928932 L16.5,18.0857864 L18.7928932,15.7928932 Z" fill="#000000" fill-rule="nonzero" transform="translate(16.500000, 18.000000) scale(1, -1) rotate(270.000000) translate(-16.500000, -18.000000) " />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->

                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Tahapan Pendaftaran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data_kepala">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Address-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Data Kepala</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#data_ketua">
                                <span class="nav-icon mr-2">
                                    <span class="svg-icon mr-3">
                                        <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Address-card.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </span>
                                <span class="nav-text font-weight-bold">Data Ketua</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end::Header-->
            <!--Begin::Body-->
            <div class="card-body px-0">
                <div class="tab-content">
                    <!--begin::Tab Content-->
                    <div class="tab-pane active" id="profile" role="tabpanel">
                        <?php echo form_open_multipart('kepsek/saveSetting') ?>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>NSM</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="nsm" value="<?= $setting['nsm'] ?>">
                            </div>
                            <div class="col-6">
                                <label>NPSN</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="npsn" value="<?= $setting['npsn'] ?>">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Nama Sekolah</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="nama_sekolah" value="<?= $setting['nama_sekolah'] ?>">
                            </div>
                            <div class="col-6">
                                <label>Jenjang Sekolah</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="jenjang_sekolah" value="<?= $setting['jenjang_sekolah'] ?>">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label class="font-weight-bolder">Logo Sekolah (png, jpeg, jpg)</label>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="mb-5">
                                    <img src="<?= base_url('logo/' . $setting['logo_sekolah']) ?>" width="250px" height="250px" id="gambar_load">
                                </div>
                                <label>Ganti Logo Sekolah</label>
                                <input type="file" class="form-control form-control-lg  form-control-solid" name="logo_sekolah" accept="image/*" id="preview_gambar">
                            </div>
                            <div class="col-6">
                                <label>Status</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="status_sekolah" value="<?= $setting['status_sekolah'] ?>">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="pl-5">
                            <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="alamat" role="tabpanel">
                        <?php echo form_open_multipart('kepsek/saveSetting2') ?>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Alamat Lengkap</label>
                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" name="alamat_lengkap"><?= $setting['alamat_lengkap'] ?></textarea>
                            </div>
                            <div class="col-6">
                                <label>Provinsi</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="provinsi" value="<?= $setting['provinsi'] ?>">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Kabupaten</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="kabupaten" value="<?= $setting['kabupaten'] ?>">
                            </div>
                            <div class="col-6">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="kecamatan" value="<?= $setting['kecamatan'] ?>">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="pl-5">
                            <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="kontak" role="tabpanel">
                        <?php echo form_open_multipart('kepsek/saveSetting3') ?>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>No. Telepon</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="telepon_sekolah" value="<?= $setting['telepon_sekolah'] ?>">
                            </div>
                            <div class="col-6">
                                <label>Email</label>
                                <input type="email" class="form-control form-control-lg form-control-solid" name="email" value="<?= $setting['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Website</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="website" value="<?= $setting['website'] ?>">
                            </div>
                            <div class="col-6">
                                <label>Peta</label>
                                <textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="10" name="peta"><?= $setting['peta'] ?></textarea>
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="pl-5">
                            <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="data_ppdb" role="tabpanel">
                        <div class="container">
                            <?php echo form_open_multipart('kepsek/saveSetting4') ?>
                            <div class="form-group pl-8 pr-8">
                                <label><strong>Informasi Beranda</strong> (untuk halaman home -> Informasi Penerimaan Peserta Didik Baru)</label>
                                <textarea class="summernote" id="kt_summernote_1" name="beranda">
                                    <?= $setting['beranda'] ?>
                                </textarea>
                            </div>

                            <div class="form-group pl-8 pr-8">
                                <label><strong>Keterangan</strong> (print Pendaftaran )</label>
                                <textarea class="summernote" id="kt_summernote_1" name="keterangan_print">
                                    <?= $setting['keterangan_print'] ?>
                                </textarea>
                            </div>

                            <div class="form-group pl-8 pr-8">
                                <label><strong>Informasi Ujian</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="info_ujian">
                                    <?= $setting['info_ujian'] ?>
                                </textarea>
                            </div>

                            <div class=" separator separator-dashed my-10"></div>
                            <div class="pl-5">
                                <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                            </div>
                            <?php echo form_close() ?>

                        </div>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="tahapan_pendaftaran" role="tabpanel">
                        <div class="container">
                            <?php echo form_open_multipart('kepsek/saveSetting7') ?>
                            <div class="form-group pl-8 pr-8">
                                <label><strong>Daftar Akun</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan1">
                                    <?= $setting['tahapan1'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Login Akun</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan2">
                                    <?= $setting['tahapan2'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Isi Form</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan3">
                                    <?= $setting['tahapan3'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Print Form</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan4">
                                    <?= $setting['tahapan4'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Ujian</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan5">
                                    <?= $setting['tahapan5'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Hasil Ujian</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan6">
                                    <?= $setting['tahapan6'] ?>
                                </textarea>
                                <label class="pt-5"><strong>Daftar Ulang</strong></label>
                                <textarea class="summernote" id="kt_summernote_1" name="tahapan7">
                                    <?= $setting['tahapan7'] ?>
                                </textarea>
                            </div>

                            <div class=" separator separator-dashed my-10"></div>
                            <div class="pl-5">
                                <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                            </div>
                            <?php echo form_close() ?>

                        </div>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="data_kepala" role="tabpanel">
                        <?php echo form_open_multipart('kepsek/saveSetting5') ?>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Nama Kepala Sekolah</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="nama_kepsek" value="<?= $setting['nama_kepsek'] ?>">
                            </div>
                            <div class="col-6">
                                <label>NIP</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" value="<?= $setting['nip_kepsek'] ?>" name="nip_kepsek">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label class="font-weight-bolder">TTD Kepala (png, jpeg, jpg)</label>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="mb-5">
                                    <img src="<?= base_url('ttd/' . $setting['ttd_kepsek']) ?>" width="250px" height="250px" id="gambar_load">
                                </div>
                                <label>Ganti TTD Kepala</label>
                                <input type="file" class="form-control form-control-lg  form-control-solid" name="ttd_kepsek" accept="image/*" id="preview_gambar">
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="pl-5">
                            <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!--end::Tab Content-->
                    <!--begin::Tab Content-->
                    <div class="tab-pane" id="data_ketua" role="tabpanel">
                        <?php echo form_open_multipart('kepsek/saveSetting6') ?>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label>Nama Ketua PPDB</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="nama_ketua" value="<?= $setting['nama_ketua'] ?>">
                            </div>
                            <div class="col-6">
                                <label>NIP</label>
                                <input type="text" class="form-control form-control-lg form-control-solid" name="nip_ketua" value="<?= $setting['nip_ketua'] ?>">
                            </div>
                        </div>
                        <div class="form-group row pl-5 pr-5">
                            <div class="col-6">
                                <label class="font-weight-bolder">TTD Ketua (png, jpeg, jpg)</label>
                                <div class="separator separator-dashed my-5"></div>
                                <div class="mb-5">
                                    <img src="<?= base_url('ttd/' . $setting['ttd_ketua']) ?>" width="250px" height="250px" id="gambar_load">
                                </div>
                                <label>Ganti TTD Ketua</label>
                                <input type="file" class="form-control form-control-lg  form-control-solid" name="ttd_ketua" accept="image/*" id="preview_gambar">
                            </div>
                            <div class="col-6">
                            </div>
                        </div>
                        <div class="separator separator-dashed my-10"></div>
                        <div class="pl-5">
                            <button type="submit" class="btn btn-primary font-weight">Simpan Data</button>
                        </div>
                        <?php echo form_close() ?>
                    </div>
                    <!--end::Tab Content-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content-->
    <?= $this->endSection('content'); ?>