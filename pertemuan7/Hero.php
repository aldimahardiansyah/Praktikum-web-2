<?php
class Hero
{
    // Attribut / Properties pada class
    public $name;
    public $health;
    public $damage;
    public $level = 1;

    // constructor akan dijalankan secara otomatis
    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method untuk menampilkan informasi hero
    public function getInfo()
    {
        echo "Nama Hero: " . $this->name;
        echo "<br> Level: " . $this->level;
        echo "<br> HP: " . $this->health;
        echo "<br> Damage: " . $this->damage;
    }

    // method untuk naik satu level
    public function levelUp()
    {
        $this->level += 1;
    }

    // method untuk menyerang
    public function attack($target)
    {
        $target->health -= $this->damage;
    }
}

// membuat objek dari class Hero
$hero1 = new Hero('Alucard', 3200, 200);
$hero2 = new Hero('Franco', 5000, 50);

// memanggil method
$hero1->getInfo();

echo "<br> <hr>";

$hero1->levelUp();
$hero2->attack($hero1);

$hero1->getInfo();
