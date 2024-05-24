<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocMoto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #000000; 
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            border: 1px solid #000000;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            color: #f8e823;
        }

        .logo {
            display: block;
            margin: 0 auto;
            width: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #039b4e;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #039b4e3; 
        }

        input{
            width:calc(100% - 22px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 16px;
            color: #ffffff;
            background-color: #f8e823;
        }

        select{
            width:  calc(100% - 0px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size: 16px;
            color: #ffffff;
            background-color: #f8e823;
        }

        input:focus, select:focus {
            border-color: solid transparent;
            outline: none;
        }

        button {
            background-color: #f8e823;
            color: #ffffff; 
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            width: 100%;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #f6d13a;
        }

        @media print{
            .cetak{
                display: none;
            visibility: visible;
            }
            .buktiTransaksi{
                display: none;
            }
            form{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <img src="logo3.png" alt="" class="logo">
        <h1>LocMoto</h1>
        <form action="" method="POST">
            <div class="isiNama">
                <label for="namaPelanggan">Nama Pelanggan</label>
                <input type="text" id="namaPelanggan" name="namaPelanggan" required>
            </div>
            <div class="isiWaktu">
                <label for="lamaWaktuRental">Lama Waktu Rental (Per Hari)</label>
                <input type="number" id="lamaWaktuRental" name="lamaWaktuRental" required>
            </div>
            <div class="isiJenis">
                <label for="jenisMotor">Jenis Motor</label>
                <select id="jenisMotor" name="jenisMotor" required>
                    <option value="Beat">Beat</option>
                    <option value="Supra">Supra</option>
                    <option value="Vario">Vario</option>
                    <option value="Harley">Harley</option>
                </select>
            </div>
            <button type="submit" name="Submit">Submit</button>
        </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                class Rental
                {
                    public $nama;
                    public $harga;
                    public $diskon = 5;
                    public $waktu;
                    public $jenis;
                    public $ppn = 10;

                    public function __construct($nama, $harga, $waktu, $jenis) {
                        $this->nama = $nama;
                        $this->harga = $harga;
                        $this->waktu = $waktu;
                        $this->jenis = $jenis;
                    }

                    public function getNama() {
                        return $this->nama;
                    }

                    public function getHarga() {
                        return $this->harga;
                    }

                    public function getWaktu() {
                        return $this->waktu;
                    }

                    public function getJenis() {
                        return $this->jenis;
                    }

                    public function getDiskon() {
                        return $this->diskon;
                    }

                    public function Member() {
                        return $this->nama;
                    }
                }

                class Pelanggan extends Rental {
                    public function ppn() {
                        $harga = $this->harga * $this->waktu;
                        $totalHarga = $harga + $harga * $this->ppn / 100;
                        return $totalHarga;
                    }

                    public function buktiTransaksi($isMember) {
                        $totalHarga = $this->ppn();
                        $hargaFinal = $isMember ? $totalHarga - ($totalHarga * $this->diskon / 100) : $totalHarga;

                        echo "
                        <center><div>
                        <h3>Anda merupakan {$this->nama} disini dan Anda mendapat diskon sebesar " . ($isMember ? "5%" : "0%") . "</h3>
                        <p>Jenis motor yang Anda sewa adalah {$this->jenis} selama {$this->waktu} hari</p>
                        <p>Harga permotornya adalah Rp." . number_format($this->harga, 2, ',', '.') . "</p>
                        <h3>Anda harus membayar sebesar Rp." . number_format($hargaFinal, 2, ',', '.') . "</h3>
                        <button onclick='buktiTransaksi()' class='cetak'>Cetak</button>
                        </div></center>";
                    }
                }

                $nama = strtolower($_POST["namaPelanggan"]);
                $waktu = $_POST["lamaWaktuRental"];
                $jenis = strtolower($_POST["jenisMotor"]);

                $namaPelanggan = ["agus", "wawan", "yusuf", "sukma", "taufik"]; 

                function isPelanggan($nama, $namaPelanggan) {
                    return in_array($nama, $namaPelanggan);
                }

                if (isset($_POST['Submit'])) {
                    if (isset($_POST['namaPelanggan'], $_POST['lamaWaktuRental'], $_POST['jenisMotor'])) {
                        $pelangganInput = strtolower($_POST['namaPelanggan']);
                        $waktu = $_POST['lamaWaktuRental'];
                        $jenis = strtolower($_POST['jenisMotor']);
                        $hargaMotor = [
                            "vario" => 70000,
                            "beat" => 60000,
                            "supra" => 250000,
                            "harley" => 500000,
                        ];

                        $isMember = isPelanggan($pelangganInput, $namaPelanggan);

                        if (array_key_exists($jenis, $hargaMotor)) {
                            $harga = $hargaMotor[$jenis];
                            $rental = new Pelanggan($isMember ? "member" : "non member", $harga, $waktu, $jenis);
                            $rental->buktiTransaksi($isMember);
                        }
                    }
                }
            }


            ?>
            <script>
                function buktiTransaksi() {
                    window.print();
                }
            </script>
        </div>
    
</body>
</html>