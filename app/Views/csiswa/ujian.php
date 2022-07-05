<?= $this->extend('templates/cs_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><strong>SOAL 1</strong></h3>
                    </div>
                </div>
                <div class="card-body">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                    since the 1500s, when an unknown printer took a galley of type and
                    scrambled. Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled.
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <a href="#" class="btn btn-light font-weight-bold">Soal Sebelumnya</a>
                    <a href="#" class="btn btn-light-primary font-weight-bold">Soal Selanjutnya</a>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <div class="col-4">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="card-label"><strong>Navigasi Kuis</strong></h3>
                    </div>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-success mr-2">1</button>
                    <button type="button" class="btn btn-outline-secondary mr-2">
                        2
                    </button>
                </div>
                <div class="card-footer text-center">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">
                        Kumpulkan
                    </button>
                    <!-- begin Modal-->
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Modal Title
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of type and scrambled it to make a
                                        type specimen book. It has survived not only five centuries,
                                        but also the leap into electronic typesetting, remaining
                                        essentially unchanged.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary text-dark font-weight-bold" data-dismiss="modal">
                                        Kembali
                                    </button>
                                    <button type="button" class="btn btn-success font-weight-bold">
                                        Kumpulkan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal-->
                </div>
            </div>
            <!--end::Card-->
        </div>
    </div>


    <?= $this->endSection(''); ?>