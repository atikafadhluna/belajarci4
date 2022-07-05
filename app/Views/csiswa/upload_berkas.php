<?= $this->extend('templates/cs_layout'); ?>

<?= $this->section('content'); ?>
<div class="container">


    <div class="card card-custom gutter-b">
        <div class="card-header">
            <div class="card-title">
                <h3 class="card-label">Upload Berkas Penerimaan Peserta Didik Baru</h3>
            </div>
        </div>
        <!--begin::Form-->
        <div class="form">
            <div class="card-body">
                <div>
                    <h4><strong>PENTING !</strong></h4>
                    <ul>
                        <li>
                            Hasil scan dokumen harus dari dokumen asli, tidak boleh dokumen
                            <strong>fotocopy</strong>
                        </li>
                        <li>Periksa kembali dokumen yang sudah di unggah</li>
                    </ul>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-12 text-lg-left"><strong>Lampiran</strong></label>
                    <select name="id_lampiran" class="form-control">
                        <option value="">--Pilih Lampiran --</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-12 text-lg-left"><strong>Keterangan</strong></label>
                    <input type="text" class="form-control" name="akte" required placeholder="keterangan" />
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-sm-12 text-lg-left"><strong>Berkas</strong></label>
                    <input type="file" class="form-control" name="berkas" accept="" required />
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-4">
                        <button type="reset" class="btn btn-light-danger mr-2">
                            Batalkan
                        </button>
                        <button type="submit" class="btn btn-light-primary">Selesai</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Form-->
    </div>
    <?= $this->endSection(''); ?>