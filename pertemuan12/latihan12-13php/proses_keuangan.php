<?php

$tanggal = '';
$jenis = '';
$nominal = '';
$keterangan = '';

$errors = [];
$sukses = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $tanggal = trim($_POST['tanggal'] ?? '');
    $jenis = trim($_POST['jenis'] ?? '');
    $nominal = trim($_POST['nominal'] ?? '');
    $keterangan = trim($_POST['keterangan'] ?? '');

    // VALIDASI
    if ($tanggal === '') {
        $errors[] = 'Tanggal wajib diisi';
    }

    if ($jenis === '') {
        $errors[] = 'Jenis transaksi wajib dipilih';
    }

    if ($nominal === '') {
        $errors[] = 'Nominal wajib diisi';
    }

    if ($keterangan === '') {
        $errors[] = 'Keterangan wajib diisi';
    }

    if (empty($errors)) {
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pencatatan</title>
</head>
<body>

<h2>Hasil Pencatatan Keuangan</h2>

<?php if (!empty($errors)): ?>
    <div style="color:red;">
        <strong>Error:</strong>
        <ul>
            <?php foreach ($errors as $e): ?>
                <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<?php if ($sukses): ?>
    <div style="color:green;">
        Data berhasil disimpan!
    </div>

    <p><strong>Tanggal:</strong> <?= htmlspecialchars($tanggal) ?></p>
    <p><strong>Jenis:</strong> <?= htmlspecialchars($jenis) ?></p>
    <p><strong>Nominal:</strong> <?= htmlspecialchars($nominal) ?></p>
    <p><strong>Keterangan:</strong> <?= htmlspecialchars($keterangan) ?></p>
<?php endif; ?>

<a href="index_keuangan.php">Kembali</a>

</body>
</html>