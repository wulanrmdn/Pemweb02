<?php

class Motor
{
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    public function __construct($nama_motor, $merk, $bensin, $topSpeed, $cc)
    {
        $this->nama_motor = $nama_motor;
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    public function jalan($jarak)
    {
        return "Bensin berkurang sebesar : " . ($jarak / 30) . " liter";
    }
}
// method motor
$motor1 = new Motor('NMax', 'Yamaha',  5, 200, 1000);
echo "Nama Motor : " . $motor1->nama_motor . "<br/>";
echo "Merk Motor: " . $motor1->merk . "<br/>";
echo "Jarak Tempuh: 150km <br/>";
echo $motor1->jalan(150);
