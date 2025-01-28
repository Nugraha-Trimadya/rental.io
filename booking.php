<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocMoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #1e1e1e, #2d2d2d);
            min-height: 100vh;
            color: #fff;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            background-color: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px;
            z-index: 1000;
        }
        .sidebar-logo {
            text-align: center;

        }
        .sidebar-logo img {
            width: 100px;
        }
        .nav-link {
            color: #fff;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: 0.3s;
        }
        .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: #039b4e;
        }
        .nav-link.active {
            background-color: #039b4e;
            color: #fff;
        }
        .nav-link i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .container {
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #039b4e;
            font-size: 24px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-control {
            border-radius: 8px;
            margin-bottom: 12px;
        }
        button {
            background: linear-gradient(135deg, #039b4e, #027a3e);
            color: white;
            padding: 8px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: linear-gradient(135deg, #027a3e, #039b4e);
        }
        .transaction-result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-radius: 8px;
            color: #333;
        }
        .transaction-result h3 {
            color: #039b4e;
            font-size: 20px;
        }
        .cetak {
            background: linear-gradient(135deg, #f8e823, #f6d13a);
            color: #333;
            margin-top: 12px;
        }
        .cetak:hover {
            background: linear-gradient(135deg, #f6d13a, #f8e823);
        }
        @media print {
            .cetak, .sidebar {
                display: none;
            }
            .main-content {
                margin-left: 0;
            }
            .container {
                box-shadow: none;
                margin: 0;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-logo">
            <img src="assets/logo.png" alt="LocMoto Logo">
        </div>
        <nav>
            <a href="index.php" class="nav-link">
                <i class="bi bi-house-door"></i> Home
            </a>
            <a href="booking.php" class="nav-link active">
                <i class="bi bi-calendar-check"></i> Booking
            </a>
            <a href="about.php" class="nav-link">
                <i class="bi bi-info-circle"></i> About
            </a>
            <a href="contact.php" class="nav-link">
                <i class="bi bi-envelope"></i> Contact
            </a>
        </nav>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>LocMoto Rental</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" placeholder="Masukkan nama Anda" required>
                </div>
                <div class="mb-3">
                    <label for="lamaWaktuRental" class="form-label">Lama Waktu Rental (Per Hari)</label>
                    <input type="number" class="form-control" id="lamaWaktuRental" name="lamaWaktuRental" placeholder="Masukkan jumlah hari" min="1" required>
                </div>
                <div class="mb-3">
                    <label for="jenisMotor" class="form-label">Pilih Jenis Motor</label>
                    <select class="form-control" id="jenisMotor" name="jenisMotor" required>
                        <option value="" disabled selected>Pilih motor yang ingin dirental</option>
                        <option value="Beat">Honda Beat - Rp 60.000/hari</option>
                        <option value="Supra">Honda Supra - Rp 250.000/hari</option>
                        <option value="Vario">Honda Vario - Rp 70.000/hari</option>
                        <option value="Harley">Harley Davidson - Rp 500.000/hari</option>
                    </select>
                </div>
                <button type="submit" name="Submit">Booking Sekarang</button>
            </form>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submit'])) {
                $namaPelanggan = strtolower(trim($_POST['namaPelanggan']));
                $lamaWaktu = (int)$_POST['lamaWaktuRental'];
                $jenisMotor = strtolower(trim($_POST['jenisMotor']));

                $hargaMotor = [
                    "beat" => 60000,
                    "supra" => 250000,
                    "vario" => 70000,
                    "harley" => 500000
                ];

                $namaPelangganTerdaftar = ["agus", "wawan", "yusuf", "sukma", "taufik"];
                $isMember = in_array($namaPelanggan, $namaPelangganTerdaftar);

                if (array_key_exists($jenisMotor, $hargaMotor)) {
                    $hargaPerHari = $hargaMotor[$jenisMotor];
                    $totalSebelumDiskon = $hargaPerHari * $lamaWaktu;
                    $ppn = $totalSebelumDiskon * 0.1;
                    $diskon = $isMember ? $totalSebelumDiskon * 0.05 : 0;
                    $totalPembayaran = $totalSebelumDiskon + $ppn - $diskon;

                    echo "<div class='transaction-result'>
                            <h3>Detail Booking</h3>
                            <p>Nama: " . htmlspecialchars($_POST['namaPelanggan']) . "</p>
                            <p>Status: " . ($isMember ? "Member" : "Non-Member") . "</p>
                            <p>Jenis Motor: " . ucfirst($jenisMotor) . "</p>
                            <p>Durasi: $lamaWaktu hari</p>
                            <p>Harga Per Hari: Rp " . number_format($hargaPerHari, 0, ',', '.') . "</p>
                            <p>PPN (10%): Rp " . number_format($ppn, 0, ',', '.') . "</p>
                            <p>Diskon: Rp " . number_format($diskon, 0, ',', '.') . "</p>
                            <h4>Total Pembayaran: Rp " . number_format($totalPembayaran, 0, ',', '.') . "</h4>
                            <button class='cetak' onclick='window.print()'>Cetak Bukti</button>
                        </div>";
                } else {
                    echo "<div class='transaction-result'><p>Jenis motor tidak valid.</p></div>";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>