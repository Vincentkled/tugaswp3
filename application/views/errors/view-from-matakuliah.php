<html>

<head>
    <title>Form Input MataKuliah</title>
</head>

<body>
    <div class="pesan">
        <?php echo validation_errors();?>
        <center>
            <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data MataKuliah
</th>
</tr>
<tr>
    <th>Kode MTK</th>
    <th>:</th>
    <td>
        <input type="text" name="kode" id="kode">
</tr>
</td>
