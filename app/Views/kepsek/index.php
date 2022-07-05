<?= $this->extend('templates/adm_layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <!--begin::Content-->
    <div class="flex-row-fluid ml-sm-8">
        <div class="row">
            <div class="col-xxl-6">
                <!--begin::Mixed Widget 2-->
                <div class="card card-custom bg-gray-100 gutter-b">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-primary py-5">
                        <h3 class="card-title font-weight-boldest text-white">
                            INFORMASI PPDB MTsN 4 ACEH BESAR
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0 position-relative overflow-hidden">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom bg-primary" style="height: 180px">
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-white font-weight-boldest ont-size-h5 px-10 py-4 mr-2 mt-5" data-toggle="modal" data-target="#staticBackdrop">
                                    <div>
                                        <i class="fas fa-school"></i> TUTUP PENERIMAAN PESERTA DIDIK
                                        BARU 2022
                                    </div>
                                    <div class="mt-2">
                                        <strong class="font-weight-boldest">Status Pendaftaran :
                                            <span class="text-primary ml-1">BUKA</span></strong>
                                    </div>
                                </button>
                            </div>
                            <!-- begin modal-->
                            <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                Penerimaan Peserta Didik Baru 2022
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Tutup Penerimaan Peserta Didik Baru 2022?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary light-primary font-weight-bold" data-dismiss="modal">
                                                Kembali
                                            </button>
                                            <a href="">
                                                <button type="button" class="btn btn-danger font-weight-bold">
                                                    Tutup
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal-->
                        </div>
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-spacer mt-n25">
                            <!--begin::Row-->
                            <div class="row m-0">
                                <div class="col bg-white px-6 py-8 rounded-xl mr-7 mb-7 d-flex justify-content-between">
                                    <div>
                                        <span class="fa fas fa-users icon-2x text-info d-block my-2">
                                        </span>
                                        <a href="#" class="text-info font-weight-bold font-size-h6 mt-2">Jumlah Pendaftar</a>
                                    </div>
                                    <div class="d-flex align-items-center text-info font-weight-boldest display-4 mr-10">
                                        10
                                    </div>
                                </div>
                                <div class="col bg-white px-6 py-8 rounded-xl mb-7 d-flex justify-content-between">
                                    <div>
                                        <span class="fa fas fa-user-check icon-2x text-success d-block my-2">
                                        </span>
                                        <a href="#" class="text-success font-weight-bold font-size-h6 mt-2">Jumlah Peserta Lulus</a>
                                    </div>
                                    <div class="d-flex align-items-center text-success font-weight-boldest display-4 mr-10">
                                        09
                                    </div>
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row m-0">
                                <div class="col bg-white px-6 py-8 rounded-xl mr-7 d-flex justify-content-between">
                                    <div>
                                        <span class="fa fas fa-user-times icon-2x text-danger d-block my-2">
                                        </span>
                                        <a href="#" class="text-danger font-weight-bold font-size-h6 mt-2">Jumlah Peserta Tidak Lulus</a>
                                    </div>
                                    <div class="d-flex align-items-center text-danger font-weight-boldest display-4 mr-10">
                                        01
                                    </div>
                                </div>
                                <div class="col bg-white px-6 py-8 rounded-xl">
                                    <span class="fa fas fa-file-pdf icon-2x text-primary d-block my-2">
                                    </span>
                                    <a href="#" class="text-primary font-weight-bold font-size-h6 mt-2">Laporan PPDB 2022</a>
                                </div>
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 2-->
            </div>
        </div>
    </div>
    <!--end::Content-->


    <?= $this->endSection(''); ?>