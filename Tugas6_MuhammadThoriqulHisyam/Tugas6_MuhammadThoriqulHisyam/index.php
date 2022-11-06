<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Aplikasi Kalkulator</title>
</head>
<body>

    <?php
        if(isset($_POST['hitung'])){
          $angka1 = $_POST['angka1'];
          $angka2 = $_POST['angka2'];
          $operasi = $_POST['operasi'];

          switch ($operasi) {
            case 'tambah':
              $hasil = $angka1+$angka2;
            break;
            case 'kurang':
              $hasil = $angka1-$angka2;
            break;
            case 'kali':
              $hasil = $angka1*$angka2;
            break;
            case 'bagi':
              $hasil = $angka1/$angka2;
            break;			
          }
          
              }
      ?>

<form method="post" id="i1ot"  class="form" action="index.php">
  <h1 id="ilnsw" class="gpd-header">Aplikasi Kalkulator
  </h1>
  <div id="ic8q" class="form-group">
    <input type="text" placeholder="Input angka pertama.." name="angka1" id="ic0g" class="input"/>
  </div>
  <div id="isbf" class="form-group">
    <input type="text" placeholder="Input angka kedua.." name="angka2" id="ih7d4" class="input"/>
  </div>
  <div class="form-group">
    <select type="text" name="operasi" id="ikit8" class="select">
      <option value="tambah">+</option>
      <option value="kurang">-</option>
      <option value="kali">x</option>
      <option value="bagi">/</option>
    </select>
  </div>
  <div class="form-group">
    <button type="submit" name="hitung"  id="i43ef" class="button">Hitung</button>
    <?php if(isset($_POST['hitung'])){ ?>
	    <input type="text" value="<?php echo $hasil; ?>" id="iynhf">
    <?php }else{ ?>
	    <input type="text" value="0" id="iynhf">
    <?php } ?>
  </div>
</form>
</body>
</html>