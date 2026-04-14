<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pencatatan Keuangan</title>
</head>
<body>

<h2>Form Pencatatan Keuangan</h2>

<form method="POST" action="proses_keuangan.php">

    <label>Tanggal Transaksi</label><br>
    <input type="date" name="tanggal"><br><br>

    <label>Jenis Transaksi</label><br>
    <select name="jenis">
        <option value="">-- Pilih --</option>
        <option value="Pemasukan">Pemasukan</option>
        <option value="Pengeluaran">Pengeluaran</option>
    </select><br><br>

    <label>Nominal</label><br>
    <input type="number" name="nominal"><br><br>

    <label>Keterangan</label><br>
    <input type="text" name="keterangan"><br><br>

    <button type="submit" name="simpan">Simpan Data</button>

</form>

</body>
</html>