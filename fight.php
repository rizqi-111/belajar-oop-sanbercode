<?php
trait Hewan{
    public $nama;
    public $darah = 50;
    public $jumlahKaki;
    public $keahlian;

    public function atraksi(){
        echo $this->nama." sedang ".$this->keahlian."<br>";
    }

    public function getInfoHewan(){
        echo "Nama : ".$this->nama."<br>
             Jenis : ".$this->jenis."<br>
             Darah : ".$this->darah."<br>
             Jumlah Kaki : ".$this->jumlahKaki."<br>
             Keahlian : ".$this->keahlian."<br>";
    }
}

trait Fight{
    public $attackPower;
    public $defensePower;

    //attacked = hewan yang diserang
    //attacker = hewan yang menyerang
    public function serang($attacked){
        echo $this->nama." sedang menyerang ".$attacked->nama."<br>";
        $this->diserang($attacked);
        $this->update_darah($this,$attacked);
    }

    public function diserang($attacked){
        echo $attacked->nama." sedang diserang<br>";
    }

    public function update_darah($attacker,$attacked){
        $darahSekarang = $attacked->darah;
        $attackerAttackPower = $attacker->attackPower;
        $attackedDefensePower = $attacked->defensePower;

        $attacked->darah = $darahSekarang - ($attackerAttackPower/$attackedDefensePower);
        echo "Darah ".$attacked->nama." berubah dari ".$darahSekarang." menjadi ".$attacked->darah."<br>";
    }
}

class Elang{
    use Hewan,fight;
    public $jenis = "Elang";
    public function __construct($nama) 
    {
        $this->nama = $nama;
        $this->jumlahKaki = 2;
        $this->keahlian = "terbang tinggi";
        $this->attackPower = 10;
        $this->defensePower = 8;
    }
}

class Harimau{
    use Hewan,fight;
    public $jenis = "Harimau";
    public function __construct($nama) 
    {
        $this->nama = $nama;
        $this->jumlahKaki = 4;
        $this->keahlian = "lari cepat";
        $this->attackPower = 7;
        $this->defensePower = 8;
    }
}

$elg = new Elang("elang_1");
$elg->atraksi();
$elg->getInfoHewan();

echo "<br>";

$hrm = new Harimau("harimau_99");
$hrm->atraksi();
$hrm->getInfoHewan();

echo "<br>";

$elg->serang($hrm);

echo "<br>";

$hrm->serang($elg);

echo "<br>";

$elg->serang($hrm);

echo "<br>";

$hrm->serang($elg);
?>