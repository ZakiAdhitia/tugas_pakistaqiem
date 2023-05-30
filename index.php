<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I/O TextField</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="txNama" id="" required autocomplete="off" placeholder="Masukan Nama"><br><br>
        <input type="number" name="txNis" id="" required autocomplete="off" placeholder="Masukan Nis"><br><br>
        <input type="text" name="txRombel" id="" required autocomplete="off" placeholder="Masukan Rombel"><br><br>
        <input type="submit" value="Simpan" name="btnSimpan"><br><br>
    </form>
    <?php
    class Biodata {
        public $nama;
        public $nis;
        public $rombel;


        public function setNama($nama) {
            $this->nama = $nama;
            if ($this->nama != "") {
                return $nama;
            } else
            echo "Data Masih Kosong!";
        }
        public function setNis($nis) {
            $this->nis = $nis;
            if ($this->nis != "") {
                return $nis;
            } else
            echo "Data Masih Kosong!";
        }
        public function setRombel($rombel) {
            $this->rombel = $rombel;
            if ($this->rombel != "") {
                return $rombel;
            } else
            echo "Data Masih Kosong!";
        }
    }

    
    $biodata = new Biodata();
    if(isset($_POST['btnSimpan'])) {
        $txNama = trim($_POST['txNama']);
        $txNis = trim($_POST['txNis']);
        $txRombel = trim($_POST['txRombel']);
        echo "Nama : " . $biodata->setNama($_POST['txNama']) ;
        if(!empty($txNama))
        $simpan1 = is_numeric($txNama);
        if ($simpan1 == true) { 
        echo "$txNama (ini adalah Angka) ";
        } else {
        echo " $txNama(ini adalah huruf) ";
        }
        echo "<br>";
        echo "Nis : " . $biodata->setNis($_POST['txNis']);
        if(!empty($txNis))
        $simpan2 = is_numeric($txNis);
        if ($simpan2 == true) { 
        echo " $txNis(ini adalah Angka) ";
        } else {
        echo "$txNis (ini adalah huruf) ";
        }
        echo "<br>";
        echo "Nis : " . $biodata->setRombel($_POST['txNis']);
        if(!empty($txRombel))
        $simpan3 = is_numeric($txRombel);
        if ($simpan3 == true) { 
        echo " $txRombel(ini adalah Angka) ";
        } else {
        echo " $txRombel (ini adalah huruf) ";
        }
    }
    ?>
</body>
</html>