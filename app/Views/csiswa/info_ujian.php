 <?= $this->extend('templates/cs_layout'); ?>

 <?= $this->section('content'); ?>
 <div class="container">
     <div class="row">
         <!--begin::Card-->
         <div class="col-12">
             <!--begin::Card-->
             <div class="card card-custom">
                 <div class="card-header">
                     <div class="card-title">
                         <h3 class="card-label">Informasi Pengerjaan Seleksi :</h3>
                     </div>
                 </div>
                 <div class="card-body">
                     <ul class="list-unstyled">
                         <li class="mb-3">
                             <strong>1. Materi yang akan diujiankan :</strong>
                             <ul>
                                 <li>Rukun Islam</li>
                                 <li>Rukun Iman</li>
                                 <li>Rukun Shalat</li>
                             </ul>
                         </li>
                         <li class="mb-3"><strong>2. Soal Berjumlah 20 soal</strong></li>
                         <li class="mb-3">
                             <strong>3. Soal dalam bentuk pilihan ganda</strong>
                         </li>
                     </ul>
                 </div>
                 <div class="card-footer text-center">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                         Mulai Mengerjakan Seleksi
                     </button>
                     <!-- begin modal-->
                     <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <h5 class="modal-title" id="exampleModalLabel">
                                         Mulai Mengerjakan Seleksi
                                     </h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <i aria-hidden="true" class="ki ki-close"></i>
                                     </button>
                                 </div>
                                 <div class="modal-body">
                                     <ul class="text-left">
                                         <li>Waktu pengerjaan : 40 Menit</li>
                                         <li>Bentuk Soal : Pilihan Ganda</li>
                                         <li>Jumlah Soal : 20 Soal</li>
                                     </ul>
                                 </div>
                                 <div class="modal-footer">
                                     <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">
                                         Kembali
                                     </button>
                                     <a href="<?= base_url('ujian/ujianppdb'); ?>">
                                         <button type="button" class="btn btn-primary font-weight-bold">
                                             Mulai Sekarang
                                         </button>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--end modal-->
                 </div>
             </div>
             <!--end::Card-->
         </div>
         <!--end::Card-->
     </div>

     <?= $this->endSection(''); ?>