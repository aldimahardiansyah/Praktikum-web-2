<?php
class Hero
{
    // access modifier pada oop ada 3: public, private, protected

    // attribut / properti
    public $nama;
    public $health;
    public $damage;
    public $level = 1;

    // constructor adalah method yang secara otomatis ketika objek dibuat
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan info dari hero
    public function getInfo()
    {
        echo "<br> Nama: " . $this->nama;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
        echo "<br> Level: " . $this->level;
    }

    // method untuk naik level
    public function levelUp($number)
    {
        $this->level = $this->level + $number;
        $this->health = $this->health + (200 * $number);
        $this->damage = $this->damage + (50 * $number);
    }
}

// membuat objek dari class Hero
$hero1 = new Hero("Alucard", 3200, 200);

$hero2 = new Hero("Franco", 5200, 50);

$hero1->getInfo();

echo "<hr>";

$hero1->levelUp(4);

$hero1->getInfo();

echo "<hr>";

// manggil level dari Alucard
echo $hero1->level;
