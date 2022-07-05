<?php
$db = \Config\Database::connect();

$setting = $db->table('tbl_web')
    ->where('id_setting', '1')
    ->get()->getRowArray();

$ta = $db->table('tbl_ta')
    ->where('status', '1')
    ->get()->getRowArray();
?>
<table border="0" width="100%">
    <tr>
        <td align="left">
            <img src="<?= base_url('logo/' . $setting['logo_sekolah']) ?>" alt="logo" width="100">
        </td>
        <td align="left">
            <b style="font-size:25px;">PANITIA PENERIAMAAN PESERTA DIDIK BARU (PPDB)</b> <br>
            <b style="font-size:25px;"><?= $setting['nama_sekolah'] ?></b> <br>
            <b style="font-size:25px;">TAHUN PELAJARAN <?= $ta['ta'] ?></b><br>
            <b align="left" style="font-size:15px;">
                Kantor : <?= $setting['alamat_lengkap'] ?>
                <br>
                <i class="fas fa-phone-alt text-dark icon-md "></i> <?= $setting['telepon_sekolah'] ?> <i class="fas fa-atlas text-dark icon-md  pl-5"></i> <?= $setting['website'] ?>
                <i class="fas fa-mail-bulk text-dark icon-md  pl-5"></i> <?= $setting['email'] ?></b>
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
            <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
            <hr size="2" color="black" style="margin:0px;">
        </td>
    </tr>
</table>
<br>