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
<html>

<head>
    <base href="">
    <meta charset="utf-8" />
    <title><?= $title ?> | <?= $subtitle ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?= base_url(); ?>/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?= base_url(); ?>/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>/assets/css/themes/layout/aside/light.css" rel="stylesheet" type="text/css" />

    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/media/logos/kemenag.ico" />

</head>

<body onload="window.print();">
    <div class="container">
        <?php foreach ($ppdb as $key => $value) { ?>
            <?= $this->include('kop_ujian'); ?>
            <h4 align="center" style="margin-top:0px;"><u>BUKTI PENDAFTARAN</u></h4>
            <b>
                <center>
                    PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB) <br>
                    <?= $setting['nama_sekolah'] ?> TAHUN PELAJARAN <?= $ta['ta'] ?></center>
            </b>
            <br>
            <?php echo form_open('formulir/' . $value['id_siswa']) ?>
            <table width="100%" border="0">
                <tr>
                    <td width="200">NO. PENDAFTARAN</td>
                    <td width="1">:</td>
                    <td><?= $value['no_pendaftaran'] ?></td>
                </tr>
                <tr>
                    <td>TANGGAL PENDAFTARAN </td>
                    <td>:</td>
                    <td><?= $value['tgl_pendaftaran'] ?></td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td>:</td>
                    <td><?= $value['nisn'] ?></td>
                </tr>
                <tr>
                    <td>NAMA LENGKAP</td>
                    <td>:</td>
                    <td><?= $value['nama_siswa'] ?></td>
                </tr>
                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td><?= $value['jenis_kelamin'] ?></td>
                </tr>
                <tr>
                    <td>TEMPAT, TANGGAL LAHIR</td>
                    <td>:</td>
                    <td><?= $value['tempat_lahir'] ?>, <?= $value['tgl_lahir'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $value['alamat_rumah'] ?></td>
                </tr>
                <tr>
                    <td>NAMA ORANG TUA</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="padding-left:55px;">AYAH</td>
                    <td>:</td>
                    <td><?= $value['nama_ayah'] ?></td>
                </tr>
                <tr>
                    <td style="padding-left:55px;">IBU</td>
                    <td>:</td>
                    <td><?= $value['nama_ibu'] ?></td>
                </tr>
                <tr>
                    <td>NO. TELEPON (ORANG TUA)</td>
                    <td>:</td>
                    <td><?= $value['no_ortu'] ?></td>
                </tr>
                <tr>
                    <td>NO. TELEPON (PESERTA DIDIK)</td>
                    <td>:</td>
                    <td><?= $value['telepon_siswa'] ?></td>
                </tr>
                <tr>
                    <td>MIN / SD ASAL</td>
                    <td>:</td>
                    <td><?= $value['sekolah_asal'] ?></td>
                </tr>
            </table>
            <br>
            <?php echo form_close() ?>

            <div class="text-right pb-10">
                <?= $setting['kabupaten'] ?> , <?= date('d-m-Y'); ?> <br>
                Ketua Panitia PPDB, <br>
                <img src="<?= base_url('ttd/' . $setting['ttd_ketua']) ?>" alt="" width="100"><br>
                <b><u><?= $setting['nama_ketua'] ?></u></b><br>
                NIP. <?= $setting['nip_ketua'] ?>
            </div>

            <div class="pb-10">
                <?= $setting['keterangan_print'] ?>
            </div>

        <?php } ?>
    </div>
</body>

</html>