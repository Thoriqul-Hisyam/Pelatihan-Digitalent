<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
    <form>
        <label >Jumlah Bintang</label>
         <!-- name = angka merupakan variabel angka -->
        <input type="number" name="angka">
        <button >Submit</button>
    </form>

    <?php
        // Mengakses nilai dari form
        $angka = @$_GET['angka'];
        
        //melakukan pengulangan
        for($bintang = 1; $bintang <= $angka; $bintang++){
            for($hasil = 1; $hasil <= $bintang ; $hasil++){
                echo"*";
            }
             echo"<br>";
        }
    ?>

</body>
</html>
    