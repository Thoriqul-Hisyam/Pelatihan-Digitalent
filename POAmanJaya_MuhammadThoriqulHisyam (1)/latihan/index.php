
<?php
    //mengambil data Json
    $data = "data.json";
    $dataJson = file_get_contents($data);
    $jurusanAll = json_decode($dataJson, true);


    //JURUSAN	PURWOKERTO	PURWOREJO	SEMARANG	JOGJA	SURABAYA
    // TARIP	100000	150000	180000	200000	250000
    // JUMLAH > 5	5%	6%	7%	8%	10%

    //Jurusan
    $jurusan = ["Purwokerto", "Purworejo", "Semarang", "Jogja", "Surabaya"];
    $hargaJurusan = array("Purwokerto" => 100000, "Purworejo" => 150000, "Semarang" => 180000, "Jogja" => 200000, "Surabaya" => 250000);
    $diskonJurusan = array("Purwokerto" => 5, "Purworejo" => 6, "Semarang" => 7, "Jogja" => 8, "Surabaya" => 10);
    
    //hitung harga tiket
    function tHargaTiket($hargaJurusan,$jumlah){
        
      return $hargaJurusan*$jumlah;
       
     }

    //hitung diskon
    function dHarga($diskonJurusan,$jumlah,$tHargaTiket){
        

        if($jumlah >= 5){
           $diskon = $tHargaTiket * $diskonJurusan / 100;
        }else{
            $diskon = 0;
        }

        return $diskon;
    }


    //hitung total harga
    function tAll($tHargaTiket,$dHarga){
        return $tHargaTiket-$dHarga;
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>PO AMAN JAYA</title>
</head>

<body>
    <div class="container bg-success text-white ">
        <div class="d-flex justify-content-center pt-5">
            <img src="download.jpg" class=" rounded-circle" alt="" width="15%">
        </div>
    <h1 class="text-center">PO AMAN JAYA</h1>
        <div class="d-flex justify-content-center">
            <form action="index.php" method="post">
            <table>
                <tr>
                    <td>Nomor KTP</td>
                    <td>:</td>
                    <td><input type="number" placeholder="Nomor KTP" name="ktp" required ></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" placeholder="Nama" name="nama" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" placeholder="Alamat" name="alamat" required></td>
                </tr>
                <tr>
                    <td>Hari</td>
                    <td>:</td>
                    <td><input type="text" placeholder="Hari" name="hari" required></td>
                </tr>
                <tr>
                    <td>Tanggal Berangkat</td>
                    <td>:</td>
                    <td><input type="date"  name="berangkat" class="w-100"  required></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan" id="" class="w-100" required>
                            <?php
                                foreach($jurusan as $asal){
                                    echo"<option value='".$asal."'>".$asal."</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Penumpang</td>
                    <td>:</td>
                    <td><input type="number" placeholder="Jumlah Penumpang" name="penumpang" required></td>
                </tr>
                <!-- <tr>
                    <td>Harga Tiket</td>
                    <td>:</td>
                    <td><input type="number" name="hargaTiket" placeholder="Harga Tiket" ></td>
                </tr> -->
                <tr>
                    <td></td>
                    <td></td>
                    <td><Button type="submit" name="submit" class="btn btn-primary">Pesan </td>
                </tr>
            </table>
        </form>
    </div> 
    <h3 class="text-center mt-5">Daftar Harga</h3>
    <div class="d-flex justify-content-center ">
        
        <table class="table table-bordered table-info bg-light">
            <tr>
                <td>Jurusan</td>
                <td>Purwokerto</td>
                <td>Purworejo</td>
                <td>Semarang</td>
                <td>Jogja</td>
                <td>Surabaya</td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>100000</td>
                <td>150000</td>
                <td>180000</td>
                <td>200000</td>
                <td>250000</td>
            </tr>
            <tr>
                <td>Jumlah >= 5</td>
                <td>5%</td>
                <td>6%</td>
                <td>7%</td>
                <td>8%</td>
                <td>10%</td>
            </tr>
        </table>
    </div>
    <?php

        if(isset($_POST['submit'])){
            $ktp = $_POST['ktp'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $hari = $_POST['hari'];
            $berangkat = $_POST['berangkat'];
            $jurusan = $_POST['jurusan'];
            $penumpang = $_POST['penumpang'];
            $harga = tAll(tHargaTiket($hargaJurusan[$jurusan],$penumpang),dHarga($diskonJurusan[$jurusan],$penumpang,tHargaTiket($hargaJurusan[$jurusan],$penumpang)));
       
            //mengirim data ke file Json     
            $jurusanGo = [$ktp,$nama,$alamat,$hari,$berangkat,$jurusan,$penumpang,$harga];
            array_push($jurusanAll, $jurusanGo);
            $dataJson = json_encode($jurusanAll, JSON_PRETTY_PRINT);
            file_put_contents($data,$dataJson);    
        }
    ?>
    
    <h3 class="text-center mt-5">Riwayat Pembelian Tiket</h3>
    <div class="d-flex justify-content-center">
    <table class="table bg-light table-striped rounded-2 text-center">
        <thead>
            <tr>
                <td>Nomor KTP</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Hari</td>
                <td>Tanggal Berangkat</td>
                <td>Jurusan</td>
                <td>Jumlah Penumpang</td>
                <td>Total Harga Tiket</td>
            </tr>
        </thead>
        <tbody>
            <?php
            for($data=0; $data < count($jurusanAll); $data++){

            
            echo"<tr>";
                echo"<td>".$jurusanAll[$data][0]."</td>";
                echo"<td>".$jurusanAll[$data][1]."</td>";
                echo"<td>".$jurusanAll[$data][2]."</td>";
                echo"<td>".$jurusanAll[$data][3]."</td>";
                echo"<td>".$jurusanAll[$data][4]."</td>";
                echo"<td>".$jurusanAll[$data][5]."</td>";
                echo"<td>".$jurusanAll[$data][6]."</td>";
                echo"<td>".$jurusanAll[$data][7]."</td>";
            echo"</tr>";
        }
            ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>