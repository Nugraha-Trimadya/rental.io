<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocMoto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
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
            display: flex;
            gap: 20px;
        }
        .container {
            width: 100%;
            max-width: 500px;
            margin: 20px 0;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            color: #333;
            height: fit-content;
        }
        .result-container {
            width: 100%;
            max-width: 500px;
            margin: 20px 0;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #039b4e;
            font-size: 28px;
        }
        label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #444;
        }
        .form-control {
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
        }
        .form-control:focus {
            border-color: #039b4e;
            box-shadow: 0 0 0 0.2rem rgba(3, 155, 78, 0.25);
        }
        .form-text {
            color: #666;
            font-size: 0.9rem;
            margin-top: -15px;
            margin-bottom: 15px;
        }
        button {
            background: linear-gradient(135deg, #039b4e, #027a3e);
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
            font-weight: 600;
            font-size: 1.1rem;
        }
        button:hover {
            background: linear-gradient(135deg, #027a3e, #039b4e);
            transform: translateY(-2px);
        }
        .transaction-result {
            margin-top: 0;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 12px;
            color: #333;
            border: 1px solid #ddd;
        }
        .transaction-result h3 {
            color: #039b4e;
            font-size: 22px;
            margin-bottom: 15px;
        }
        .transaction-result p {
            margin-bottom: 10px;
            font-size: 1.1rem;
        }
        .cetak {
            background: linear-gradient(135deg, #f8e823, #f6d13a);
            color: #333;
            margin-top: 20px;
        }
        .cetak:hover {
            background: linear-gradient(135deg, #f6d13a, #f8e823);
        }
        @media print {
            body {
                background: none;
                color: #000;
            }
            .cetak, .sidebar, .container, body > *:not(.main-content), .main-content > *:not(.result-container) {
                display: none !important;
            }
            .main-content {
                margin: 0;
                padding: 0;
            }
            .result-container {
                margin: 0;
                max-width: 100%;
            }
            .transaction-result {
                border: none;
                padding: 0;
                margin: 0;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
      <div class="row">
          <!-- Sidebar -->
          <div class="sidebar">
              <div class="sidebar-logo">
                  <img src="assets/logo.png" alt="RentGo Logo">
              </div>
              <nav>
                  <a href="index.php" class="nav-link active">
                      <i class="bi bi-house-door"></i> Home
                  </a>
                  <a href="booking.php" class="nav-link">
                      <i class="bi bi-calendar-check"></i> Booking
                  </a>
                  <a href="vehicles.php" class="nav-link">
                      <i class="bi bi-car-front"></i> Vehicles
                  </a>
                  <a href="customers.php" class="nav-link">
                      <i class="bi bi-people"></i> Customers
                  </a>
                  <a href="settings.php" class="nav-link">
                      <i class="bi bi-gear"></i> Settings
                  </a>
                  <a href="logout.php" class="nav-link">
                      <i class="bi bi-box-arrow-right"></i> Logout
                  </a>
              </nav>
          </div>
          
    <div class="main-content">
        <div class="container">
            <h1><i class="bi bi-motorcycle me-2"></i>LocMoto Rental</h1>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="namaPelanggan" class="form-label">Nama Pelanggan</label>
                    <input type="text" class="form-control" id="namaPelanggan" name="namaPelanggan" placeholder="Contoh: Agus Setiawan" required>
                    <div class="form-text">Masukkan nama lengkap Anda sesuai KTP</div>
                </div>
                <div class="mb-3">
                    <label for="tanggalMulai" class="form-label">Tanggal Mulai Rental</label>
                    <input type="date" class="form-control" id="tanggalMulai" name="tanggalMulai" required>
                </div>
                <div class="mb-3">
                    <label for="lamaWaktuRental" class="form-label">Lama Waktu Rental</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="lamaWaktuRental" name="lamaWaktuRental" placeholder="Masukkan jumlah hari" min="1" required>
                        <span class="input-group-text">Hari</span>
                    </div>
                    <div class="form-text">Minimal peminjaman 1 hari</div>
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
                    <div class="form-text">Harga sudah termasuk helm dan jas hujan</div>
                </div>
                <button type="submit" name="Submit"><i class="bi bi-check2-circle me-2"></i>Booking Sekarang</button>
            </form>
        </div>

        <div class="result-container">
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
                            <h3><i class='bi bi-receipt me-2'></i>Detail Booking</h3>
                            <p><strong>Nama:</strong> " . htmlspecialchars($_POST['namaPelanggan']) . "</p>
                            <p><strong>Status:</strong> " . ($isMember ? "<span class='badge bg-success'>Member</span>" : "<span class='badge bg-secondary'>Non-Member</span>") . "</p>
                            <p><strong>Jenis Motor:</strong> " . ucfirst($jenisMotor) . "</p>
                            <p><strong>Durasi:</strong> $lamaWaktu hari</p>
                            <p><strong>Harga Per Hari:</strong> Rp " . number_format($hargaPerHari, 0, ',', '.') . "</p>
                            <p><strong>PPN (10%):</strong> Rp " . number_format($ppn, 0, ',', '.') . "</p>
                            <p><strong>Diskon:</strong> Rp " . number_format($diskon, 0, ',', '.') . "</p>
                            <h4 class='mt-3'><strong>Total Pembayaran:</strong> Rp " . number_format($totalPembayaran, 0, ',', '.') . "</h4>
                            <button class='cetak' onclick='window.print()'><i class='bi bi-printer me-2'></i>Cetak Bukti</button>
                        </div>";
                } else {
                    echo "<div class='transaction-result'><p class='text-danger'><i class='bi bi-exclamation-triangle me-2'></i>Jenis motor tidak valid.</p></div>";
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#tanggalMulai", {
            minDate: "today",
            dateFormat: "Y-m-d"
        });
    </script>
</body>
</html>